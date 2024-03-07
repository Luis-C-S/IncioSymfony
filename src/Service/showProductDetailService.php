<?php

namespace App\Service;

use App\Repository\CoPzpcRepository;

class showProductDetailService
{
    private $coPzpcRepository;
 
    public function __construct(CoPzpcRepository $coPzpcRepository)
    {
        $this->coPzpcRepository = $coPzpcRepository;
    }

    public function __invoke($product)
    {            
       return $this->coPzpcRepository->showDetailTable($product);        
    }
}