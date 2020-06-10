<?php

namespace YeetLabs\YelpValue;

class Businesses
{
    private $businesses;

    private function __construct(array $businesses)
    {
        $this->businesses = $businesses;
    }

    public static function fromArray(array $params): self
    {
        return new static(
            array_map(function (array $business) {
                return BusinessDetails::fromArray([
                    'id' => $business['id'],
                    'name' => $business['name'],
                    'image_url' => $business['image_url'],
                    'url' => $business['url'],
                    'phone' => $business['phone'],
                    'categories' => $business['categories'],
                    'rating' => $business['rating'],
                    'location' => $business['location'],
                    'coordinates' => $business['coordinates'],
                ]);
            }, $params)
        );
    }

    public function toArray(): array
    {
        return array_map(function (BusinessDetails $business) {
            return $business->toArray();
        }, $this->businesses());
    }

    public function businesses(): array
    {
        return $this->businesses;
    }

    public static function apiObjectToArray(array $payload): array
    {
        return array_map(function ($business) {
            $business = (array) $business;
            $business['location'] = (array) $business['location'];
            $business['coordinates'] = (array) $business['coordinates'];
            return $business;
        }, $payload);
    }
}