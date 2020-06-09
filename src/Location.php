<?php

namespace YeetLabs\YelpValue;

class Location
{
    private $city;
    private $state;
    private $country;
    private $address1;
    private $address2;
    private $address3;
    private $zip_code;
    private $cross_streets;
    private $display_address;

    private function __construct(
        string $city,
        string $state,
        string $country,
        string $address1,
        ?string $address2,
        ?string $address3,
        string $zip_code,
        ?string $cross_streets,
        ?array $display_address
    ) {
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->address3 = $address3;
        $this->zip_code = $zip_code;
        $this->cross_streets = $cross_streets;
        $this->display_address = $display_address;
    }

    public static function fromArray(array $params): self
    {
        return new static(
            $params['city'],
            $params['state'],
            $params['country'],
            $params['address1'],
            $params['address2'] ?? null,
            $params['address3'] ?? null,
            $params['zip_code'],
            $params['cross_streets'] ?? null,
            $params['display_address'] ?? null
        );
    }

    public function toArray(): array
    {
        return [
            'city' => $this->city(),
            'state' => $this->state(),
            'country' => $this->country(),
            'address1' => $this->address1(),
            'address2' => $this->address2(),
            'address3' => $this->address3(),
            'zip_code' => $this->zipCode(),
            'cross_streets' => $this->crossStreets(),
            'display_address' => $this->displayAddress(),
        ];
    }

    public function city(): string
    {
        return $this->city;
    }

    public function state(): string
    {
        return $this->state;
    }

    public function country(): string
    {
        return $this->country;
    }

    public function address1(): string
    {
        return $this->address1;
    }

    public function address2(): ?string
    {
        return $this->address2;
    }

    public function address3(): ?string
    {
        return $this->address3;
    }

    public function zipCode(): string
    {
        return $this->zip_code;
    }

    public function crossStreets(): ?string
    {
        return $this->cross_streets;
    }

    public function displayAddress(): ?array
    {
        return $this->display_address;
    }
}