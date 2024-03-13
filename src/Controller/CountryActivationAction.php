<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\CoPzpcRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

class CountryActivationAction
{
    private $coPzpcRepository;
    private $entityManager;

    public function __construct(CoPzpcRepository $coPzpcRepository, EntityManagerInterface $entityManager)
    {
        $this->coPzpcRepository = $coPzpcRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/CountryActivation', name: 'app_CountryActivation', methods: ['POST'])]
   
    public function __invoke(Request $request)
    {
        $data = \json_decode($request->getContent(), associative: true);
        $this->coPzpcRepository->switchCountryActive($data['ID_country'], $data['newCountry_Active']);
        $this->entityManager->flush(); // para persistir los cambios en la base de datos

        return new JsonResponse(['message' => 'Country activation switched successfully.'], JsonResponse::HTTP_OK);
    }
}
