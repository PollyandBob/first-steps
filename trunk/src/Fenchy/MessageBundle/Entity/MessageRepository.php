<?php

namespace Fenchy\MessageBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr;
use Fenchy\UserBundle\Entity\User,
    Fenchy\NoticeBundle\Entity\Notice;

/**
 * MessageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MessageRepository extends EntityRepository
{
    /**
     * Finds messages by user with type:
     * - all (or null) - last is send or received by me
     * - unread - last is received by me and read = FALSE
     * - unreplied - last is received by me and has no prev messages
     * - send - last is send by me
     * @param \Fenchy\UserBundle\Entity\User $user
     * @param unread|unreplied|sent|about|all|null $type
     * @return QueryBuilder
     */
    protected function findReceivedMessagesQueryBuilder(User $user, $type = null)
    {
        $qb = $this->createQueryBuilder('m');
        switch ($type) {
            case 'sent':
                $qb->where('m.sender = :user')
                    ->andWhere('m.sender_deleted_at IS NULL');
                break;
            case 'unread':
                $qb->where('m.receiver = :user')
                    ->andWhere('m.receiver_deleted_at IS NULL')
                    ->andWhere('m.read = FALSE');
                break;
            case 'unreplied':
                $qb->where('m.receiver = :user')
                    ->andWhere('m.receiver_deleted_at IS NULL')
                    ->andWhere('m.prev IS NULL');
                break;
            case 'about':
                $qb->join('m.about_notice', 'n')
                    ->where('m.receiver = :user')
                    ->andWhere('m.receiver_deleted_at IS NULL')
                    ->andWhere('m.receiver = n.user')
                    // get first message - request
                    ->andWhere('m.prev IS NULL');
                break;
            default: // all|null
                $qb->where($qb->expr()->orx(
                    $qb->expr()->andx(
                        'm.receiver = :user',
                        'm.receiver_deleted_at IS NULL'
                    ),
                    $qb->expr()->andx(
                        'm.sender = :user',
                        'm.sender_deleted_at IS NULL'
                    )
                ));
                break;
        }

        if ('about' !== $type) {
            //get last message from thread only
            $qb->andWhere('m.next IS NULL');
        }
        $qb->setParameter('user', $user);
        
        return $qb;
    }
    
    /**
     * Finds messages by user with type:
     * - all (or null) - last is send or received by me
     * - unread - last is received by me and read = FALSE
     * - unreplied - last is received by me and has no prev messages
     * - send - last is send by me
     * @param \Fenchy\UserBundle\Entity\User $user
     * @param unread|unreplied|sent|about|all|null $type
     * @return ArrayCollection()
     */
    public function findReceivedMessages(User $user, $type = null, $ids = array())
    {
        $q = $this->findReceivedMessagesQueryBuilder($user, $type);
        if(!empty($ids)) {
            $q->andWhere($q->expr()->not($q->expr()->in('m', $ids)));
        }
        return $q->orderBy('m.created_at', 'DESC')
                ->getQuery()
                ->getResult();
    }

    /**
     * Counts messages for user
     * @param \Fenchy\UserBundle\Entity\User $user
     * @param unread|unreplied|sent|about|all|null $type
     * @return int
     */
    public function count(User $user, $type = null)
    {
        return $this->findReceivedMessagesQueryBuilder($user, $type)
                ->select('count(m.id)')
                ->getQuery()
                ->getSingleScalarResult();
    }

    /**
     * Finds messages from this thread
     * @param Message $message
     * @return ArrayCollection() 
     */
    public function findThreadMessages(Message $message)
    {
        return $this->createQueryBuilder('m')
                ->where('m.first = :first')
                ->setParameter('first', $message->getFirst())
                ->orderBy('m.created_at')
                ->getQuery()
                ->getResult();
    }

    /**
     * Finds message using Id
     * @param int $id
     * @return Message 
     */
    public function findById($id, $user)
    {
        $qb = $this->createQueryBuilder('m');
        $qb->where('m.id = :id')
            ->andWhere($qb->expr()->orx(
                $qb->expr()->andx(
                    'm.receiver = :user',
                    'm.receiver_deleted_at IS NULL'
                ),
                $qb->expr()->andx(
                    'm.sender = :user',
                    'm.sender_deleted_at IS NULL'
                )
            ))
            ->setParameter('id', $id)
            ->setParameter('user', $user);
        return $qb->getQuery()
                    ->getOneOrNullResult();
    }

    
    /**
     * Finds messages using array with ids
     * @param array $ids
     * @param User $user
     * @return array
     */
    public function findByIds($ids, $user)
    {
        $qb = $this->createQueryBuilder('m');
        $qb->where('m.id IN (:ids)')
            ->andWhere($qb->expr()->orx(
                $qb->expr()->andx(
                    'm.receiver = :user',
                    'm.receiver_deleted_at IS NULL'
                ),
                $qb->expr()->andx(
                    'm.sender = :user',
                    'm.sender_deleted_at IS NULL'
                )
            ))
            ->setParameter('ids', $ids)
            ->setParameter('user', $user);
        return $qb->getQuery()
                    ->getResult();
    }    
    
    /**
     * Finds last message from the thread using Id
     * @param int $id
     * @return Message
     */
    public function findLastById($id, $user)
    {
        $qb = $this->createQueryBuilder('m');
        $qb->join('FenchyMessageBundle:Message', 'm2', Expr\Join::WITH, 'm.first = m2.first')
            ->where('m2.id = :id')
            ->andWhere($qb->expr()->orx(
                $qb->expr()->andx(
                    'm.receiver = :user',
                    'm.receiver_deleted_at IS NULL'
                ),
                $qb->expr()->andx(
                    'm.sender = :user',
                    'm.sender_deleted_at IS NULL'
                )
            ))
            ->andWhere('m.next IS NULL')
            ->setParameter('id', $id)
            ->setParameter('user', $user);
        return $qb->getQuery()
                    ->getOneOrNullResult();
    }
    
    /**
     * Finds all messages where given user is sender or reciever.
     * @uses Messenger::removeUserMessages() to remove messages without sender
     * and reciever.
     * 
     * @author Michał Nowak <mnowak@pgs-soft.com>
     */
    public function findBySenderOrReceiver(User $user) {
        
        return $this->createQueryBuilder('m')
                ->where('m.receiver = :user')
                ->orWhere('m.sender = :user')
                ->setParameter('user', $user)
                ->getQuery()
                ->getResult();
    }
    
    public function findAboutUserNotices(User $user) {
        
        return $this->createQueryBuilder('m')
                ->join('m.about_notice', 'n', Expr\Join::WITH, 'n.user = :user')
                ->setParameter('user', $user)
                ->getQuery()
                ->getResult();
    }
    
    /**
     * Returns all messages related to given notice.
     * 
     * @param Notice $notice
     * @return array
     * 
     * @uses Fenchy\MessageBundle\Services\Messenger
     * @author Michał Nowak <mnowak@pgs-soft.com>
     */
    public function findByNotice(Notice $notice) {
        
        return $this->createQueryBuilder('m')
                ->join('m.about_notice', 'n', Expr\Join::WITH, 'n = :notice')
                ->setParameter('notice', $notice)
                ->getQuery()
                ->getResult();
    }
}
