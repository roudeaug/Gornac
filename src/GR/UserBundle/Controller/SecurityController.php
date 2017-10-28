<?php

namespace GR\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GR\UserBundle\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;

class SecurityController extends Controller
{
  public function loginAction(Request $request)
  {
    //Add user
    /*$array = array('ROLE_ADMIN');
    $user = new User();
    $user->setUsername('groudeau');
    $user->setPassword('pass');
    $user->setEmail('g.roudeau@gmail.com');
    $user->setSalt('');
    $user->setRoles(array('ROLE_ADMIN'));

    $em=$this->getDoctrine()->getManager();
    $em->persist($user);
    $em->flush();*/

    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('gr_admin_dashboard');
    }

    $authenticationUtils = $this->get('security.authentication_utils');

    return $this->render('GRUserBundle:Security:login.html.twig', array(
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));

  }

  public function addUser(Request $request) {
    
    
    return $this->render('GRUserBundle:Security:login.html.twig', array(
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));
  }
}
