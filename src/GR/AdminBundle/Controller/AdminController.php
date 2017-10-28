<?php

namespace GR\AdminBundle\Controller;


use GR\AdminBundle\Entity\User;
use GR\AdminBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AdminController extends Controller
{   
    public function dashboardAction()
    {
        return $this->render('GRAdminBundle:Admin:dashboard.html.twig');
    }
}