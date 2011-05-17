<?php

namespace ShiftUp\TaskBoxxBundle\Entity;

/**
 * ShiftUp\TaskBoxxBundle\Entity\Project
 *
 * @orm:Table(name="tb_project")
 * @orm:Entity
 */
class Project
{

    /**
     * @var integer $id
     *
     * @orm:Column(name="id", type="integer")
     * @orm:Id
     * @orm:GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @orm:Column(type="string", length="255")
     * @var string $name 
     */
    protected $name;
    /**
     * @orm:OneToMany(targetEntity="Version", mappedBy="project")
     * @var ArrayCollection $versions 
     */
    protected $versions;
    /**
     * @orm:Column(type="string", length="255")
     * @var String 
     */
    protected $slug;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getVersions()
    {
        return $this->versions;
    }

    public function setVersions($versions)
    {
        $this->versions = $versions;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

}