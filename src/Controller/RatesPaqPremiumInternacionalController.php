<?php

namespace App\Controller;

use App\Repository\CoRatesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RatesPaqPremiumInternacionalController extends AbstractController
{
    private $CoRatesRepository;

    public function __construct(CoRatesRepository $CoRatesRepository)
    {
        $this->CoRatesRepository = $CoRatesRepository;
    }



    #[Route('/RatesPaqPremiumInternacional', name: 'app_RatesPaqPremiumInternacional')]
    public function renderRatesPaqPremiumInternacional(): Response
    {
        $rates = $this->CoRatesRepository->showRatesPaqPremiumInternacional();        
        return $this->render('rates/renderRatesPaqPremiumInternacional.html.twig', [
            'rates' => $rates,
        ]);
        
    }
}