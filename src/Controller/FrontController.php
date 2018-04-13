<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class FrontController extends Controller
{

    public function cities()
    {
        return new JsonResponse(['city' => 100], 200, ['Access-Control-Allow-Origin' => '*']);
    }

    public function city($city_id)
    {
        return new JsonResponse(['population' => 100, 'city' => 'Paris', 'state' => 'Ile-de-France'], 200, ['Access-Control-Allow-Origin' => '*']);
    }

    public function cityRandom()
    {
        return new JsonResponse(['population' => 100, 'city' => 'Paris', 'state' => 'Ile-de-France'], 200, ['Access-Control-Allow-Origin' => '*']);
    }

    public function states() {
        return new JsonResponse(['status' => 100], 200, ['Access-Control-Allow-Origin' => '*']);
    }

    public function search($query) {
        return new JsonResponse(['status' => 100], 200, ['Access-Control-Allow-Origin' => '*']);
    }

}
