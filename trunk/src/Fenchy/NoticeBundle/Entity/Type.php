<?php

namespace Fenchy\NoticeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Table(name="notice__types", uniqueConstraints={@UniqueConstraint(name="typename_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="Fenchy\NoticeBundle\Entity\TypeRepository")
 */
class Type {
    
    public static $direction = 'direction';
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $name;
    
    /**
     * @var integer
     * 
     * @ORM\Column(type="integer", nullable=false)
     */
    private $sequence;
    
    /**
     * Determinates if location changes of it's notices are possible.
     * @var bool
     * @ORM\Column(name="location_change_available", type="boolean", nullable=false)
     */
    private $locationChangeAvailable;
    
    /**
     * @var Type
     * 
     * @ORM\ManyToOne(targetEntity="Type", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", nullable=true)
     */
    private $parent;
    
    /**
     * @var ArrayCollection $children
     * 
     * @ORM\OneToMany(targetEntity="Type", mappedBy="parent")
     */
    private $children;
    
    /**
     * @var ArrayCollection $properties
     * 
     * @ORM\ManyToMany(targetEntity="PropertyType", inversedBy="types")
     * @ORM\JoinTable(name="notice__type__properties")
     */
    private $properties;
    
    /**
     * @var ArrayCollection $notices
     * 
     * @ORM\OneToMany(targetEntity="Notice", mappedBy="type")
     */
    private $notices;
    
    public function __construct() {
        
        $this->children     = new ArrayCollection();
        $this->properties   = new ArrayCollection();
    }
    
    public function __toString() {

        return $this->name;
    }
    
    /**
     * @return integer
     */
    public function getId() {
        
        return $this->id;
    }
    
    /**
     * @param integer $id
     * @return Type 
     */
    public function setId($id) {
        
        $this->id = $id;
        
        return $this;
    }
    
    public function getName() {
        
        return $this->name;
    }
    
    /**
     * @param string $name
     * @return Type 
     */
    public function setName($name) {
        
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return Type
     */
    public function getParent() {
        
        return $this->parent;
    }
    
    /**
     * Returns SELF!
     * 
     * @param Type $parent
     * @return Type 
     */
    public function setParent(Type $parent) {
        
        $this->parent = $parent;
        
        return $this;
    }
    
    /**
     * @return ArrayCollection;
     */
    public function getChildren() {
        
        return $this->children;
    }
    
    /**
     * @param ArrayCollection $children
     * @return Type
     */
    public function setChildren(ArrayCollection $children) {
        
        $this->children = $children;
        
        return $this;
    }
    
    /**
     * @param Type $type
     * @return Type 
     */
    public function addChild(Type $type) {
        
        $this->children->add($type);
        
        return $this;
    }
    
    /**
     * @param Type $type
     * @return Type 
     */
    public function removeChild(Type $type) {
        
        $this->children->removeElement($type);
        
        return $this;
    }
    
    /**
     * @return ArrayCollection
     */
    public function getProperties() {
        
        return $this->properties;
    }
    
    public function getProperty($id) {
        
        foreach($this->properties as $property) {
            
            if($property->getId() == $id) {

                return $property;
            }
        }
        
        return NULL;
    }
    
    /**
     * @param ArrayCollection $properties
     * @return Type 
     */
    public function setProperties(ArrayCollection $properties) {
        
        $this->properties = $properties;
        
        return $this;
    }
    
    /**
     * @param PropertyType $property
     * @return Type 
     */
    public function addProperty(PropertyType $property) {
        
        $this->properties->add($property);
        
        return $this;
    }
    
    /**
     * @param PropertyType $property
     * @return Type 
     */
    public function removeProperty(PropertyType $property) {
        
        $this->properties->removeElement($property);
        
        return $this;
    }
    
    /**
     * Get Location change available flag
     * @return bool
     */
    public function getLocationChangeAvailable() {
        
        return $this->locationChangeAvailable;
    }
    
    /**
     * Set Location change available flag
     * @param bool $bool
     * @return \Fenchy\NoticeBundle\Entity\Type
     */
    public function setLocationChangeAvailable($bool) {
        
        $this->locationChangeAvailable = (bool) $bool;
        
        return $this;
    }
    
    /**
     * Check if location changes for its notices are available.
     * @return bool
     */
    public function isLocationChangeAvailable() {
        
        return $this->locationChangeAvailable;
    }
    
    public function getRoot() {
        
        return NULL === $this->parent ? $this : $this->parent->getRoot();
    }
    
    public function getSequence() {
        
        return $this->sequence;
    }
    
    public function setSequence($sequence) {
        
        $this->sequence = $sequence;
        
        return $this;
    }
    
    /**
     * @return Notice
     */
    public function getNotices() {
        
        return $this->notices;
    }
    
    public function setNotices(ArrayCollection $notices) {
        
        $this->notices = $notices;
        
        return $this;
    }
    
    /**
     * Return array of names of this type and its parents types
     */
    public function getParentPath() {
        
        if (NULL != $this->parent) {
            
            $names = $this->parent->getParentPath();
            $names[] = $this->name;
            
        } else {
            
            $names = array($this->name);
        }
        
        return $names;
    }
    
    /**
     * Return array of types Id where each Id belongs to Type in path from root type
     * to this type.
     */
    public function getRootTypeIdPath($currPath = array()) {
        
        array_push($currPath, $this->id);
        
        if(NULL == $this->parent) {
            
            return $currPath;
            
        } else {
        
            return $this->parent->getRootTypeIdPath($currPath);
        }
    }

    /**
     * Add children
     *
     * @param Fenchy\NoticeBundle\Entity\Type $children
     * @return Type
     */
    public function addChildren(\Fenchy\NoticeBundle\Entity\Type $children)
    {
        $this->children[] = $children;
    
        return $this;
    }

    /**
     * Remove children
     *
     * @param Fenchy\NoticeBundle\Entity\Type $children
     */
    public function removeChildren(\Fenchy\NoticeBundle\Entity\Type $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Add properties
     *
     * @param Fenchy\NoticeBundle\Entity\PropertyType $properties
     * @return Type
     */
    public function addPropertie(\Fenchy\NoticeBundle\Entity\PropertyType $properties)
    {
        $this->properties[] = $properties;
    
        return $this;
    }

    /**
     * Remove properties
     *
     * @param Fenchy\NoticeBundle\Entity\PropertyType $properties
     */
    public function removePropertie(\Fenchy\NoticeBundle\Entity\PropertyType $properties)
    {
        $this->properties->removeElement($properties);
    }

    /**
     * Add notices
     *
     * @param Fenchy\NoticeBundle\Entity\Notice $notices
     * @return Type
     */
    public function addNotice(\Fenchy\NoticeBundle\Entity\Notice $notices)
    {
        $this->notices[] = $notices;
    
        return $this;
    }

    /**
     * Remove notices
     *
     * @param Fenchy\NoticeBundle\Entity\Notice $notices
     */
    public function removeNotice(\Fenchy\NoticeBundle\Entity\Notice $notices)
    {
        $this->notices->removeElement($notices);
    }

    public function splitNoticesByMainProperty() {
        
        $result = array();

        if(NULL !== $this->getMainProperty() && $this->properties->contains($this->getMainProperty())) {

            $opt = $this->getMainProperty()->getOptions();
            
            foreach($opt as $k => $v) {
                
                $result[$k] = array();
            }

            foreach($this->notices as $notice) {
                
                $result[$notice->getOptionValue($this->getMainProperty())][] = $notice;
            }
            
        } elseif (count($this->children) > 0) {

            foreach($this->children as $type) {
                
                $result[$type->getId()] = array();
            }
            
            foreach($this->notices as $notice) {
                
                $result[$notice->selectParent($this->children)][] = $notice;
            }
        } else {
            return array($this->notices);
        }

        return $result;
    }
    
    /**
     * Checks if type has property with given name. Return FALSE or PropertyType entity
     * 
     * @param String $name name of search property
     * 
     * @return FALSE|PropertyType
     */
    public function hasProperty($name) {
        
        foreach($this->properties as $property)
            if($property->getName() == $name)
                return $property;
            
        return FALSE;
    }
    
    /**
     * Checks if type has property with given id. Return FALSE or PropertyType entity
     * 
     * @param Integer $id of search property
     * 
     * @return FALSE|PropertyType
     */
    public function hasPropertyOfId($id) {
        
        foreach($this->properties as $property)
            if($property->getId() === $id)
                return $property;
            
        return FALSE;
    }
    
    public function getSubcategoryId() {
        
        foreach($this->properties as $property)
            if($property->getOptions() && self::$direction != $property->getName())
                return $property->getId();
            
        return FALSE;
    }
}