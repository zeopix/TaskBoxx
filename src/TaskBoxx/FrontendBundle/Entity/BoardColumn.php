<?php

namespace TaskBoxx\FrontendBundle\Entity;

/**
 * TaskBoxx\FrontendBundle\Entity\BoardColumn
 *
 * @orm:Table(name="tb_board_column")
 * @orm:Entity(repositoryClass="TaskBoxx\FrontendBundle\Repository\BoardColumnRepository")
 */
class BoardColumn
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
     * @orm:Column(type="integer")
     * @var integer $wipLimit
     */
    protected $wipLimit;
    /**
     * @orm:Column(type="text")
     * @var string $description
     */
    protected $description;
    /**
     * @orm:Column(type="boolean")
     * @var boolean $hardLimitCheck
     */
    protected $hardLimitCheck;
    /**
     * @orm:OneToMany(targetEntity="Task", mappedBy="boardColumn")
     * @var type 
     */
    protected $tasks;
    /**
     * @orm:Column(type="integer")
     * @var integer $sort_order
     */
    protected $sort_order;

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

    public function getWipLimit()
    {
        return $this->wipLimit;
    }

    public function setWipLimit($wipLimit)
    {
        $this->wipLimit = $wipLimit;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getHardLimitCheck()
    {
        return $this->hardLimitCheck;
    }

    public function setHardLimitCheck($hardLimitCheck)
    {
        $this->hardLimitCheck = $hardLimitCheck;
    }

    public function getTasks()
    {
        return $this->tasks;
    }

    public function setTasks($tasks)
    {
        $this->tasks = $tasks;
    }

    public function getSortOrder()
    {
        return $this->sort_order;
    }

    public function setSortOrder($sort_order)
    {
        $this->sort_order = $order;
    }

}