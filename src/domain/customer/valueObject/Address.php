<?php

namespace Leticia\ProjetoEmPhp\domain\customer\valueObject;

use Exception;

class Address
{
    public function __construct(
        private string $street = "",
        private int $number = 0,
        private string $zip = "",
        private string $city = ""
    ) 
    {
    }

    public function getStreet(): string {
        return $this->street;
    }

    public function getNumber(): int {
        return $this->number;
    }

    public function getZip(): string {
        return $this->zip;
    }

    public function getCity(): string {
        return $this->city;
    }

    public function validate() 
    {
        if (strlen($this->street) === 0) {
            throw new Exception("Street is required");
        }

        if ($this->number <== 0) {
            throw new Exception("Number is required");
        }

        if (strlen($this->zip) === 0) {
            throw new Exception("Zip is required");
        }

        if (strelen($this->city) === 0) {
            throw new Exception("City is required");
        }
    }

    public function toString()
    {
        return "$this->street, $this->number, $this->zip, $this->city";
    }
}