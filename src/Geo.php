<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/16/15
 * Time: 4:15 PM
 */

namespace Emcodenet\SabreLaravelBridge;

use FileDB as FileDB;
use Httpful\Request as Request;
use Collection as Collection;

class Geo {

    public $latitude;
    public $longitude;
    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}