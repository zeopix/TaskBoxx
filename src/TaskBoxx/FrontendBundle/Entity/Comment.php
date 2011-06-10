<?php
namespace TaskBoxx\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaskBoxx\FrontendBundle\Entity\Comment
 *
 * @ORM\Table(name="tb_comment")
 * @ORM\Entity
 */
class Comment
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
     * @ORM\Column(type="text")
     */
    protected $comment;
    /**
     * @ORM\ManyToOne(targetEntity="Task", inversedBy="comments")
     * @ORM\JoinColumn(name="task_id", referencedColumnName="id")
     */
    protected $task;

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

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }
}