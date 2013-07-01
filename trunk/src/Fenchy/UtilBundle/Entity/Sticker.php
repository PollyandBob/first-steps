<?php

namespace Fenchy\UtilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Fenchy\UserBundle\Entity\User,
    Fenchy\NoticeBundle\Entity\Notice,
    Fenchy\NoticeBundle\Entity\Review;

/**
 * @ORM\Table(name="stickers")
 * @ORM\Entity(repositoryClass="Fenchy\UtilBundle\Entity\StickerRepository")
 */
class Sticker {
    
    const REASON_HARASS     = 0;
    const REASON_SPAM       = 1;
    const REASON_COMMERCIAL = 2;
    const REASON_FORBIDDEN  = 3;
    const REASON_BEHAVIOUR  = 4;
    
    static public $reasonMap = array(
        self::REASON_HARASS     => 'harass',
        self::REASON_SPAM       => 'spam',
        self::REASON_COMMERCIAL => 'commercial',
        self::REASON_FORBIDDEN  => 'forbidden',
        self::REASON_BEHAVIOUR  => 'behaviour'
    );

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    
    /**
     * @var integer
     * 
     * @ORM\Column(type="array", nullable=false)
     */
    private $reason;
    
    /**
     * @var string
     * 
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @var User
     * 
     * @ORM\ManyToOne(targetEntity="Fenchy\UserBundle\Entity\User", inversedBy="stickers")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    private $user;
    
    /**
     * @var Notice
     * 
     * @ORM\ManyToOne(targetEntity="Fenchy\NoticeBundle\Entity\Notice", inversedBy="stickers")
     * @ORM\JoinColumn(name="notice_id", referencedColumnName="id", nullable=true)
     */
    private $notice;
    
    /**
     * @var Review
     * 
     * @ORM\ManyToOne(targetEntity="Fenchy\NoticeBundle\Entity\Review", inversedBy="stickers")
     * @ORM\JoinColumn(name="review_id", referencedColumnName="id", nullable=true)
     */
    private $review;
    
    /**
     * @var DateTime
     * 
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $created_at;
    
    /**
     * @var User
     * 
     * @ORM\ManyToOne(targetEntity="Fenchy\UserBundle\Entity\User", inversedBy="reported_stickers")
     * @ORM\JoinColumn(name="reported_by_id", referencedColumnName="id", nullable=false)
     */
    private $reported_by;
    
    /**
     * @var DateTime
     * 
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $discarded_at;
    
    public function __construct() {
        
        $this->created_at = new \DateTime();
    }
    
    /**
     * Set ID
     * @param Integer $id
     * @return Sticker 
     */
    public function setId($id) {
        
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * Get ID
     * @return Integer 
     */
    public function getId() {
        
        return $this->id;
    }
    
    /**
     * Set Description
     * @param String $desc
     * @return Sticker 
     */
    public function setDescription($desc) {
        
        $this->description = $desc;
        
        return $this;
    }
    
    /**
     * Get Description
     * @return String
     */
    public function getDescription() {
        
        return $this->description;
    }

    /**
     * Set User
     * @param User $user
     * @return Sticker 
     */
    public function setUser(User $user) {
        
        $this->user = $user;
        
        return $this;
    }
    
    
    /**
     * Get User
     * @return User 
     */
    public function getUser() {
        
        return $this->user;
    }
    
    /**
     * Set Notice
     * @param Notice $notice
     * @return Sticker 
     */
    public function setNotice(Notice $notice) {
        
        $this->notice = $notice;
        
        return $this;
    }
    
    /**
     * Get Notice
     * @return Notice 
     */
    public function getNotice() {
        
        return $this->notice;
    }
    
    /**
     * Set Review
     * @param Review $review
     * @return Sticker 
     */
    public function setReview(Review $review) {
        
        $this->review = $review;
        
        return $this;
    }
    
    /**
     * Get Review
     * @return Review 
     */
    public function getReview() {
        
        return $this->review;
    }

    public function getCreatedAt() {
        
        return $this->created_at;
    }
    
    public function setCreatedAt($date) {
        
        $this->created_at = $date;
        
        return $this;
    } 
    
    /**
     * Returns reason name or NULL if not found.
     * 
     * @param integer $reason
     * @return mixed
     */
    public function getReasonName($reason = NULL) {
        
        NULL === $reason && $reason = $this->reason[0];
        return array_key_exists($reason, self::$reasonMap) ? self::$reasonMap[$reason] : NULL;
    }
    
    public function getReason() {
        
        return $this->reason;
    }
    
    public function setReason($reasons) {

        foreach($reasons as $reason)
            if(!array_key_exists($reason, self::$reasonMap)) {

                throw new Exception('Reason of that number ('.$reason.') does not exists.');
            }
        
        $this->reason = $reasons;
        
        return $this;
    }
    
    /**
     * Get Reported By
     * @return User
     */
    public function getReportedBy() {
        
        return $this->reported_by;
    }
    
    /**
     * Set Reported By
     * @param User $user
     * @return Sticker 
     */
    public function setReportedBy(User $user) {
        
        $this->reported_by = $user;
        
        return $this;
    }
    
    /**
     * Get Discarded at
     * @return \DateTime 
     */
    public function getDiscardedAt() {
        
        return $this->discarded_at;
    }
    
    /**
     * Set Discarded at
     * @param \DateTime $date
     * @return Sticker 
     */
    public function setDiscardedAt(\DateTime $date) {
        
        $this->discarded_at = $date;
        
        return $this;
    }
    
    public function getTargetId() {
        
        if($this->user) return $this->user->getId();
        if($this->notice) return $this->notice->getId();
        if($this->review) return $this->review->getId();
        
        return NULL;
    }
    
    public function getTarget() {
        
        if($this->user) return 'user';
        if($this->notice) return 'notice';
        if($this->review) return 'review';
        return '';
    }
    
    public function discard() {
        
        $this->discarded_at = new \DateTime();
    }
}

?>
