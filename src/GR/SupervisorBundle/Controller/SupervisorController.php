<?php

namespace GR\SupervisorBundle\Controller;


use GR\SupervisorBundle\Entity\User;
use GR\SupervisorBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SupervisorController extends Controller
{
    public function indexAction()
    {
        return $this->render('GRSupervisorBundle:Supervisor:index.html.twig');
    }

    public function signInAction(Request $request)
    {
        //User creation
        $user = new User();

        $form = $this->get('form.factory')->create(UserType::class, $user);

        return $this->render('GRSupervisorBundle:Supervisor:signIn.html.twig', array(
            'form' => $form->createView(),
          ));
    }
}