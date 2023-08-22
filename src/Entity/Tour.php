<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TourRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TourRepository::class)]
#[ApiResource]
class Tour
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $duration = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $groupsize = null;

    #[ORM\Column(length: 255)]
    private ?string $tour_code = null;

    #[ORM\Column(length: 255)]
    private ?string $tour_type = null;

    #[ORM\Column(type:Types::BOOLEAN)]
    private ?bool $age_requirement = null;

    #[ORM\Column]
    private ?bool $guiding = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $review = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY )]
    private array $tags = [];

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photos = null;

    #[ORM\Column(length: 255)]
    private ?string $map = null;

    #[ORM\Column]
    private ?bool $Transport = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $itinerary = [];

    #[ORM\Column(type: Types::TEXT)]
    private ?string $tour_Included = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $tour_Excluded = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, nullable: true)]
    private ?array $availability = null;

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

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getGroupsize(): ?int
    {
        return $this->groupsize;
    }

    public function setGroupsize(int $groupsize): static
    {
        $this->groupsize = $groupsize;

        return $this;
    }

    public function getTourCode(): ?string
    {
        return $this->tour_code;
    }

    public function setTourCode(string $tour_code): static
    {
        $this->tour_code = $tour_code;

        return $this;
    }

    public function getTourType(): ?string
    {
        return $this->tour_type;
    }

    public function setTourType(string $tour_type): static
    {
        $this->tour_type = $tour_type;

        return $this;
    }

    public function getAgeRequirement(): ?bool
    {
        return $this->age_requirement;
    }

    public function setAgeRequirement(bool $age_requirement): static
    {
        $this->age_requirement = $age_requirement;

        return $this;
    }

    public function getGuiding(): ?bool
    {
        return $this->guiding;
    }

    public function setGuiding(bool $guiding): static
    {
        $this->guiding = $guiding;

        return $this;
    }

    public function getReview(): ?string
    {
        return $this->review;
    }

    public function setReview(?string $review): static
    {
        $this->review = $review;

        return $this;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }

    public function getPhotos(): ?string
    {
        return $this->photos;
    }

    public function setPhotos(?string $photos): static
    {
        $this->photos = $photos;

        return $this;
    }

    public function getMap(): ?string
    {
        return $this->map;
    }

    public function setMap(string $map): static
    {
        $this->map = $map;

        return $this;
    }

    public function getTransport(): ?bool
    {
        return $this->Transport;
    }

    public function setTransport(bool $Transport): static
    {
        $this->Transport = $Transport;

        return $this;
    }

    public function getItinerary(): array
    {
        return $this->itinerary;
    }

    public function setItinerary(array $itinerary): static
    {
        $this->itinerary = $itinerary;

        return $this;
    }

    public function getTourIncluded(): ?string
    {
        return $this->tour_Included;
    }

    public function setTourIncluded(string $tour_Included): static
    {
        $this->tour_Included = $tour_Included;

        return $this;
    }

    public function getTourExcluded(): ?string
    {
        return $this->tour_Excluded;
    }

    public function setTourExcluded(string $tour_Excluded): static
    {
        $this->tour_Excluded = $tour_Excluded;

        return $this;
    }

    public function getAvailability(): ?array
    {
        return $this->availability;
    }

    public function setAvailability(?array $availability): static
    {
        $this->availability = $availability;

        return $this;
    }
}
