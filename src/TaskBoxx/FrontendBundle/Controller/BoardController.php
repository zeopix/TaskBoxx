<?php

namespace TaskBoxx\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BoardController extends Controller
{
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
        
        return $this->render('TaskBoxxFrontendBundle:Board:index.html.twig',
                                array('columns'=>$columns,
                                      'project'=>$project));
    }
    
    public function showColumnAction($columnId)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $column = $em->find('TaskBoxxFrontendBundle:BoardColumn', $columnId);
        
        return $this->render('TaskBoxxFrontendBundle:Board:showColumn.html.twig', array('column'=>$column));
    }
}
