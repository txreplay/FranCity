<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class FrontController extends Controller
{

    public function cities()
    {
        return new JsonResponse(['status' => 'OK']);
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
