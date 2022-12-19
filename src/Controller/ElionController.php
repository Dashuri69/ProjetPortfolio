<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ElionController extends AbstractController
{
    #[Route('/site', name: 'app_site')]
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
}
