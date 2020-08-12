<?php

namespace FabioChiquezi\PetitionData\App\CustomForm;

use Exception;
use Throwable;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use FabioChiquezi\PetitionData\Infra\Doctrine\EntityManagerFactory;

class Controller{
    private $repository;

    public function __construct(){
        $entityManagerFactory = new EntityManagerFactory();
        $entityManager = $entityManagerFactory->getEntityManager();
    }

    public function setCustomForm(Request $request, Response $response)
    {
        print_r($request);
    }
}