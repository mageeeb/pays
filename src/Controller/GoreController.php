<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GoreController extends AbstractController
{
    #[Route('/gore', name: 'app_gore')]
    public function index(): Response
    {
        return $this->render('gore/index.html.twig', [
            'controller_name' => 'GoreController',
        ]);
    }
}
