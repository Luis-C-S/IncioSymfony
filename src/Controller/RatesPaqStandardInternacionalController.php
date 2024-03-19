<?php

namespace App\Controller;

use App\Repository\CoRatesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RatesPaqStandardInternacionalController extends AbstractController
{
    private $CoRatesRepository;

    public function __construct(CoRatesRepository $CoRatesRepository)
    {
        $this->CoRatesRepository = $CoRatesRepository;
    }



    #[Route('/RatesPaqStandardInternacional', name: 'app_RatesPaqStandardInternacional')]
    public function renderRatesPaqStandard(): Response
    {
        $rates = $this->CoRatesRepository->showRatesPaqStandardInternacional();        
        return $this->render('rates/renderRatesPaqStandardInternacional.html.twig', [
            'rates' => $rates,
        ]);
        
    }
}