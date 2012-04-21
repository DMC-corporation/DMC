<?php

namespace DMC\CategorieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DMC\CategorieBundle\Entity\Categorie;
use DMC\CategorieBundle\Form\Type\CategorieType;

/**
 * Categorie controller.
 *
 * @Route("/")
 */
class CategorieController extends Controller
{
	/**
     * Affiche une categorie dans le front office.
     *
     * @Route("categorie/{id}", name="front_categorie")
     * @Template()
     */
    public function frontAffichageAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('DMCCategorieBundle:Categorie')->findAll();

        return array('entities' => $entities);
    }

}
