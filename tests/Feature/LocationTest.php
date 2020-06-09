<?php

namespace YeetLabs\YelpValue\Tests\Feature;

use YeetLabs\YelpValue\Location;
use YeetLabs\YelpValue\Tests\TestCase;

class LocationTest extends TestCase
{
    public function test_it_can_initialize()
    {
        $data = $this->locationData();

        $location = Location::fromArray($data);

        $this->assertInstanceOf(Location::class, $location);

        $this->assertEquals($data, $location->toArray());
    }

    private function locationData(): array
    {
        return [
            'city' => 'Austin',
            'state' => 'TX',
            'country' => 'US',
            'address1' => '1917 Manor Rd',
            'address2' => '',
            'address3' => '',
            'zip_code' => '78722',
            'cross_streets' => '',
            'display_address' => [
                '1917 Manor Rd',
                'Austin, TX 78722',
            ]
        ];
    }
}