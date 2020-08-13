<?php

namespace FabioChiquezi\PetitionData\App\CustomForm;

use Exception;
use Throwable;
use FabioChiquezi\PetitionData\Infra\CustomForm\Repository;
use FabioChiquezi\PetitionData\Infra\CustomForm\ValidForm;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use FabioChiquezi\PetitionData\Infra\Doctrine\EntityManagerFactory;

class Controller{
    private $repository;

    public function __construct(){
        $entityManagerFactory = new EntityManagerFactory();
        $this->repository = new Repository(
            $entityManagerFactory->getEntityManager()
        );

        $t = $entityManagerFactory->getEntityManager();
        $l = $t->createQueryBuilder();
    }

    public function setCustomForm(Request $request, Response $response): Response
    {
        $data = new ValidForm($request->getParsedBody());
        $payload = [];

        if( $data->valid() ){
            try{
                $this->repository->delete();
                $this->repository->add($request->getParsedBody());
                $payload['ok'] = true;
                $payload['message'] = 'Dados inseridos com sucesso';
                $payload['devMessage'] = '';
            }
            catch(Exception | Throwable $e){
                $payload['ok'] = false;
                $payload['message'] = 'Não foi possível inserir os dados';
                $payload['devMessage'] = $e->getMessage();
            }
        }
        else{
            $payload['ok'] = false;
            $payload['message'] = 'Erro nos dados enviados';
            $payload['devMessage'] = $data->getErros();
        }
        
        $response->getBody()->write(json_encode($payload));
        return $response->withHeader('Content-Type', 'application/json');
    }
}