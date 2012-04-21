<?php

namespace DMC\CategorieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DMC\CategorieBundle\Entity\Article;
use DMC\CategorieBundle\Form\Type\ArticleType;

/**
 * Article controller.
 *
 * @Route("")
 */
 
class ArticleController extends Controller
{

	/**
     * Affiche un article dans le front office.
     *
     * @Route("article/{id}", name="front_article")
     * @Template()
     */
    public function frontAffichageAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('DMCCategorieBundle:Article')->findAll();

        return array('entities' => $entities);
    }
	

}
