<?php

namespace Erik\CRUDBundle\Controller;

use Erik\CRUDBundle\Entity\Workout1;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Workout1 controller.
 *
 * @Route("workout1")
 */
class Workout1Controller extends Controller
{
    /**
     * Lists all workout1 entities.
     *
     * @Route("/", name="workout1_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $workout1s = $em->getRepository('ErikCRUDBundle:Workout1')->findAll();

        return $this->render('workout1/index.html.twig', array(
            'workout1s' => $workout1s,
        ));
    }

    /**
     * Creates a new workout1 entity.
     *
     * @Route("/new", name="workout1_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $workout1 = new Workout1();
        $form = $this->createForm('Erik\CRUDBundle\Form\Workout1Type', $workout1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($workout1);
            $em->flush($workout1);

            return $this->redirectToRoute('workout1_show', array('id' => $workout1->getId()));
        }

        return $this->render('workout1/new.html.twig', array(
            'workout1' => $workout1,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a workout1 entity.
     *
     * @Route("/{id}", name="workout1_show")
     * @Method("GET")
     */
    public function showAction(Workout1 $workout1)
    {
        $deleteForm = $this->createDeleteForm($workout1);

        return $this->render('workout1/show.html.twig', array(
            'workout1' => $workout1,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing workout1 entity.
     *
     * @Route("/{id}/edit", name="workout1_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Workout1 $workout1)
    {
        $deleteForm = $this->createDeleteForm($workout1);
        $editForm = $this->createForm('Erik\CRUDBundle\Form\Workout1Type', $workout1);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('workout1_edit', array('id' => $workout1->getId()));
        }

        return $this->render('workout1/edit.html.twig', array(
            'workout1' => $workout1,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a workout1 entity.
     *
     * @Route("/{id}", name="workout1_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Workout1 $workout1)
    {
        $form = $this->createDeleteForm($workout1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($workout1);
            $em->flush($workout1);
        }

        return $this->redirectToRoute('workout1_index');
    }

    /**
     * Creates a form to delete a workout1 entity.
     *
     * @param Workout1 $workout1 The workout1 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Workout1 $workout1)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('workout1_delete', array('id' => $workout1->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
