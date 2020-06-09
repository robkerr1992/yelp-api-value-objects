<?php

namespace YeetLabs\YelpValue\Tests\Feature;

use YeetLabs\YelpValue\Hours;
use YeetLabs\YelpValue\Tests\TestCase;

class HoursTest extends TestCase
{
    public function test_it_can_initialize()
    {
        $data = $this->rawHoursData();

        $hours = Hours::fromArray($data);

        $this->assertInstanceOf(Hours::class, $hours);

        $this->assertEquals($this->hoursData(), $hours->toArray());
    }

    private function hoursData(): array
    {
        return [
            'monday' => [
                'open' => '5:30 pm',
                'close' => '10:00 pm',
            ],
            'tuesday' => [
                'open' => '5:30 pm',
                'close' => '10:00 pm',
            ],
            'wednesday' => [
                'open' => '5:30 pm',
                'close' => '10:00 pm',
            ],
            'thursday' => [
                'open' => '5:30 pm',
                'close' => '10:00 pm',
            ],
            'friday' => [
                'open' => '5:30 pm',
                'close' => '10:00 pm',
            ],
            'saturday' => [
                'open' => '5:30 pm',
                'close' => '10:00 pm',
            ],
            'sunday' => [
                'open' => '5:30 pm',
                'close' => '10:00 pm',
            ],
        ];
    }

    private function rawHoursData()
    {
        return [
            [
                "is_overnight" => false,
                "start" => "1730",
                "end" => "2200",
                "day" => 0
            ],
            [
                "is_overnight" => false,
                "start" => "1730",
                "end" => "2200",
                "day" => 1
            ],
            [
                "is_overnight" => false,
                "start" => "1730",
                "end" => "2200",
                "day" => 2
            ],
            [
                "is_overnight" => false,
                "start" => "1730",
                "end" => "2200",
                "day" => 3
            ],
            [
                "is_overnight" => false,
                "start" => "1730",
                "end" => "2200",
                "day" => 4
            ],
            [
                "is_overnight" => false,
                "start" => "1730",
                "end" => "2200",
                "day" => 5
            ],
            [
                "is_overnight" => false,
                "start" => "1730",
                "end" => "2200",
                "day" => 6
            ]
        ];
    }
}