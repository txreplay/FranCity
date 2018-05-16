<?php

namespace App\Controller;

use App\Service\DataService;
use App\Entity\Cities;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use Swagger\Annotations as SWG;
use Symfony\Component\Routing\Annotation\Route;

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

    /**
     * Lorem Ipsum.
     *
     * Lorem ipsum dolor sit amet, consectetur adipiscing elit.
     *
     * @Route("/api/cities", methods={"GET"})
     * @SWG\Response(
     *     response=200,
     *     description="Returns all the cities"
     * )
     * @SWG\Tag(name="cities")
     */
    public function cities()
    {
        $response = $this->dataService->getCities();

        return $this->serializeShit($response) ;
    }


    /**
     * Lorem Ipsum 2.
     *
     * Lorem ipsum dolor sit amet, consectetur adipiscing elit.
     *
     * @Route("/api/city/random", methods={"GET"})
     * @SWG\Response(
     *     response=200,
     *     description="Returns one random city",
     *     @Model(type=Cities::class)
     * )
     * @SWG\Tag(name="cityRandom")
     */
    public function cityRandom()
    {
        $response = $this->dataService->getRandomCity();

        return $this->serializeShit($response) ;
    }

    /**
     * Lorem Ipsum 3.
     *
     * Lorem ipsum dolor sit amet, consectetur adipiscing elit.
     *
     * @Route("/api/city/gt/{population}", methods={"GET"})
     * @SWG\Response(
     *     response=200,
     *     description="Returns all the cities with a greater population than the given number",
     *     @Model(type=Cities::class)
     * )
     * @SWG\Tag(name="cityGreaterThan")
     */
    public function cityGreaterThan($population)
    {
        $response = $this->dataService->getRandomCityGreaterThan($population);

        return $this->serializeShit($response) ;
    }
}
