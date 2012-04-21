<?php

namespace DMC\DMCMainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{

    /**
     * @Route("/	", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
		$listeOQuestion  = $this->getDoctrine()->getRepository('DMCQuestionBundle:Question')->findAll();
		$num = rand(0,count($listeOQuestion)-1);
		$oQuestion = $listeOQuestion[$num];
        return array('oQuestion' => $oQuestion);
    }

    /**
     * @Route("/test", name="pageTest")
     * @Template()
     */
    public function testAction()
    {
        return array();
    }

	/**
     * @Route("/quisommesnous", name="quisommesnous")
     * @Template()
     */
    public function quiSommesNousAction()
    {
        return array();
    }

    /**
     * @Route("/leconcept", name="leconcept")
     * @Template()
     */
    public function leconceptAction()
    {
        return array();
    }
	
	/**
     * @Route("/contact", name="contact")
     * @Template()
     */
    public function contactAction()
    {
        return array();
    }
}
