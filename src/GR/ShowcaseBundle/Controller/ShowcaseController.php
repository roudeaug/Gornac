<?php

namespace GR\ShowcaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ShowcaseController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('GRShowcaseBundle:Showcase:index.html.twig');
        return new Response($content);
    }
}
