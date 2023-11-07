<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AcceuilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index()
    {
        return $this->render('Accueil.html.twig', ['message' => 'Bienvenue sur ma première page Symfony!']);

    }
}
