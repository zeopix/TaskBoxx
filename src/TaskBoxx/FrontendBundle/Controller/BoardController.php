<?php

namespace TaskBoxx\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BoardController extends Controller
{
    /**
     * @Route("/{project}/board", name="taskboxx_project_board")
     * @Route("/", name="homepage")
     * @Template("TaskBoxxFrontendBundle:Board:index.html.twig") 
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
        
        $columns = $em->getRepository('TaskBoxxFrontendBundle:BoardColumn')
                        ->getColumnsInOrder();    
        
        return array('columns'=>$columns, 'project'=>$project);
    }
    
    /**
     *
     * @param type $columnId
     * @return type 
     */
    public function showColumnAction($columnId)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $column = $em->find('TaskBoxxFrontendBundle:BoardColumn', $columnId);
        
        return $this->render('TaskBoxxFrontendBundle:Board:showColumn.html.twig', array('column'=>$column));
    }
}
