<?php

require_once __DIR__ . "/functions.php";

$uri = request_path();

$staticDirectories = ["/css/", "/js/", "/assets/"];
$isStaticRequest = false;

foreach ($staticDirectories as $directory) {
    if (str_starts_with($uri, $directory)) {
        $isStaticRequest = true;
        break;
    }
}

if ($isStaticRequest) {
    $staticFile = realpath(__DIR__ . $uri);
    $projectRoot = realpath(__DIR__);

    if ($staticFile !== false && $projectRoot !== false && str_starts_with($staticFile, $projectRoot . DIRECTORY_SEPARATOR) && is_file($staticFile)) {
        $mimeTypes = [
            "css" => "text/css; charset=UTF-8",
            "js" => "application/javascript; charset=UTF-8",
            "png" => "image/png",
            "jpg" => "image/jpeg",
            "jpeg" => "image/jpeg",
            "webp" => "image/webp",
            "gif" => "image/gif",
            "svg" => "image/svg+xml",
        ];
        $extension = strtolower(pathinfo($staticFile, PATHINFO_EXTENSION));

        if (isset($mimeTypes[$extension])) {
            header("Content-Type: " . $mimeTypes[$extension]);
        }

        readfile($staticFile);
        exit;
    }
}

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