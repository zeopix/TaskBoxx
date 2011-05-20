<?php

namespace TaskBoxx\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        
        
        return $this->render('TaskBoxxFrontendBundle:Admin:index.html.twig');
    }
}
