<?php

namespace App\Service;

use App\Entity\Cities;
use App\Repository\CitiesRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class DataService
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     *
     */
    public function getCities()
    {
        $return = $this->em->getRepository(Cities::class)->findAll();


        return $return;
    }

    public function getRandomCity()
    {
        $rand = rand(0, 1000);

        $return = $this->em->getRepository(Cities::class)->findOneById($rand);


        return $return;
    }
}