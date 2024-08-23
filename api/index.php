<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Iluminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Iluminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);