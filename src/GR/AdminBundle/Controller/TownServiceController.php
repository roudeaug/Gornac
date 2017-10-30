<?php

namespace GR\AdminBundle\Controller;

use GR\AdminBundle\Entity\TownService;
use GR\AdminBundle\Form\TownServiceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TownServiceController extends Controller
{   
    public function listAction() {
        $em = $this
            ->getDoctrine()
            ->getManager();

        $listServices = $em->getRepository('GRAdminBundle:TownService')->findAll();

        return $this->render('GRAdminBundle:TownService:list.html.twig', array(
            'listServices' => $listServices,
          ));
    }

    public function addAction(Request $request) {
        $addonUrl = "http://www.gornac.com/web/img/";
        $addonEmail = "@gornac.com";
        $addonAdress = " 33540 Gornac";

        //New TownService instance
        $service = new TownService();
        
        //Form creation
        $form = $this->get('form.factory')->create(TownServiceType::class, $service);
        
        // Form submit
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $imgUrl = $addonUrl.$form["imgUrl"]->getData();
            $email = $form["email"]->getData().$addonEmail;
            $adress = $form["adress"]->getData().$addonAdress;

            $service->setImgUrl($imgUrl);
            $service->setEmail($email);
            $service->setAdress($adress);

            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();
      
            return $this->redirectToRoute('gr_admin_town_service_list');
          }

        //Form response
        return $this->render('GRAdminBundle:TownService:add.html.twig', array(
          'form' => $form->createView(),
          'addonUrl' => $addonUrl,
          'addonEmail' => $addonEmail,
          'addonAdress' => $addonAdress,
        ));
    }

    public function editAction($id) {

        return $this->render('GRAdminBundle:TownService:edit.html.twig');
    }

    public function deleteAction($id) {

        $em = $this
        ->getDoctrine()
        ->getManager();

        $service = $em->getRepository('GRAdminBundle:TownService')->find($id);

        return $this->render('GRAdminBundle:TownService:delete.html.twig', array(
            'service' => $service,
        ));
    }

    public function deleteConfirmedAction($id) {
        
        $em = $this
            ->getDoctrine()
            ->getManager();
        
        $service = $em->getRepository('GRAdminBundle:TownService')->find($id);
        $em->remove($service);
        $em->flush();

        return $this->redirectToRoute('gr_admin_town_service_list');
    }
}