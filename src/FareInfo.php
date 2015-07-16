<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/16/15
 * Time: 4:14 PM
 */

namespace Emcodenet\SabreLaravelBridge;

use FileDB as FileDB;
use Httpful\Request as Request;
use Collection as Collection;

class FareInfo {

    public $id;
    public $city;
    public $coords;
    public $destinationRank; /* optional */
    public $currencyCode;
    public $theme; /* optional */
    public $fares = array();

}