<?php

namespace ShiftUp\TaskBoxxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShiftUpTaskBoxxBundle:Default:index.html.twig');
    }
}
