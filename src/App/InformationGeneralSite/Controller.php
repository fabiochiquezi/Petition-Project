<?php

namespace FabioChiquezi\PetitionData\App\InformationGeneralSite;

use Exception;
use FabioChiquezi\PetitionData\Infra\InformationGeneralSite\Repository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Throwable;

class Controller{

    public function getInformations(Request $request, Response $response, $args): Response
    {
        $payload = [];

        try{
            $repository = new Repository();
            $item = $repository->getAll()[0];
    
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

            $payload['ok'] = true;
            $payload['message'] = 'Dados resgatados com sucesso';
            $payload['data'] = $newArr;
        }
        catch(Exception | Throwable $e){
            $payload['ok'] = false;
            $payload['message'] = 'Não foi possível resgatar os dados';
            $payload['data'] = [];
        }

        $response->getBody()->write(json_encode($payload));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function setInformations(Request $request, Response $response, $args): Response
    {
        $repository = new Repository();
        $allItens = $repository->getAll();

        $data = $request->getParsedBody();
        $messageReturns = '';
        
        if( count($allItens) === 0 ){
            $messageReturns = $this->addData($repository, $data);
        }
        else if(count($allItens) > 1){
            $messageReturns = $this->deleteAll($repository, $allItens, $data);
        }
        else{
            $messageReturns = $this->updateData($repository, $allItens[0], $data);
        }
        
        $payload = [];
        $payload['ok'] = $messageReturns[0];
        $payload['message'] = $messageReturns[1];

        $response->getBody()->write(json_encode($payload));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function deleteAll($repository, $allItens, $data){
        try{
            $repository->deleteAll($allItens);
            $messageReturns = $this->addData($repository, $data);
            return [true, 'Dados atualizados com sucesso'];
        }
        catch(Exception | Throwable $e){
            return [false, 'Banco de dados incossistente: não foi possível deletar os dados.'];
        }
    }

    private function updateData($repository, $allItens, $data)
    {
        try{
            $repository->updateData($allItens, $data);
            return [true, 'Dados atualizados com sucesso'];
        }
        catch(Exception | Throwable $e){
            return [false, 'Não foi possível atualizar os dados'];
        }
    }

    private function addData($repository, $data)
    {
        try{
            $repository->addData($data);
            return [true, 'Dados atualizados com sucesso'];
        }
        catch(Exception | Throwable $e){
            return [false, 'Não foi possível atualizar os dados'];
        }
    }
}