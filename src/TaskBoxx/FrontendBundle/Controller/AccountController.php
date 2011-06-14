<?php

namespace TaskBoxx\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AccountController extends Controller
{
    /**
     * @Route("/account/show", name="taskboxx_account_show")
     * @Template("TaskBoxxFrontendBundle:Account:show.html.twig")
     */
    public function showAction()
    {        
        return array();
    }
}
