<?php

namespace TaskBoxx\FrontendBundle\Entity;

/**
 * @orm:Table(name="tb_backlog_item")
 * @orm:Entity
 */
class BacklogItem
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
     * @orm:OneToMany(targetEntity="Comment", mappedBy="backlogItem")
     * @var ArrayCollection $comments
     */
    protected $comments;
    /**
     * @orm:ManyToOne(targetEntity="BacklogItemType")
     * @orm:JoinColumn(name="item_type_id", referencedColumnName="id")
     * 
     * @var TaskBoxx\FrontendBundle\Entity\BackLogItemType $type
     */
    protected $type;
    /**
     * @orm:ManyToOne(targetEntity="BoardColumn", inversedBy="backlogItems")
     * @orm:JoinColumn(name="board_column_id", referencedColumnName="id")
     *
     * @var TaskBoxx\FrontendBundle\Entity\BoardColumn $boardColumn 
     */
    protected $boardColumn;
    /**
     * @orm:ManyToOne(targetEntity="User", inversedBy="backlogItems")
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
     * @param TaskBoxx\FrontendBundle\Entity\BacklogItemType $type
     */
    public function setType(\TaskBoxx\FrontendBundle\Entity\BacklogItemType $type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return TaskBoxx\FrontendBundle\Entity\BacklogItemType $type
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