<?php

namespace App\Controller;

use App\Repository\CoPzpcRepository;
use App\Service\showProductDetailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductsController extends AbstractController
{
    private $CoPzpcRepository;
    private $showProductDetailService;

    public function __construct(CoPzpcRepository $coPzpcRepository, showProductDetailService $showProductDetailService)
    {
        $this->CoPzpcRepository = $coPzpcRepository;
        $this->showProductDetailService = $showProductDetailService;
    }



    #[Route('/products', name: 'app_products')]
    public function renderProducts(): Response
    {
        $productTable = $this->CoPzpcRepository->showProductTable();        
        return $this->render('products/renderProducts.html.twig', [
            'productTable' => $productTable,
            'productDetails' => $this->showProductDetailService,
        ]);
        
    }
}
