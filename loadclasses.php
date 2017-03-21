<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 3/20/2017
 * Time: 5:07 PM
 */

require 'autoload.php';

use app\classes\A\A;
use app\classes\B\B;
use app\classes\autoloadclasses\cars\audi;
use app\classes\autoloadclasses\cars\bmw;
use app\classes\autoloadclasses\cars\mercedes;


//pirmas budas
$audi = new audi();
$bmw = new bmw();
$mercedes = new mercedes();

$A = new A;
$A = new B;

// antras budas
$audi2 = new app\classes\autoloadclasses\cars\audi;
$bmw2 = new app\classes\autoloadclasses\cars\bmw;
$mercedes2 = new app\classes\autoloadclasses\cars\mercedes;

$A = new app\classes\A\A;
$A = new app\classes\B\B;