<?php

namespace TaskBoxx\FrontendBundle\Entity;

/**
 * TaskBoxx\FrontendBundle\Entity\TaskType
 *
 * @orm:Table(name="tb_task_type")
 * @orm:Entity
 */
class TaskType
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
     * @var string 
     */
    protected $name;
    
    /**
     * @orm:Column(type="string", length="20")
     * @var string 
     */
    protected $color;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

}