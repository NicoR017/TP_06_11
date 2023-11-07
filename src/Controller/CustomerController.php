<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    #[Route("/customers", name: 'customer_list')]
    public function listCustomers(): Response
    {
        $customers = [
            ['name' => 'Client 1'],
            ['name' => 'Client 2'],
            ['name' => 'Client 3'],
        ];

        return $this->render('customers.html.twig', [
            'customers' => $customers,
        ]);
    }
}