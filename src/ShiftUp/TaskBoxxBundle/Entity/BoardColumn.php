<?php

namespace ShiftUp\TaskBoxxBundle\Entity;

/**
 * ShiftUp\TaskBoxxBundle\Entity\BoardColumn
 *
 * @orm:Table(name="tb_board_column")
 * @orm:Entity(repositoryClass="ShiftUp\TaskBoxxBundle\Repository\BoardColumnRepository")
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
     * @orm:OneToMany(targetEntity="BacklogItem", mappedBy="boardColumn")
     * @var type 
     */
    protected $backlogItems;
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

    public function getBacklogItems()
    {
        return $this->backlogItems;
    }

    public function setBacklogItems($backlogItems)
    {
        $this->backlogItems = $backlogItems;
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