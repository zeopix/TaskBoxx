<?php

namespace TaskBoxx\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaskBoxx\FrontendBundle\Entity\Version
 *
 * @ORM\Table(name="tb_version")
 * @ORM\Entity
 */
class Version
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
     * @ORM\Column(type="date")
     * @var Date 
     */
    protected $dueTo;
    /**
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id") 
     * @var TaskBoxx\FrontendBundle\Entity\Project 
     */
    protected $project;

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

    public function getProject()
    {
        return $this->project;
    }

    public function setProject($project)
    {
        $this->project = $project;
    }

    public function getDueTo()
    {
        return $this->dueTo;
    }

    public function setDueTo($dueTo)
    {
        $this->dueTo = $dueTo;
    }

}