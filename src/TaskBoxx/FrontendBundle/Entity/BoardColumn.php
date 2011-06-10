<?php

namespace TaskBoxx\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaskBoxx\FrontendBundle\Entity\BoardColumn
 *
 * @ORM\Table(name="tb_board_column")
 * @ORM\Entity(repositoryClass="TaskBoxx\FrontendBundle\Repository\BoardColumnRepository")
 */
class BoardColumn
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
     * @ORM\Column(type="integer")
     * @var integer $wipLimit
     */
    protected $wipLimit;
    /**
     * @ORM\Column(type="text")
     * @var string $description
     */
    protected $description;
    /**
     * @ORM\Column(type="boolean")
     * @var boolean $hardLimitCheck
     */
    protected $hardLimitCheck;
    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="boardColumn")
     * @var type 
     */
    protected $tasks;
    /**
     * @ORM\Column(type="integer")
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