<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\ApiController;
use App\Service\showProductDetailService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class showDetailAction extends ApiController
{
    public function __construct(private showProductDetailService $showProductDetailService)
    {
    }

    #[Route('/details', name: 'app_details')]
    public function __invoke(Request $request): JsonResponse
    {
        $data = \json_decode($request->getContent(), associative: true);
        $detail = $this->showProductDetailService->__invoke($data['product']);
        return $this->createResponse($detail,);           
    }
}
