<?php

namespace Location\Controllers;

use App\Http\Controllers\Controller;
use Location\Contracts\LocationInterface;

class LocationApiController extends Controller
{
    /**
     * @var LocationInterface
     */
    private $location;

    public function __construct(LocationInterface $location)
    {
        $this->location = $location;
    }

    public function api()
    {
        return $this->location->getLocationAsJson();
    }
}
