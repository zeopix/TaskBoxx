<?php

namespace ShiftUp\TaskBoxxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SettingsController extends Controller
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
        
        return $this->render('ShiftUpTaskBoxxBundle:Settings:index.html.twig',
                            array('project'=>$project));
    }
}
