<?php

namespace App\Controller;

use App\Service\DataService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{

    public function __construct(DataService $dataService)
    {
        $this->dataService  = $dataService;
    }

    public function serializeShit($data) {
        $serializer = $this->get('serializer');
        $serialized = $serializer->serialize($data,'json');
        $response = new Response($serialized);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    public function cities()
    {
        $response = $this->dataService->getCities();

        return $this->serializeShit($response) ;
    }

    public function cityRandom()
    {
        $response = $this->dataService->getRandomCity();

        return $this->serializeShit($response) ;
    }
}
