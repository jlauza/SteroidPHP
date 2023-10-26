<?php

use Illuminate\Database\Capsule\Manager as Capsule;
require_once '../../vendor/autoload.php';

$capsule = new Capsule;
$capsule->addConnection( $config = require './configurations.php' );
$capsule->setAsGlobal();
$capsule->bootEloquent();

try {

    $capsule->addConnection( $config )->getPdo();
    echo "Database connection established successfully!";

} catch (\Exception $e) {
    echo "Database connection failed: " . $e->getMessage();
}