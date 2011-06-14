<?php

namespace TaskBoxx\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TaskController extends Controller
{
    /**
     * @Route("/{project}/tasks", name="taskboxx_tasks")
     * @Template("TaskBoxxFrontendBundle:Task:index.html.twig")
     */
    public function indexAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $request = $this->get('request');
     
        $project = null;
        if ($request->attributes->get('project')) {
            $project = $em->getRepository('TaskBoxxFrontendBundle:Project')
                          ->findOneBy(array('slug' => $request->attributes->get('project')));
        }
        
        return array('project'=>$project);
    }
    
    /**
     * @Route("/{project}/task/new", name="taskboxx_new_issue")
     * @Template("TaskBoxxFrontendBundle:Task:new.html.twig")
     */
    public function newAction()
    {
        return array();
    }
}
