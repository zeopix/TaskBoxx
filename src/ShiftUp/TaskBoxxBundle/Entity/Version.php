<?php

namespace ShiftUp\TaskBoxxBundle\Entity;

/**
 * ShiftUp\TaskBoxxBundle\Entity\Version
 *
 * @orm:Table(name="tb_version")
 * @orm:Entity
 */
class Version
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
     * @orm:Column(type="date")
     * @var Date 
     */
    protected $dueTo;
    /**
     * @orm:ManyToOne(targetEntity="Project")
     * @orm:JoinColumn(name="project_id", referencedColumnName="id") 
     * @var ShiftUp\TaskBoxxBundle\Entity\Project 
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