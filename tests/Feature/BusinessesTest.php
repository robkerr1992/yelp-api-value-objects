<?php

namespace YeetLabs\YelpValue\Tests\Feature;

use YeetLabs\YelpValue\BusinessDetails;
use YeetLabs\YelpValue\Businesses;
use YeetLabs\YelpValue\Tests\TestCase;

class BusinessesTest extends TestCase
{
    public function test_it_can_initialize()
    {
        $data = $this->businessesData();

        $businesses = Businesses::fromArray($data);

        $this->assertInstanceOf(Businesses::class, $businesses);

        foreach ($businesses->businesses() as $key => $business) {
            $this->assertInstanceOf(BusinessDetails::class, $business);
            $this->assertEquals($this->businessesData()[$key], $business->toArray());
        }
        $this->assertEquals($data, $businesses->toArray());
    }

    private function businessesData(): array
    {
        return [
            [
                'id' => 'id',
                'url' => 'www.google.com',
                'name' => 'name',
                'phone' => '210-333-6666',
                'rating' => '4.5',
                'location' => [
                    "city" => "Austin",
                    "state" => "TX",
                    "country" => "US",
                    "address1" => "1917 Manor Rd",
                    "address2" => "",
                    "address3" => "",
                    "zip_code" => "78722",
                    "cross_streets" => null,
                    "display_address" => null,
                ],
                'image_url' => 'https://s3-media2.fl.yelpcdn.com/bphoto/yFj6wwAAfE2CUxj1GHw_kQ/o.jpg',
                'categories' => [
                    [
                        "alias" => "tradamerican",
                        "title" => "American (Traditional)",
                    ],
                    [
                        "alias" => "gastropubs",
                        "title" => "Gastropubs",
                    ],
                ],
                'coordinates' => [
                    "latitude" => 30.283649725946,
                    "longitude" => -97.721318006516,
                ],
                'hours' => null,
                'price' => null,
                'photos' => null,
                'display_phone' => null,
            ],
            [
                'id' => 'id2',
                'url' => 'www.google.com2',
                'name' => 'name2',
                'phone' => '210-333-2222',
                'rating' => '4.0',
                'location' => [
                    "city" => "Austin2",
                    "state" => "TX2",
                    "country" => "US2",
                    "address1" => "1917 Manor Rd2",
                    "address2" => "2",
                    "address3" => "2",
                    "zip_code" => "72228722",
                    "cross_streets" => null,
                    "display_address" => null,
                ],
                'image_url' => 'https://s3-media2.fl.yelpcdn.com/bphoto/yFj6wwAAfE2CUx2222j1GHw_kQ/o.jpg',
                'categories' => [
                    [
                        "alias" => "tradamerica2n2",
                        "title" => "American (Traditional)2",
                    ],
                    [
                        "alias" => "gastropubs2",
                        "title" => "Gastropubs2",
                    ],
                ],
                'coordinates' => [
                    "latitude" => 32.283649725946,
                    "longitude" => -92.721318006516,
                ],
                'hours' => null,
                'price' => null,
                'photos' => null,
                'display_phone' => null,
            ],
            [
                'id' => 'id23',
                'url' => 'www.google.com23',
                'name' => 'name23',
                'phone' => '210-333-3333',
                'rating' => '4.3',
                'location' => [
                    "city" => "Austin23",
                    "state" => "TX23",
                    "country" => "US23",
                    "address1" => "1917 Manor Rd23",
                    "address2" => "23",
                    "address3" => "23",
                    "zip_code" => "33333",
                    "cross_streets" => null,
                    "display_address" => null,
                ],
                'image_url' => 'https://s3-media2.fl.yelpcdn.com/bphoto/yFj6wwAAfE2CU333333/o.jpg',
                'categories' => [
                    [
                        "alias" => "tradamerica3",
                        "title" => "American3",
                    ],
                    [
                        "alias" => "gastropu3",
                        "title" => "Gastrop3",
                    ],
                ],
                'coordinates' => [
                    "latitude" => 33.283649725946,
                    "longitude" => -44.721318006516,
                ],
                'hours' => null,
                'price' => null,
                'photos' => null,
                'display_phone' => null,
            ],
        ];
    }
}