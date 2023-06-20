<?php

namespace App\Entity;

class Bicycle extends ShopItem
{
    private $frame;
    private $tires;
    private $brakes;
    private $handlebars;
    private $saddle;
    private $chain;

    public function __construct(string $id, string $name, float $price, string $frame, string $tires, string $brakes, string $handlebars, string $saddle, string $chain)
    {
        parent::__construct($id, $name, $price);
        $this->frame = $frame;
        $this->tires = $tires;
        $this->brakes = $brakes;
        $this->handlebars = $handlebars;
        $this->saddle = $saddle;
        $this->chain = $chain;
    }

    public function getFrame(): ?string
    {
        return $this->frame;
    }

    public function setFrame(string $frame): void
    {
        $this->frame = $frame;
    }

    public function getTires(): ?string
    {
        return $this->tires;
    }

    public function setTires(string $tires): void
    {
        $this->tires = $tires;
    }

    public function getBrakes(): ?string
    {
        return $this->brakes;
    }

    public function setBrakes(string $brakes): void
    {
        $this->brakes = $brakes;
    }

    public function getHandlebars(): ?string
    {
        return $this->handlebars;
    }

    public function setHandlebars(string $handlebars): void
    {
        $this->handlebars = $handlebars;
    }

    public function getSaddle(): ?string
    {
        return $this->saddle;
    }

    public function setSaddle(string $saddle): void
    {
        $this->saddle = $saddle;
    }

    public function getChain(): ?string
    {
        return $this->chain;
    }

    public function setChain(string $chain): void
    {
        $this->chain = $chain;
    }
}