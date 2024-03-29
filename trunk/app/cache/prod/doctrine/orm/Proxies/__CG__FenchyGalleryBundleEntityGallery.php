<?php

namespace Proxies\__CG__\Fenchy\GalleryBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Gallery extends \Fenchy\GalleryBundle\Entity\Gallery implements \Doctrine\ORM\Proxy\Proxy
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

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function getRegularUser()
    {
        $this->__load();
        return parent::getRegularUser();
    }

    public function setRegularUser($regularUser)
    {
        $this->__load();
        return parent::setRegularUser($regularUser);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function findUser()
    {
        $this->__load();
        return parent::findUser();
    }

    public function unsetUser()
    {
        $this->__load();
        return parent::unsetUser();
    }

    public function setUser(\Fenchy\UserBundle\Entity\User $user)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getImages()
    {
        $this->__load();
        return parent::getImages();
    }

    public function setImages(\Doctrine\Common\Collections\ArrayCollection $images)
    {
        $this->__load();
        return parent::setImages($images);
    }

    public function addImage(\Fenchy\GalleryBundle\Entity\Image $image)
    {
        $this->__load();
        return parent::addImage($image);
    }

    public function removeImage(\Fenchy\GalleryBundle\Entity\Image $image)
    {
        $this->__load();
        return parent::removeImage($image);
    }

    public function getPrevImagesQuantity()
    {
        $this->__load();
        return parent::getPrevImagesQuantity();
    }

    public function getMainImage()
    {
        $this->__load();
        return parent::getMainImage();
    }

    public function hasImages()
    {
        $this->__load();
        return parent::hasImages();
    }

    public function isEmpty()
    {
        $this->__load();
        return parent::isEmpty();
    }

    public function getNotice()
    {
        $this->__load();
        return parent::getNotice();
    }

    public function setNotice(\Fenchy\NoticeBundle\Entity\Notice $notice)
    {
        $this->__load();
        return parent::setNotice($notice);
    }

    public function getOwner()
    {
        $this->__load();
        return parent::getOwner();
    }

    public function setTmp($gallery)
    {
        $this->__load();
        return parent::setTmp($gallery);
    }

    public function getTmp()
    {
        $this->__load();
        return parent::getTmp();
    }

    public function setOriginal($gallery)
    {
        $this->__load();
        return parent::setOriginal($gallery);
    }

    public function getOriginal()
    {
        $this->__load();
        return parent::getOriginal();
    }

    public function isTmp()
    {
        $this->__load();
        return parent::isTmp();
    }

    public function setImagesNumber($max)
    {
        $this->__load();
        return parent::setImagesNumber($max);
    }

    public function getImagesQuantity()
    {
        $this->__load();
        return parent::getImagesQuantity();
    }

    public function getFolder()
    {
        $this->__load();
        return parent::getFolder();
    }

    public function getPath()
    {
        $this->__load();
        return parent::getPath();
    }

    public function getSrc()
    {
        $this->__load();
        return parent::getSrc();
    }

    public function getExistingFiles()
    {
        $this->__load();
        return parent::getExistingFiles();
    }

    public function createTmp()
    {
        $this->__load();
        return parent::createTmp();
    }

    public function cloneImages($images)
    {
        $this->__load();
        return parent::cloneImages($images);
    }

    public function update()
    {
        $this->__load();
        return parent::update();
    }

    public function getJQCarouselData()
    {
        $this->__load();
        return parent::getJQCarouselData();
    }

    public function getAvatar($small = true)
    {
        $this->__load();
        return parent::getAvatar($small);
    }

    public function getFBImage()
    {
        $this->__load();
        return parent::getFBImage();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'images', 'regular_user', 'user', 'notice', 'tmp', 'original');
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