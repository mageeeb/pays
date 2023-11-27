<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LacRoseController extends AbstractController
{
    #[Route('/lac/rose', name: 'app_lac_rose')]
    public function index(): Response
    {
        return $this->render('lac_rose/index.html.twig', [
            'controller_name' => 'LacRoseController',
        ]);
    }
}
