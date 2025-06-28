<?php
use Illuminate\Database\Capsule\Manager as Capsule;

require_once '../../vendor/autoload.php';

$config = require './configurations.php';

$capsule = new Capsule;
$capsule->addConnection($config);
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Optional: test connection
try {
    $capsule->getConnection()->getPdo();
    // echo "DB connected";
} catch (\Exception $e) {
    error_log('Connection failed: ' . $e->getMessage());
    // Optional fallback logic
}