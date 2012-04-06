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
	
    /**
     * Lists all Categorie entities.
     *
     * @Route("/backoffice/categorie", name="categorie")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('DMCCategorieBundle:Categorie')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Categorie entity.
     *
     * @Route("/backoffice/categorie/{id}/show", name="categorie_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DMCCategorieBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Categorie entity.
     *
     * @Route("backoffice/categorie/new", name="categorie_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Categorie();
        $form   = $this->createForm(new CategorieType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Categorie entity.
     *
     * @Route("backoffice/categorie/create", name="categorie_create")
     * @Method("post")
     * @Template("DMCCategorieBundle:Categorie:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Categorie();
        $request = $this->getRequest();
        $form    = $this->createForm(new CategorieType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categorie_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Categorie entity.
     *
     * @Route("backoffice/categorie/{id}/edit", name="categorie_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DMCCategorieBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $editForm = $this->createForm(new CategorieType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Categorie entity.
     *
     * @Route("backoffice/categorie/{id}/update", name="categorie_update")
     * @Method("post")
     * @Template("DMCCategorieBundle:Categorie:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DMCCategorieBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $editForm   = $this->createForm(new CategorieType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categorie_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Categorie entity.
     *
     * @Route("backoffice/categorie/{id}/delete", name="categorie_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('DMCCategorieBundle:Categorie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Categorie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('categorie'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
