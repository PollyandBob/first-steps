<?php

namespace Proxies\__CG__\Fenchy\UserBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class EmailChangeRequest extends \Fenchy\UserBundle\Entity\EmailChangeRequest implements \Doctrine\ORM\Proxy\Proxy
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

    public function setUser(\Fenchy\UserBundle\Entity\User $user)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function setRequestedEmail($requestedEmail)
    {
        $this->__load();
        return parent::setRequestedEmail($requestedEmail);
    }

    public function getRequestedEmail()
    {
        $this->__load();
        return parent::getRequestedEmail();
    }

    public function setSuppliedAt($suppliedAt)
    {
        $this->__load();
        return parent::setSuppliedAt($suppliedAt);
    }

    public function getSuppliedAt()
    {
        $this->__load();
        return parent::getSuppliedAt();
    }

    public function setConfirmationToken($confirmationToken)
    {
        $this->__load();
        return parent::setConfirmationToken($confirmationToken);
    }

    public function getConfirmationToken()
    {
        $this->__load();
        return parent::getConfirmationToken();
    }

    public function isNonExpired($ttl)
    {
        $this->__load();
        return parent::isNonExpired($ttl);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'requested_email', 'supplied_at', 'confirmation_token', 'user');
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