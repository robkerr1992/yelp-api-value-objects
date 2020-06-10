<?php


namespace YeetLabs\YelpValue\Tests\Feature;


use YeetLabs\YelpValue\BusinessDetails;
use YeetLabs\YelpValue\Tests\TestCase;

class BusinessDetailsTest extends TestCase
{
    public function test_it_can_initialize()
    {
        $data = $this->businessDetailsData();

        $businessDetails = BusinessDetails::fromArray($data);

        $this->assertInstanceOf(BusinessDetails::class, $businessDetails);

        $this->assertEquals($data, $businessDetails->toArray());
    }

    private function businessDetailsData(): array
    {
        return [
            'id' => 'id',
            'url' => 'www.google.com',
            'name' => 'name',
            'hours' => [
                "monday" => [
                    "open" => "4:30 pm",
                    "close" => "10:00 pm",
                ],
                "tuesday" => [
                    "open" => "4:30 pm",
                    "close" => "10:00 pm",
                ],
                "wednesday" => [
                    "open" => "4:30 pm",
                    "close" => "10:00 pm",
                ],
                "thursday" => [
                    "open" => "4:30 pm",
                    "close" => "10:00 pm",
                ],
                "friday" => [
                    "open" => "4:30 pm",
                    "close" => "11:00 pm",
                ],
                "saturday" => [
                    "open" => "4:30 pm",
                    "close" => "11:00 pm",
                ],
                "sunday" => [
                    "open" => "4:30 pm",
                    "close" => "10:00 pm",
                ],
            ],
            'phone' => '210-333-6666',
            'price' => '$$',
            'photos' => [
                "https://s3-media2.fl.yelpcdn.com/bphoto/yFj6wwAAfE2CUxj1GHw_kQ/o.jpg",
                "https://s3-media3.fl.yelpcdn.com/bphoto/MsAFRZZ15ByQP8a3_CmAXA/o.jpg",
                "https://s3-media1.fl.yelpcdn.com/bphoto/3w-mJI2AnYiEH_Ndcy4OEw/o.jpg",
            ],
            'rating' => '4.5',
            'location' => [
                "city" => "Austin",
                "state" => "TX",
                "country" => "US",
                "address1" => "1917 Manor Rd",
                "address2" => "",
                "address3" => "",
                "zip_code" => "78722",
                "cross_streets" => "",
                "display_address" => [
                    "1917 Manor Rd",
                    "Austin, TX 78722",
                ],
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
            'display_phone' => '(512) 391-2337'
        ];
    }
}