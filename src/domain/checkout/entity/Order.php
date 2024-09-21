<?php

namespace Leticia\ProjetoEmPhp\domain\checkout\entity;

use Exception;

class Order
{
    private float $total;
    public function __construct
    (
        private string $id,
        private string $customerId
        private OrderItem $items,
    )
    {
        $this->total = $this->total();
        $this->validate();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getItems(): OrderItem
    {
        return $this->items;
    }

    public function validate(): bool|Exception
    {
        if (strlen($this->id) === 0) {
            throw new Exception("Id is required");
        }

        if (strlen($this->customerId) === 0) {
            throw new Exception("CustomerId is required");
        }

        // todo: verify if empty funcion will work
        if (empty($this->items)) {
            throw new Exception("Items are required");
        }

        if ($this->items->getQuantity() <= 0) {
                throw new Exception("Quantity must be greater than 0]]]]]]]]]]]");
        }

        return true;
    }

    public function total(): float
    {
        return array_reduce($this->items, function ($array, $item) use () {
            $array += $item->total();
            return $array;
        });
    }
}