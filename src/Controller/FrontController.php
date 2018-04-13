<?php

namespace App\Controller;

use App\Service\DataService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class FrontController extends Controller
{

    public function __construct(DataService $dataService)
    {
        $this->dataService  = $dataService;
    }

    public function cities()
    {
        $response = $this->dataService->getCities();

        return new JsonResponse($response);
    }

    public function city($city_id)
    {
        return new JsonResponse(['status' => 'OK']);
    }

    public function cityRandom()
    {
        return new JsonResponse(['status' => 'OK']);
    }


    public function states() {
        return new JsonResponse(['status' => 'OK']);
    }

    public function search($query) {
        return new JsonResponse(['status' => 'OK']);
    }

}
