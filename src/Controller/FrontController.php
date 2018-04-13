<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class FrontController extends Controller
{

    public function cities()
    {
        return new JsonResponse();
    }

    public function city($city_id)
    {
        return new JsonResponse();
    }

    public function cityRandom()
    {
        return new JsonResponse();
    }

    public function counties() {
        return new JsonResponse();
    }

    public function county($county_id) {
        return new JsonResponse();
    }

    public function states() {
        return new JsonResponse();
    }

    public function state($state_id) {
        return new JsonResponse();
    }

    public function search($query) {
        return new JsonResponse();
    }


}
