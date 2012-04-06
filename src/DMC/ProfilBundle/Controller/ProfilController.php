<?php

namespace DMC\ProfilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DMC\ProfilBundle\Entity\Profil;
use DMC\ProfilBundle\Form\ProfilType;

/**
 * Profil controller.
 *
 * @Route("/backoffice/profil")
 */
class ProfilController extends Controller
{
    /**
     * Lists all Profil entities.
     *
     * @Route("/", name="profil")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('DMCProfilBundle:Profil')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Profil entity.
     *
     * @Route("/{id}/show", name="profil_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DMCProfilBundle:Profil')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Profil entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Profil entity.
     *
     * @Route("/new", name="profil_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Profil();
        $form   = $this->createForm(new ProfilType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Profil entity.
     *
     * @Route("/create", name="profil_create")
     * @Method("post")
     * @Template("DMCProfilBundle:Profil:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Profil();
        $request = $this->getRequest();
        $form    = $this->createForm(new ProfilType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('administration_profil_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Profil entity.
     *
     * @Route("/{id}/edit", name="profil_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DMCProfilBundle:Profil')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Profil entity.');
        }

        $editForm = $this->createForm(new ProfilType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Profil entity.
     *
     * @Route("/{id}/update", name="profil_update")
     * @Method("post")
     * @Template("DMCProfilBundle:Profil:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DMCProfilBundle:Profil')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Profil entity.');
        }

        $editForm   = $this->createForm(new ProfilType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('administration_profil_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Profil entity.
     *
     * @Route("/{id}/delete", name="profil_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('DMCProfilBundle:Profil')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Profil entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('administration_profil'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
