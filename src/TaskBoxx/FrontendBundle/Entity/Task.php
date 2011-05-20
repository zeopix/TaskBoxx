<?php

namespace TaskBoxx\FrontendBundle\Entity;

/**
 * @orm:Table(name="tb_task")
 * @orm:Entity
 */
class Task
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
     * @orm:Column(type="string", length="1024")
     */
    protected $name;
    /**
     * @orm:Column(type="text")
     * @var string $description
     */
    protected $description;
    /**
     * @orm:Column(type="integer")
     * @var integer $priority
     */
    protected $priority;
    /**
     * @orm:OneToMany(targetEntity="Comment", mappedBy="task")
     * @var ArrayCollection $comments
     */
    protected $comments;
    /**
     * @orm:ManyToOne(targetEntity="taskType")
     * @orm:JoinColumn(name="task_type_id", referencedColumnName="id")
     * 
     * @var TaskBoxx\FrontendBundle\Entity\TaskType $type
     */
    protected $type;
    /**
     * @orm:ManyToOne(targetEntity="BoardColumn", inversedBy="tasks")
     * @orm:JoinColumn(name="board_column_id", referencedColumnName="id")
     *
     * @var TaskBoxx\FrontendBundle\Entity\BoardColumn $boardColumn 
     */
    protected $boardColumn;
    /**
     * @orm:ManyToOne(targetEntity="User", inversedBy="tasks")
     * @orm:JoinColumn(name="assigned_user_id", referencedColumnName="id")
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