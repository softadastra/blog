<?php
use Modules\Post\Core\Http\Controllers\HomeController;
use Ivi\Http\JsonResponse;

/** @var \Ivi\Core\Router\Router $router */
$router->get('/post', [HomeController::class, 'index']);
$router->get('/post/ping', fn() => new JsonResponse([
    'ok' => true,
    'module' => 'Post/Core'
]));