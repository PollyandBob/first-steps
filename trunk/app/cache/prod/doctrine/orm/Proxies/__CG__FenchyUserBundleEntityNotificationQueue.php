<?php

namespace Proxies\__CG__\Fenchy\UserBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class NotificationQueue extends \Fenchy\UserBundle\Entity\NotificationQueue implements \Doctrine\ORM\Proxy\Proxy
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

    public function setSendAfter($sendAfter)
    {
        $this->__load();
        return parent::setSendAfter($sendAfter);
    }

    public function getSendAfter()
    {
        $this->__load();
        return parent::getSendAfter();
    }

    public function setFromAddress($fromAddress)
    {
        $this->__load();
        return parent::setFromAddress($fromAddress);
    }

    public function getFromAddress()
    {
        $this->__load();
        return parent::getFromAddress();
    }

    public function setFromName($fromName)
    {
        $this->__load();
        return parent::setFromName($fromName);
    }

    public function getFromName()
    {
        $this->__load();
        return parent::getFromName();
    }

    public function setToAddress($toAddress)
    {
        $this->__load();
        return parent::setToAddress($toAddress);
    }

    public function getToAddress()
    {
        $this->__load();
        return parent::getToAddress();
    }

    public function setSubject($subject)
    {
        $this->__load();
        return parent::setSubject($subject);
    }

    public function getSubject()
    {
        $this->__load();
        return parent::getSubject();
    }

    public function setBodyHtml($bodyHtml)
    {
        $this->__load();
        return parent::setBodyHtml($bodyHtml);
    }

    public function getBodyHtml()
    {
        $this->__load();
        return parent::getBodyHtml();
    }

    public function setBodyPlain($bodyPlain)
    {
        $this->__load();
        return parent::setBodyPlain($bodyPlain);
    }

    public function getBodyPlain()
    {
        $this->__load();
        return parent::getBodyPlain();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'send_after', 'from_address', 'from_name', 'to_address', 'subject', 'body_html', 'body_plain');
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
        
    }
}