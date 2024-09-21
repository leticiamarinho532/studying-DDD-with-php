<?php

namespace Leticia\ProjetoEmPhp\domain\checkout\entity;

class OrderItem 
{
    public function __construct(
        private string $id,
        private string $name,
        private float $price,
        private string $productId,
        private int $quantity
    ) 
    {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string 
    {
        return $this->name;;
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function total(): float
    {
        return $this->price * $this->quantity;
    }
}