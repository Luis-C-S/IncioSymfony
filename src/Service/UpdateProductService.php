<?php

namespace App\Service;

use App\Repository\CoPzpcRepository;
use Doctrine\ORM\EntityManagerInterface;

class UpdateProductService
{
    private $coPzpcRepository;
    private $entityManager;

    public function __construct(CoPzpcRepository $coPzpcRepository, EntityManagerInterface $entityManager)
    {
        $this->coPzpcRepository = $coPzpcRepository;
        $this->entityManager = $entityManager;
    }

    public function __invoke($id_product, $product_active)
    {        
        $this->coPzpcRepository->updateProductActiveByProductId($id_product, $product_active);
        $this->entityManager->flush(); // para persistir los cambios en la base de datos
    }
}