<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Http\Response\ApiResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController
{
    #[Route('/Response', name: 'app_ApiController')]    
    public function createResponse(array $data, int $status = JsonResponse::HTTP_OK)
    {
        return new ApiResponse($data, $status);
    }

}