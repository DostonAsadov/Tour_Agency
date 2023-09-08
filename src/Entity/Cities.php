<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CitiesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CitiesRepository::class)]
#[ApiResource]
class Cities
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dishes = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, nullable: true)]
    private ?array $fomous_places = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, nullable: true)]
    private ?array $tours = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $history = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $coordination = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDishes(): ?string
    {
        return $this->dishes;
    }

    public function setDishes(?string $dishes): static
    {
        $this->dishes = $dishes;

        return $this;
    }

    public function getFomousPlaces(): ?array
    {
        return $this->fomous_places;
    }

    public function setFomousPlaces(?array $fomous_places): static
    {
        $this->fomous_places = $fomous_places;

        return $this;
    }

    public function getTours(): ?array
    {
        return $this->tours;
    }

    public function setTours(?array $tours): static
    {
        $this->tours = $tours;

        return $this;
    }

    public function getHistory(): ?string
    {
        return $this->history;
    }

    public function setHistory(?string $history): static
    {
        $this->history = $history;

        return $this;
    }

    public function getCoordination(): ?string
    {
        return $this->coordination;
    }

    public function setCoordination(?string $coordination): static
    {
        $this->coordination = $coordination;

        return $this;
    }
}
