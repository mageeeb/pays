<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SlController extends AbstractController
{
    #[Route('/sl', name: 'app_sl')]
    public function index(): Response
    {
        return $this->render('sl/index.html.twig', [
            'controller_name' => 'SlController',
        ]);
    }
}
