<?php

namespace TaskBoxx\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RoadmapController extends Controller
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
        
        return $this->render('TaskBoxxFrontendBundle:Roadmap:index.html.twig',
                             array('project'=>$project));
    }
}
