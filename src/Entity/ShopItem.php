<?php

namespace App\Entity;

class ShopItem
{
    private $id;
    private $name;
    private $price;

    public function __construct(string $id, string $name, string $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
    
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): void
    {
        $this->price = $price;
    }
}

