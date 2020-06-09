<?php

namespace YeetLabs\YelpValue;

class Categories
{
    private $categories;

    private function __construct(array $categories)
    {
        $this->categories = $categories;
    }

    public static function fromArray(array $params): self
    {
        $categories = array_map(function ($category) {
            return (array) $category;
        }, $params);

        return new static($categories);
    }

    public function toArray(): array
    {
        return $this->categories();
    }

    public function categories(): array
    {
        return $this->categories;
    }
}