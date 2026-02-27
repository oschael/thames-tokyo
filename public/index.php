<?php

$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

$view = $request === '' ? 'home' : $request;

/* ===== RUTAS PERMITIDAS ===== */
$allowedRoutes = [
    'index',
    'home',
    'about',
    'services',
    // 'access-stories',
    // 'delicatessen',
    'contact'
];

/* ===== VALIDACIÓN ===== */
if (!in_array($view, $allowedRoutes)) {
    http_response_code(404);
    require __DIR__ . '/views/404.php';
    exit;
}

$file = __DIR__ . "/views/{$view}.php";

if (file_exists($file)) {
    require $file;
} else {
    http_response_code(404);
    require __DIR__ . '/views/404.php';
    exit;
}