<?php

namespace FabioChiquezi\PetitionData\App\InformationGeneralSite;

use Exception;
use FabioChiquezi\PetitionData\Infra\Doctrine\EntityManagerFactory;
use FabioChiquezi\PetitionData\Infra\InformationGeneralSite\Repository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Throwable;

class Controller{
    private $repository;

    public function __construct(){
        $entityManagerFactory = new EntityManagerFactory();
        $this->repository = new Repository(
            $entityManagerFactory->getEntityManager()
        );
    }

    public function getInformations(Request $request, Response $response, $args): Response
    {
        $payload = [];

        try{
            $item = $this->repository->getAll();

            $payload['ok'] = true;
            $payload['devMessage'] = '';
            $payload['message'] = 'Dados resgatados com sucesso';
            $payload['data'] = [];

            if(count($item)){
                $item = $item[0];
                $newArr = [
                    'id' => $item->getId(),
                    'titleSeo' => $item->getTitleSeo(),
                    'descriptionSeo' => $item->getDescriptionSeo(),
                    'imageSeo' => $item->getImageSeo(),
                    'whatsapp' => $item->getWhatsapp(),
                    'facebook' => $item->getFacebook(),
                    'twitter' => $item->getTwitter(),
                    'mobileBanner' => $item->getMobileBanner(),
                    'tabletBanner' => $item->getTabletBanner(),
                    'desktopBanner' => $item->getDesktopBanner(),
                    'titleSite' => $item->getTitleSite(),
                    'subtitleSite' => $item->getSubtitleSite(),
                    'contentSite' => $item->getContentSite(),
                    'videoSite' => $item->getVideoSite()
                ];
    
                $payload['data'] = $newArr;
            }

        }
        catch(Exception | Throwable $e){
            $payload['ok'] = false;
            $payload['message'] = 'Não foi possível resgatar os dados';
            $payload['data'] = [];
            $payload['devMessage'] = $e->getMessage();
        }

        $response->getBody()->write(json_encode($payload));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function setInformations(Request $request, Response $response, $args): Response
    {
        $allItens = $this->repository->getAll();
        $data = $request->getParsedBody();
        $payload = [];
        
        try{
            $this->repository->deleteAll($allItens);
            $this->repository->addData($data);

            $payload['ok'] = true;
            $payload['message'] = 'Dados atualizados com sucesso';
            $payload['devMessage'] = '';
        }
        catch(Exception | Throwable $e){
            $payload['ok'] = false;
            $payload['message'] = 'Não foi possível atualizar os dados';
            $payload['devMessage'] = $e->getMessage();
        }

        $response->getBody()->write(json_encode($payload));
        return $response->withHeader('Content-Type', 'application/json');
    }
}