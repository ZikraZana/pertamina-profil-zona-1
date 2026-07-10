<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Tentukan jalur absolut ke autoload dan bootstrap Laravel
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

$handle = $app->make(Request::class);

$response = $handle->handle(
    $request = Request::capture()
)->send();

$handle->terminate($request, $response);