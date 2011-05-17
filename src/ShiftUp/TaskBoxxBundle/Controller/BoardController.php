<?php

namespace ShiftUp\TaskBoxxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BoardController extends Controller
{
    public function indexAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $request = $this->get('request');
     
        $project = null;
        if ($request->attributes->get('project')) {
            $project = $em->getRepository('ShiftUpTaskBoxxBundle:Project')
                          ->findOneBy(array('slug' => $request->attributes->get('project')));
        }
        
        $columns = $em->getRepository('ShiftUpTaskBoxxBundle:BoardColumn')
                        ->getColumnsInOrder();    
        
        return $this->render('ShiftUpTaskBoxxBundle:Board:index.html.twig',
                                array('columns'=>$columns,
                                      'project'=>$project));
    }
    
    public function showColumnAction($columnId)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $column = $em->find('ShiftUpTaskBoxxBundle:BoardColumn', $columnId);
        
        return $this->render('ShiftUpTaskBoxxBundle:Board:showColumn.html.twig', array('column'=>$column));
    }
}
