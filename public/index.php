<?php
include_once './header.php';

function showError404() {
    header("HTTP/1.1 404 Not Found");
    require '../app/views/404/404.php';
    exit; // Important, to stop further processing
}

$request = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$request = trim($request,"/");
// $request = str_replace("","/", $request);

switch ($request) {
    case "":
        case"home":
        require_once "./home.php";
        break;

        case "login":
            require_once "../app/views/auth/login.php";
            break;

        case "register":
            require_once "../app/views/auth/register.php";
            break;            

        case "dashboard":
        require_once "../app/views/dashboard.php";
        break;
    
    default:
            showError404();
            break;
}

include_once './footer.php';