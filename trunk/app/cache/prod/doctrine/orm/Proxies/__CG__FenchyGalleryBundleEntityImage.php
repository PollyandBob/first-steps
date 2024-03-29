<?php

namespace Proxies\__CG__\Fenchy\GalleryBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Image extends \Fenchy\GalleryBundle\Entity\Image implements \Doctrine\ORM\Proxy\Proxy
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

    public function getPathByType($type = 'thumbnail')
    {
        $this->__load();
        return parent::getPathByType($type);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getSequence()
    {
        $this->__load();
        return parent::getSequence();
    }

    public function setSequence($seq)
    {
        $this->__load();
        return parent::setSequence($seq);
    }

    public function getGallery()
    {
        $this->__load();
        return parent::getGallery();
    }

    public function setGallery(\Fenchy\GalleryBundle\Entity\Gallery $gallery)
    {
        $this->__load();
        return parent::setGallery($gallery);
    }

    public function isEmpty()
    {
        $this->__load();
        return parent::isEmpty();
    }

    public function setUpdatedAt($date = NULL)
    {
        $this->__load();
        return parent::setUpdatedAt($date);
    }

    public function getCrop()
    {
        $this->__load();
        return parent::getCrop();
    }

    public function setCrop($bool)
    {
        $this->__load();
        return parent::setCrop($bool);
    }

    public function isCropped()
    {
        $this->__load();
        return parent::isCropped();
    }

    public function getUpdatedAt()
    {
        $this->__load();
        return parent::getUpdatedAt();
    }

    public function getJQCarouselData()
    {
        $this->__load();
        return parent::getJQCarouselData();
    }

    public function getSrc($size)
    {
        $this->__load();
        return parent::getSrc($size);
    }

    public function getAvatar($small = true)
    {
        $this->__load();
        return parent::getAvatar($small);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'sequence', 'updated_at', 'crop', 'gallery');
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