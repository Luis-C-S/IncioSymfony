<?php

namespace App\Entity;

use App\Repository\CoPzpcRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoPzpcRepository::class)]
class CoPzpc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    private ?string $ID_country = null;
    private ?string $product = null;
    private ?string $ID_product = null;
    private ?bool $product_active = null;
    private ?string $zone = null;
    private ?string $ID_zone = null;
    private ?bool $zone_active = null;
    private ?string $country = null;
    private ?string $iso_code = null;
    private ?bool $country_active = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDCountry(): ?string
    {
        return $this->ID_country;
    }

    public function setIDCountry(string $ID_country): static
    {
        $this->ID_country = $ID_country;

        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(string $product): static
    {
        $this->product = $product;

        return $this;
    }

    public function getIDProduct(): ?string
    {
        return $this->ID_product;
    }

    public function setIDProduct(string $ID_product): static
    {
        $this->ID_product = $ID_product;

        return $this;
    }

    public function isProductActive(): ?bool
    {
        return $this->product_active;
    }

    public function setProductActive(bool $product_active): static
    {
        $this->product_active = $product_active;

        return $this;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(string $zone): static
    {
        $this->zone = $zone;

        return $this;
    }

    public function getIDZone(): ?string
    {
        return $this->ID_zone;
    }

    public function setIDZone(string $ID_zone): static
    {
        $this->ID_zone = $ID_zone;

        return $this;
    }

    public function isZoneActive(): ?bool
    {
        return $this->zone_active;
    }

    public function setZoneActive(bool $zone_active): static
    {
        $this->zone_active = $zone_active;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getIsoCode(): ?string
    {
        return $this->iso_code;
    }

    public function setIsoCode(string $iso_code): static
    {
        $this->iso_code = $iso_code;

        return $this;
    }

    public function isCountryActive(): ?bool
    {
        return $this->country_active;
    }

    public function setCountryActive(bool $country_active): static
    {
        $this->country_active = $country_active;

        return $this;
    }
}
