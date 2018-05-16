<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CitiesRepository")
 */
class Cities
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @SWG\Property(description="The unique id of the city")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @SWG\Property(description="The name of the city")
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     * @SWG\Property(description="The totale population of the city.")
     */
    private $population;

    /**
     * @ORM\Column(type="string", length=255)
     * @SWG\Property(description="The state of the city.")
     */
    private $state;





    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPopulation(): ?int
    {
        return $this->population;
    }

    public function setPopulation(int $population): self
    {
        $this->population = $population;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }
}
