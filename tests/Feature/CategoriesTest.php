<?php

namespace YeetLabs\YelpValue\Tests\Feature;

use YeetLabs\YelpValue\Categories;
use YeetLabs\YelpValue\Tests\TestCase;

class CategoriesTest extends TestCase
{
    public function test_it_can_initialize()
    {
        $data = $this->categoriesData();

        $categories = Categories::fromArray($data);

        $this->assertInstanceOf(Categories::class, $categories);

        $this->assertEquals($data, $categories->toArray());
    }

    private function categoriesData(): array
    {
        return [
            [
                'alias' => 'tradamerican',
                'title' => 'American (Traditional)',
            ],
            [
                'alias' => 'gastropubs',
                'title' => 'Gastropubs',
            ],
        ];
    }
}