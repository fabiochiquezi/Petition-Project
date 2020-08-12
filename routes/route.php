<?php

use FabioChiquezi\PetitionData\App\CustomForm\Controller as ControllerCustomForm;
use FabioChiquezi\PetitionData\App\InformationGeneralSite\Controller as ControllerInfGenSite;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;

$app->group('/dashboard', function(RouteCollectorProxy $group){

    $group->get('', function (Request $request, Response $response, $args) {
        $response->getBody()->write("Hello");
        return $response;
    });

    $group->get("/information-general-site", ControllerInfGenSite::class . ':getInformations');
    $group->post("/information-general-site", ControllerInfGenSite::class . ':setInformations');

    $group->post('/custom-form', ControllerCustomForm::class . ':setCustomForm');
});


