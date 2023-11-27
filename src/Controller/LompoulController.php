<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LompoulController extends AbstractController
{
    #[Route('/lompoul', name: 'app_lompoul')]
    public function index(): Response
    {
        return $this->render('lompoul/index.html.twig', [
            'controller_name' => 'LompoulController',
        ]);
    }
}
