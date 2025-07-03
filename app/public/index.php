<?php
include_once './header.php';

function showError404() {
    header("HTTP/1.1 404 Not Found");
    require '../app/views/404/404.php';
    exit;
}

$request = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$request = trim($request, "/");

// Load the routes config
$routes = require 'routes.php';

// Simple route resolver
if (array_key_exists($request, $routes)) {
    require_once $routes[$request];
} else {
    showError404();
}

include_once './footer.php';

// DO NOT TOUCH THIS FILE