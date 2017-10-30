<?php

namespace GR\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ActualityController extends Controller
{   
    public function listAction()
    {
        return $this->render('GRAdminBundle:Actuality:list.html.twig');
    }
}