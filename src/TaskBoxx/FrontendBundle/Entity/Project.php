<?php

namespace TaskBoxx\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaskBoxx\FrontendBundle\Entity\Project
 *
 * @ORM\Table(name="tb_project")
 * @ORM\Entity
 */
class Project
{

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length="255")
     * @var string $name 
     */
    protected $name;
    /**
     * @ORM\OneToMany(targetEntity="Version", mappedBy="project")
     * @var ArrayCollection $versions 
     */
    protected $versions;
    /**
     * @ORM\Column(type="string", length="255")
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