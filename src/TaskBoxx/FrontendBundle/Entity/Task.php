<?php

namespace TaskBoxx\FrontendBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="tb_task")
 * @ORM\Entity
 */
class Task
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
     * @ORM\Column(type="string", length="1024")
     */
    protected $name;
    /**
     * @ORM\Column(type="text")
     * @var string $description
     */
    protected $description;
    /**
     * @ORM\Column(type="integer")
     * @var integer $priority
     */
    protected $priority;
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="task")
     * @var ArrayCollection $comments
     */
    protected $comments;
    /**
     * @ORM\ManyToOne(targetEntity="taskType")
     * @ORM\JoinColumn(name="task_type_id", referencedColumnName="id")
     * 
     * @var TaskBoxx\FrontendBundle\Entity\TaskType $type
     */
    protected $type;
    /**
     * @ORM\ManyToOne(targetEntity="BoardColumn", inversedBy="tasks")
     * @ORM\JoinColumn(name="board_column_id", referencedColumnName="id")
     *
     * @var TaskBoxx\FrontendBundle\Entity\BoardColumn $boardColumn 
     */
    protected $boardColumn;
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="tasks")
     * @ORM\JoinColumn(name="assigned_user_id", referencedColumnName="id")
     *
     * @var TaskBoxx\FrontendBundle\Entity\User $assignedUser 
     */
    protected $assignedUser;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param TaskBoxx\FrontendBundle\Entity\TaskType $type
     */
    public function setType(\TaskBoxx\FrontendBundle\Entity\TaskType $type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return TaskBoxx\FrontendBundle\Entity\TaskType $type
     */
    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    public function getBoardColumn()
    {
        return $this->boardColumn;
    }

    public function setBoardColumn($boardColumn)
    {
        $this->boardColumn = $boardColumn;
    }

    public function getAssignedUser()
    {
        return $this->assignedUser;
    }

    public function setAssignedUser($assignedUser)
    {
        $this->assignedUser = $assignedUser;
    }
}