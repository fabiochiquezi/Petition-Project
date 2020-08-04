<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;

$app->group('/dashboard', function(RouteCollectorProxy $group){

    $group->get('', function (Request $request, Response $response, $args) {
        $response->getBody()->write("Hello");
        return $response;
    });
    
});


