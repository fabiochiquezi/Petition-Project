<?php

namespace FabioChiquezi\PetitionData\Infra\InformationGeneralSite;

use FabioChiquezi\PetitionData\Domain\InformationGeneralSite\InformationGeneralSite;
use FabioChiquezi\PetitionData\Domain\InformationGeneralSite\RepositoryInterface;
use FabioChiquezi\PetitionData\Domain\WhatsApp;

class Repository implements RepositoryInterface{
    private $connect;

    public function __construct($connect){
        $this->connect = $connect;
    }

    public function getAll(): array
    {
        $repo = $this->connect->getRepository(InformationGeneralSite::class);
        return $repo->findAll();
    }

    public function addData($data)
    {
        $item = new InformationGeneralSite();
        $item->setTitleSeo       ( $data['titleSeo'] ?? '' );        
        $item->setDescriptionSeo ( $data['descriptionSeo'] ?? '' );        
        $item->setImageSeo       ( $data['imageSeo'] ?? '' );        
        $item->setWhatsapp( ( new WhatsApp($data['whatsapp']) )->getNumber() ?? '' );        
        $item->setFacebook       ( $data['facebook'] ?? '' );        
        $item->setTwitter        ( $data['twitter'] ?? '' );
        $item->setMobileBanner   ( $data['mobileBanner'] ?? '' );
        $item->setTabletBanner   ( $data['tabletBanner'] ?? '' );
        $item->setDesktopBanner  ( $data['desktopBanner'] ?? '' );
        $item->setTitleSite      ( $data['titleSite'] ?? '' );
        $item->setSubtitleSite   ( $data['subtitleSite'] ?? '' );
        $item->setContentSite    ( $data['contentSite'] ?? '' );
        $item->setVideoSite      ( $data['videoSite'] ?? '' );

        $this->connect->persist($item);
        $this->connect->flush();
    }

    public function deleteAll($allItens)
    {
        foreach($allItens as $item){
            $this->connect->remove($item);
        }
        $this->connect->flush();
    }
}