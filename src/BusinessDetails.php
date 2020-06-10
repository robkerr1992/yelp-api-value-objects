<?php

namespace YeetLabs\YelpValue;

class BusinessDetails
{
    private $id;
    private $url;
    private $name;
    private $hours;
    private $phone;
    private $price;
    private $photos;
    private $rating;
    private $location;
    private $imageUrl;
    private $categories;
    private $coordinates;
    private $display_phone;

    private function __construct(
        string $id,
        string $url,
        string $name,
        ?Hours $hours,
        string $phone,
        ?string $price,
        ?array $photos,
        string $rating,
        Location $location,
        string $imageUrl,
        Categories $categories,
        array $coordinates,
        ?string $display_phone
    ) {
        $this->id = $id;
        $this->url = $url;
        $this->name = $name;
        $this->hours = $hours;
        $this->phone = $phone;
        $this->price = $price;
        $this->photos = $photos;
        $this->rating = $rating;
        $this->location = $location;
        $this->imageUrl = $imageUrl;
        $this->categories = $categories;
        $this->coordinates = $coordinates;
        $this->display_phone = $display_phone;
    }

    public static function fromArray(array $params): self
    {
        $hours = isset($params['hours']) ? Hours::fromArray($params['hours']) : null;

        return new static(
            $params['id'],
            $params['url'],
            $params['name'],
            $hours,
            $params['phone'],
            $params['price'] ?? null,
            $params['photos'] ?? null,
            $params['rating'],
            Location::fromArray($params['location']),
            $params['image_url'],
            Categories::fromArray($params['categories']),
            $params['coordinates'],
            $params['display_phone'] ?? null
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id(),
            'url' => $this->url(),
            'name' => $this->name(),
            'hours' => $this->hours() ? $this->hours()->toArray() : null,
            'phone' => $this->phone(),
            'price' => $this->price(),
            'photos' => $this->photos(),
            'rating' => $this->rating(),
            'location' => $this->location()->toArray(),
            'image_url' => $this->imageUrl(),
            'categories' => $this->categories()->toArray(),
            'coordinates' => $this->coordinates(),
            'display_phone' => $this->display_phone()
        ];
    }

    public function id(): string
    {
        return $this->id;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function hours(): ?Hours
    {
        return $this->hours;
    }

    public function phone(): string
    {
        return $this->phone;
    }

    public function price(): ?string
    {
        return $this->price;
    }

    public function photos(): ?array
    {
        return $this->photos;
    }

    public function rating(): string
    {
        return $this->rating;
    }

    public function location(): Location
    {
        return $this->location;
    }

    public function imageUrl(): string
    {
        return $this->imageUrl;
    }

    public function categories(): Categories
    {
        return $this->categories;
    }

    public function coordinates(): array
    {
        return $this->coordinates;
    }

    public function display_phone(): ?string
    {
        return $this->display_phone;
    }
}