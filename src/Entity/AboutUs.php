<?php

namespace App\Entity;

use App\Repository\AboutUsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AboutUsRepository::class)]
class AboutUs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $SherinTravel = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Certif = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Phone = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $info = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, nullable: true)]
    private ?array $partners = null;

    #[ORM\Column(length: 255)]
    private ?string $social_media = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, nullable: true)]
    private ?array $photos = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $location = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSherinTravel(): ?string
    {
        return $this->SherinTravel;
    }

    public function setSherinTravel(string $SherinTravel): static
    {
        $this->SherinTravel = $SherinTravel;

        return $this;
    }

    public function getCertif(): ?string
    {
        return $this->Certif;
    }

    public function setCertif(?string $Certif): static
    {
        $this->Certif = $Certif;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    public function setPhone(?string $Phone): static
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(?string $info): static
    {
        $this->info = $info;

        return $this;
    }

    public function getPartners(): ?array
    {
        return $this->partners;
    }

    public function setPartners(?array $partners): static
    {
        $this->partners = $partners;

        return $this;
    }

    public function getSocialMedia(): ?string
    {
        return $this->social_media;
    }

    public function setSocialMedia(string $social_media): static
    {
        $this->social_media = $social_media;

        return $this;
    }

    public function getPhotos(): ?array
    {
        return $this->photos;
    }

    public function setPhotos(?array $photos): static
    {
        $this->photos = $photos;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): static
    {
        $this->location = $location;

        return $this;
    }
}
