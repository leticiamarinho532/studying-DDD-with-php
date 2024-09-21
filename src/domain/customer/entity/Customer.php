<?php

namespace  Leticia\ProjetoEmPhp\domain\customer\entity;

use Exception;

class Customer
{
    private ?Address $address;
    private bool $active = false;
    private float $rewardPoints = 0.00;

    public function __construct(
        private string $id,
        private string $name = ""
    )
    {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getrewardPoints(): float
    {
        return $this->rewardPoints;
    }

    public function validate(): mixed
    {
        if (strlen($this->id) === 0) {
            new Exception("Id is required");
        }

        if (strlen($this->name) === 0) {
            new Exception("Name is required");
        }
    }

    public function changeName(string $name): mixed
    {
        $this->name = $name;
        $this->validate();
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address
    }

    public function setAddress(): void
    {
        return $this->address = $address;
    }

    public function isActive(): bool 
    {
        return $this->active;
    }

    public function active(): mixed
    {
        if (is_null($this->address)) {
            throw new Exception("Address is mandatory to activate a customer");
        }

        $this->active = true;
    }

    public function deactivate(): void 
    {
        $this->active = false;
    }

    public function addRewardPoints(float $points): void
    {
        $this->rewardPoints += $points;
    }
}