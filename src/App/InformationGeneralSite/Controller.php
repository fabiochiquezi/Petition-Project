<?php

namespace FabioChiquezi\PetitionData\App\InformationGeneralSite;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Controller{

    public function get(Request $request, Response $response, $args): Response
    {
        
        $response->getBody()->write("teste");
        return $response;
    }
}