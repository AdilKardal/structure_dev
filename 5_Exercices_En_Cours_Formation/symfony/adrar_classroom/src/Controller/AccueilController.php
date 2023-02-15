<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function accueil(): Response
    {
        return $this->render('accueil/accueil.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/header', name: 'app_header')]
    public function header(): Response
    {
        return $this->render('accueil/header.html.twig', [
            'controller_name' => 'HeaderController',
        ]);
    }

    #[Route('/formations', name: 'app_formations')]
    public function formations(): Response
    {
        return $this->render('accueil/formations.html.twig', [
            'controller_name' => 'FormationsController',
        ]);
    }
}