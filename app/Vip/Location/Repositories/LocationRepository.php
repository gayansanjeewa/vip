<?php

namespace Location\Repositories;

use Location\Constants\LocationType;
use Location\Contracts\LocationInterface;

class LocationRepository implements LocationInterface
{

    public function getLocation()
    {
        return 'dump location here';
    }

    public function getLocationAsJson()
    {
        return [
            'one' => LocationType::LOCAL,
            'two' => LocationType::FOREIGN,
        ];
    }
}
