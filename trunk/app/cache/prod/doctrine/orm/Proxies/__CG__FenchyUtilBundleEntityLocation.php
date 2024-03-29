<?php

namespace Proxies\__CG__\Fenchy\UtilBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Location extends \Fenchy\UtilBundle\Entity\Location implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function getLatitude()
    {
        $this->__load();
        return parent::getLatitude();
    }

    public function setLatitude($latitude)
    {
        $this->__load();
        return parent::setLatitude($latitude);
    }

    public function getLongitude()
    {
        $this->__load();
        return parent::getLongitude();
    }

    public function setLongitude($longitude)
    {
        $this->__load();
        return parent::setLongitude($longitude);
    }

    public function getAddress()
    {
        $this->__load();
        return parent::getAddress();
    }

    public function getGapiAddress()
    {
        $this->__load();
        return parent::getGapiAddress();
    }

    public function setGapiAddress()
    {
        $this->__load();
        return parent::setGapiAddress();
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

    public function setNotice(\Fenchy\NoticeBundle\Entity\Notice $notice)
    {
        $this->__load();
        return parent::setNotice($notice);
    }

    public function getNotice()
    {
        $this->__load();
        return parent::getNotice();
    }

    public function hasPoint()
    {
        $this->__load();
        return parent::hasPoint();
    }

    public function hasLocation()
    {
        $this->__load();
        return parent::hasLocation();
    }

    public function setPgisGeog($pgisGeog)
    {
        $this->__load();
        return parent::setPgisGeog($pgisGeog);
    }

    public function getPgisGeog()
    {
        $this->__load();
        return parent::getPgisGeog();
    }

    public function setPgisGeom($pgisGeom)
    {
        $this->__load();
        return parent::setPgisGeom($pgisGeom);
    }

    public function getPgisGeom()
    {
        $this->__load();
        return parent::getPgisGeom();
    }

    public function getLocation()
    {
        $this->__load();
        return parent::getLocation();
    }

    public function setLocation($location)
    {
        $this->__load();
        return parent::setLocation($location);
    }

    public function getPrintable()
    {
        $this->__load();
        return parent::getPrintable();
    }

    public function setPrintable($location)
    {
        $this->__load();
        return parent::setPrintable($location);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'location', 'printable', 'pgisGeog', 'pgisGeom', 'user', 'notice');
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