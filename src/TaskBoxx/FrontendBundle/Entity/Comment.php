<?php
namespace TaskBoxx\FrontendBundle\Entity;

/**
 * TaskBoxx\FrontendBundle\Entity\Comment
 *
 * @orm:Table(name="tb_comment")
 * @orm:Entity
 */
class Comment
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
     * @orm:Column(type="text")
     */
    protected $comment;
    /**
     * @orm:ManyToOne(targetEntity="BacklogItem", inversedBy="comments")
     * @orm:JoinColumn(name="backlog_item_id", referencedColumnName="id")
     */
    protected $backlogItem;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getBacklogItem()
    {
        return $this->backlogItem;
    }

    public function setBacklogItem($backlogItem)
    {
        $this->backlogItem = $backlogItem;
    }
}