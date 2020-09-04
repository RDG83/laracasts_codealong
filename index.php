<?php

use App\core\Router;
use App\core\Request;

require "vendor/autoload.php";
require "core/bootstrap.php";


Router::load("routes.php")
    ->direct(Request::uri(), Request::method());
