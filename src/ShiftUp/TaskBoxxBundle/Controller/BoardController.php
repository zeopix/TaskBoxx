<?php

namespace ShiftUp\TaskBoxxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BoardController extends Controller
{
    public function indexAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $columns = $em->getRepository('ShiftUpTaskBoxxBundle:BoardColumn')
                        ->findAll();    
        
        return $this->render('ShiftUpTaskBoxxBundle:Board:index.html.twig',
                                array('columns'=>$columns));
    }
}
