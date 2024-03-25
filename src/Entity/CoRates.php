<?php

namespace App\Entity;

use App\Repository\CoRatesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoRatesRepository::class)]
class CoRates
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    private ?string $product = null;
    private ?string $id_product = null;
    private ?string $zone = null;
    private ?string $id_zone = null;
    private ?string $weight = null;
    private ?int $kg_fraction = null;
    private $rate = null;
    private $rate_backup = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdProduct(): ?string
    {
        return $this->id_product;
    }

    public function setIdProduct(string $id_product): static
    {
        $this->id_product = $id_product;

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

    public function getIdZone(): ?string
    {
        return $this->id_zone;
    }

    public function setIdZone(string $id_zone): static
    {
        $this->id_zone = $id_zone;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(string $weight): static
    {
        $this->weight = $weight;

        return $this;
    }

    public function getKgFraction(): ?int
    {
        return $this->kg_fraction;
    }

    public function setKgFraction(int $kg_fraction): static
    {
        $this->kg_fraction = $kg_fraction;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(float $rate): static
    {
        $this->rate = $rate;

        return $this;
    }

    public function getRate_backup(): ?float
    {
        return $this->rate_backup;
    }

    public function setRate_backup(?float $rate_backup): static
    {
        $this->rate_backup = $rate_backup;

        return $this;
    }
}
