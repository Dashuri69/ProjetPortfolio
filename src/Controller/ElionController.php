<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ElionController extends AbstractController
{
    #[Route('/elion', name: 'app_elion')]
    public function index(): Response
    {
        return $this->render('elion/index.html.twig', [
            'controller_name' => 'ElionController',
        ]);
    }
}
