<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CasamanceController extends AbstractController
{
    #[Route('/casamance', name: 'app_casamance')]
    public function index(): Response
    {
        return $this->render('casamance/index.html.twig', [
            'controller_name' => 'CasamanceController',
        ]);
    }
}
