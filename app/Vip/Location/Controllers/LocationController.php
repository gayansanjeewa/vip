<?php

namespace Location\Controllers;

use App\Http\Controllers\Controller;
use Location\Contracts\LocationInterface;

class LocationController extends Controller
{
    /**
     * @var LocationInterface
     */
    private $location;

    public function __construct(LocationInterface $location)
    {
        $this->location = $location;
    }

    public function index()
    {
        return $this->location->getLocation();
    }
}
