<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SaloumController extends AbstractController
{
    #[Route('/saloum', name: 'app_saloum')]
    public function index(): Response
    {
        return $this->render('saloum/index.html.twig', [
            'controller_name' => 'SaloumController',
        ]);
    }
}
