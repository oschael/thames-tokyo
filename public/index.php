<?php

$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if ($request === '') {
    $view = 'home';
} else {
    $view = $request;
}

$file = __DIR__ . "/views/{$view}.php";

if (file_exists($file)) {
    require $file;
} else {
    http_response_code(404);
    echo "404 - Página no encontrada";
}