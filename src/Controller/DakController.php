<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DakController extends AbstractController
{
    #[Route('/dak', name: 'app_dak')]
    public function index(): Response
    {
        return $this->render('dak/index.html.twig', [
            'controller_name' => 'DakController',
        ]);
    }
}
