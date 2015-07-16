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

class Fare {

    public $lowestFare;
    public $lowestNonStopFare;
    public $departureDateTime;
    public $returnDateTime;
}