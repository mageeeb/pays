<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnConstructionController extends AbstractController
{
    #[Route('/en/construction', name: 'app_en_construction')]
    public function index(): Response
    {
        return $this->render('en_construction/index.html.twig', [
            'controller_name' => 'EnConstructionController',
        ]);
    }
}
