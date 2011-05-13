<?php

namespace ShiftUp\TaskBoxxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BoardController extends Controller
{
    public function indexAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $columns = $em->getRepository('ShiftUpTaskBoxxBundle:BoardColumn')
                        ->getColumnsInOrder();    
        
        return $this->render('ShiftUpTaskBoxxBundle:Board:index.html.twig',
                                array('columns'=>$columns));
    }
    
    public function showColumnAction($columnId)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $column = $em->find('ShiftUpTaskBoxxBundle:BoardColumn', $columnId);
        
        return $this->render('ShiftUpTaskBoxxBundle:Board:showColumn.html.twig', array('column'=>$column));
    }
}
