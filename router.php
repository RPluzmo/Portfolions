<?php

require_once __DIR__ . "/functions.php";

$uri = request_path();

if (PHP_SAPI === "cli-server" && is_file(__DIR__ . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH))) {
    return false;
}

$routes = require __DIR__ . "/routes.php";

if (array_key_exists($uri, $routes)) {
    require __DIR__ . "/" . $routes[$uri];
    exit;
}

http_response_code(404);
require __DIR__ . "/controllers/404.php";