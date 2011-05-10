<?php

namespace ShiftUp\TaskBoxxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class ProjectController extends Controller
{

    public function quickSearchListAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $projects = $em->getRepository('ShiftUpTaskBoxxBundle:Project')->findAll();          
        
        return $this->render('ShiftUpTaskBoxxBundle:Project:quickSearchList.html.twig', array('projects'=>$projects));
    }

}

