<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route("/products", name: 'product_list')]
    public function show(Request $request): Response
    {
        $products = [
            ['id' => 1, 'name' => 'Produit 1', 'price' => 19.99, 'Detail' => 'Détail du produit 1'],
            ['id' => 2, 'name' => 'Produit 2', 'price' => 29.99, 'Detail' => 'Détail du produit 2'],
            ['id' => 3, 'name' => 'Produit 3', 'price' => 39.99, 'Detail' => 'Détail du produit 3'],

        ];

        return $this->render('products.html.twig', [
            'products' => $products,
        ]);
    }
    #[Route("/products/{id}", name:'product_detail')]
    public function showProduct(Request $request, $id): Response
    {
        $products = [
            1 => ["name" => "Produit 1", "price" => 19.99, "Detail" => "Detail1"],
            2 => ["name" => "Produit 2", "price" => 29.99, "Detail" => "Detail1"],
            3 => ["name" => "Produit 3", "price" => 39.99, "Detail" => "Detail1"],
        ];

        // Logique pour récupérer le produit en fonction de l'ID
        if (isset($products[$id])) {
            $product = $products[$id];
        } else {
            throw $this->createNotFoundException('Produit non trouvé');
        }

        return $this->render('ProductDetail.html.twig', [
            'product' => $product,
        ]);
    }
}
