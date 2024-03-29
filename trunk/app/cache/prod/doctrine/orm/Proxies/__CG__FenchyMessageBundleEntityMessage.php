<?php

namespace Proxies\__CG__\Fenchy\MessageBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Message extends \Fenchy\MessageBundle\Entity\Message implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setContent($content)
    {
        $this->__load();
        return parent::setContent($content);
    }

    public function getContent()
    {
        $this->__load();
        return parent::getContent();
    }

    public function setCreatedAt($createdAt)
    {
        $this->__load();
        return parent::setCreatedAt($createdAt);
    }

    public function getCreatedAt()
    {
        $this->__load();
        return parent::getCreatedAt();
    }

    public function setRead($read)
    {
        $this->__load();
        return parent::setRead($read);
    }

    public function getRead()
    {
        $this->__load();
        return parent::getRead();
    }

    public function isRead()
    {
        $this->__load();
        return parent::isRead();
    }

    public function isUnread()
    {
        $this->__load();
        return parent::isUnread();
    }

    public function setSender(\Fenchy\UserBundle\Entity\User $sender)
    {
        $this->__load();
        return parent::setSender($sender);
    }

    public function getSender()
    {
        $this->__load();
        return parent::getSender();
    }

    public function unsetSender()
    {
        $this->__load();
        return parent::unsetSender();
    }

    public function setReceiver(\Fenchy\UserBundle\Entity\User $receiver)
    {
        $this->__load();
        return parent::setReceiver($receiver);
    }

    public function getReceiver()
    {
        $this->__load();
        return parent::getReceiver();
    }

    public function unsetReceiver()
    {
        $this->__load();
        return parent::unsetReceiver();
    }

    public function addAboutUser(\Fenchy\UserBundle\Entity\User $aboutUser)
    {
        $this->__load();
        return parent::addAboutUser($aboutUser);
    }

    public function removeAboutUser(\Fenchy\UserBundle\Entity\User $aboutUser)
    {
        $this->__load();
        return parent::removeAboutUser($aboutUser);
    }

    public function getAboutUser()
    {
        $this->__load();
        return parent::getAboutUser();
    }

    public function addAboutNotice(\Fenchy\NoticeBundle\Entity\Notice $aboutNotice)
    {
        $this->__load();
        return parent::addAboutNotice($aboutNotice);
    }

    public function removeAboutNotice(\Fenchy\NoticeBundle\Entity\Notice $aboutNotice)
    {
        $this->__load();
        return parent::removeAboutNotice($aboutNotice);
    }

    public function getAboutNotice()
    {
        $this->__load();
        return parent::getAboutNotice();
    }

    public function getNotice()
    {
        $this->__load();
        return parent::getNotice();
    }

    public function setNotice(\Fenchy\NoticeBundle\Entity\Notice $aboutNotice)
    {
        $this->__load();
        return parent::setNotice($aboutNotice);
    }

    public function unsetNotice()
    {
        $this->__load();
        return parent::unsetNotice();
    }

    public function isRequest()
    {
        $this->__load();
        return parent::isRequest();
    }

    public function setFirst(\Fenchy\MessageBundle\Entity\Message $first)
    {
        $this->__load();
        return parent::setFirst($first);
    }

    public function getFirst()
    {
        $this->__load();
        return parent::getFirst();
    }

    public function setPrev(\Fenchy\MessageBundle\Entity\Message $prev = NULL)
    {
        $this->__load();
        return parent::setPrev($prev);
    }

    public function getPrev()
    {
        $this->__load();
        return parent::getPrev();
    }

    public function setNext(\Fenchy\MessageBundle\Entity\Message $next = NULL)
    {
        $this->__load();
        return parent::setNext($next);
    }

    public function getNext()
    {
        $this->__load();
        return parent::getNext();
    }

    public function isReply()
    {
        $this->__load();
        return parent::isReply();
    }

    public function setSenderDeletedAt(\DateTime $senderDeletedAt = NULL)
    {
        $this->__load();
        return parent::setSenderDeletedAt($senderDeletedAt);
    }

    public function unsetSenderDeletedAt()
    {
        $this->__load();
        return parent::unsetSenderDeletedAt();
    }

    public function getSenderDeletedAt()
    {
        $this->__load();
        return parent::getSenderDeletedAt();
    }

    public function setReceiverDeletedAt(\DateTime $receiverDeletedAt = NULL)
    {
        $this->__load();
        return parent::setReceiverDeletedAt($receiverDeletedAt);
    }

    public function unsetReceiverDeletedAt()
    {
        $this->__load();
        return parent::unsetReceiverDeletedAt();
    }

    public function getReceiverDeletedAt()
    {
        $this->__load();
        return parent::getReceiverDeletedAt();
    }

    public function setSystem($system = true)
    {
        $this->__load();
        return parent::setSystem($system);
    }

    public function getSystem()
    {
        $this->__load();
        return parent::getSystem();
    }

    public function isReplyable()
    {
        $this->__load();
        return parent::isReplyable();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'title', 'content', 'read', 'created_at', 'sender_deleted_at', 'receiver_deleted_at', 'system', 'sender', 'receiver', 'about_user', 'about_notice', 'first', 'prev', 'next');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        parent::__clone();
    }
}