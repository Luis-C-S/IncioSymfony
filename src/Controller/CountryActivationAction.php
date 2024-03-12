<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\CoPzpcRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class CountryActivationAction
{
    private $coPzpcRepository;
    private $entityManager;

    public function __construct(CoPzpcRepository $coPzpcRepository, EntityManagerInterface $entityManager)
    {
        $this->coPzpcRepository = $coPzpcRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/CountryActivation/{id_country}', name: 'app_CountryActivation', methods: ['POST'])]
    public function __invoke(int $id_country)
    {
        // Llama al método switchCountryActive en el repositorio
        $this->coPzpcRepository->switchCountryActive($id_country);
        $this->entityManager->flush(); // para persistir los cambios en la base de datos

        return new JsonResponse(['message' => 'Country activation switched successfully.'], JsonResponse::HTTP_OK);
    }
}
