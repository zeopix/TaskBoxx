<?php

namespace TaskBoxx\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SettingsController extends Controller
{
    /**
     * @Route("/{project}/settings", name="taskboxx_settings")
     * @Template("TaskBoxxFrontendBundle:Settings:index.html.twig")
     */
    public function indexAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $request = $this->get('request');
     
        $project = null;
        if ($request->attributes->get('project')) {
            $project = $em->getRepository('TaskBoxxFrontendBundle:Project')
                          ->findOneBy(array('slug' => $request->attributes->get('project')));
        }
        
        return array('project'=>$project);
    }
}
