<?php

namespace TaskBoxx\FrontendBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * TaskBoxx\FrontendBundle\Entity\TaskType
 *
 * @ORM\Table(name="tb_task_type")
 * @ORM\Entity
 */
class TaskType
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
     * @var string 
     */
    protected $name;
    
    /**
     * @ORM\Column(type="string", length="20")
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