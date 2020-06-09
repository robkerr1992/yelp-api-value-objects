<?php

namespace YeetLabs\YelpValue;

class Hours
{
    const DAY_MAPPINGS = [
        0 => 'monday',
        1 => 'tuesday',
        2 => 'wednesday',
        3 => 'thursday',
        4 => 'friday',
        5 => 'saturday',
        6 => 'sunday',
    ];

    private $monday;
    private $tuesday;
    private $wednesday;
    private $thursday;
    private $friday;
    private $saturday;
    private $sunday;

    private function __construct(
        array $monday,
        array $tuesday,
        array $wednesday,
        array $thursday,
        array $friday,
        array $saturday,
        array $sunday
    ) {
        $this->monday = $monday;
        $this->tuesday = $tuesday;
        $this->wednesday = $wednesday;
        $this->thursday = $thursday;
        $this->friday = $friday;
        $this->saturday = $saturday;
        $this->sunday = $sunday;
    }

    public static function fromArray(array $params): self
    {
        $serializedHours = self::needsToBeSerialized($params) ? self::serialize($params) : $params;

        return new static(
            $serializedHours['monday'],
            $serializedHours['tuesday'],
            $serializedHours['wednesday'],
            $serializedHours['thursday'],
            $serializedHours['friday'],
            $serializedHours['saturday'],
            $serializedHours['sunday']
        );
    }

    public function toArray(): array
    {
        return [
            'monday' => $this->monday(),
            'tuesday' => $this->tuesday(),
            'wednesday' => $this->wednesday(),
            'thursday' => $this->thursday(),
            'friday' => $this->friday(),
            'saturday' => $this->saturday(),
            'sunday' => $this->sunday(),
        ];
    }

    public static function serialize(array $openHours): array
    {
        $openHours = array_map(function ($hoursForDay) {
            return (array) $hoursForDay;
        }, $openHours);

        $days = [];
        foreach ($openHours as $hoursForDay) {
            if(!in_array(self::DAY_MAPPINGS[$hoursForDay['day']], $days)) {
                $days[self::DAY_MAPPINGS[$hoursForDay['day']]] = [
                    'open' => self::timeToHumanReadable($hoursForDay['start']),
                    'close' => self::timeToHumanReadable($hoursForDay['end']),
                ];
            }
        }
        return $days;
    }

    private static function timeToHumanReadable($time): string
    {
        return date("g:i a", strtotime($time));
    }

    public static function needsToBeSerialized(array $params): bool
    {
        foreach (self::DAY_MAPPINGS as $day) {
            if(isset($params[$day])) {
                return false;
            }
        }

        return true;
    }

    public function monday(): array
    {
        return $this->monday;
    }

    public function tuesday(): array
    {
        return $this->tuesday;
    }

    public function wednesday(): array
    {
        return $this->wednesday;
    }

    public function thursday(): array
    {
        return $this->thursday;
    }

    public function friday(): array
    {
        return $this->friday;
    }

    public function saturday(): array
    {
        return $this->saturday;
    }

    public function sunday(): array
    {
        return $this->sunday;
    }
}