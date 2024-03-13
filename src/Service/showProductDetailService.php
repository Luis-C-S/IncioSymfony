<?php

namespace App\Service;

use App\Repository\CoPzpcRepository;

class showProductDetailService
{
    public function __construct(private CoPzpcRepository $coPzpcRepository)
    {
        $this->coPzpcRepository = $coPzpcRepository;
    }

    public function __invoke($product)
    {
        return $this->coPzpcRepository->showDetailTable($product);
    }
}
