<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HomeController  extends AbstractController
{
    #[Route("/", name: 'dashboard')]
    public function index(): Response
    {
        return $this->render('dashboard.html.twig', [
            'productLink' => $this->generateUrl('product_list'),  // Lien vers la page de produits
            'customerLink' => $this->generateUrl('customer_list'),  // Lien vers la page de clients
        ]);
    }
}