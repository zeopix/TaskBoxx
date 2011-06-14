<?php

namespace TaskBoxx\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="taskboxx_admin_index")
     * @Template("TaskBoxxFrontendBundle:Admin:index.html.twig")
     */
    public function indexAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        
        
        return array();
    }
}
