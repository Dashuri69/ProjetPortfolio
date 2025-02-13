<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ElionController extends AbstractController
{
    #[Route('/', name: 'app_site')]
    public function index(): Response
    {
        return $this->render('site/index.html.twig', [
            'controller_name' => 'ElionController',
        ]);
    }
    #[Route('/page2', name: 'app_page2')]
    public function page2(): Response
    {
        return $this->render('site/page2.html.twig', [
            'controller_name' => 'ElionController',
        ]);
    }
    #[Route('/page3', name: 'app_page3')]
    public function page3(): Response
    {
        return $this->render('site/page3.html.twig', [
            'controller_name' => 'ElionController',
        ]);
    }
    #[Route('/page4', name: 'app_page4')]
    public function page4(): Response
    {
        return $this->render('site/page4.html.twig', [
            'controller_name' => 'ElionController',
        ]);
    }
    #[Route('/page5', name: 'app_page5')]
    public function page5(): Response
    {
        return $this->render('site/page5.html.twig', [
            'controller_name' => 'ElionController',
        ]);
    }
    #[Route('/page6', name: 'app_page6')]
    public function page6(): Response
    {
        return $this->render('site/page6.html.twig', [
            'controller_name' => 'ElionController',
        ]);
    }
    #[Route('/page7', name: 'app_page7')]
    public function page7(): Response
    {
        return $this->render('site/page7.html.twig', [
            'controller_name' => 'ElionController',
        ]);
    }
}