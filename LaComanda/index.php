<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
header('Content-Type: application/json');

$app = AppFactory::create();
$app->setBasePath('/php/LaComanda');

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Entro al Get");
    return $response;
});


$app->run();