<?php

$app = [];

$app["config"] = require "config.php";

require "Request.php";
require "Router.php";
require "core/database/QueryBuilder.php";
require "core/database/Connection.php";


$app["database"] = new QueryBuilder(
    Connection::make($app["config"]["database"])
);
