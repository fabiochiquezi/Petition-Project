<?php

namespace FabioChiquezi\PetitionData\Infra\InformationGeneralSite;

use Exception;
use FabioChiquezi\PetitionData\Domain\InformationGeneralSite\InformationGeneralSite;
use FabioChiquezi\PetitionData\Infra\Doctrine\EntityManagerFactory;
use FabioChiquezi\PetitionData\Domain\InformationGeneralSite\RepositoryInterface;
use FabioChiquezi\PetitionData\Domain\WhatsApp;
use Throwable;

class Repository implements RepositoryInterface{
    private $entityManager;

    public function __construct(){
        $entityManagerFactory = new EntityManagerFactory();
        $this->entityManager = $entityManagerFactory->getEntityManager();
    }

    public function getAll(): array
    {
        $repository = $this->entityManager->getRepository(InformationGeneralSite::class);
        return $repository->findAll();
    }

    public function updateData($item, $data)
    {
        $this->setNewData($item, $data);
        $this->entityManager->flush();
    }

    public function addData($data)
    {
        $newItem = new InformationGeneralSite();
        $this->setNewData($newItem, $data);

        $this->entityManager->persist($newItem);
        $this->entityManager->flush();
    }

    private function setNewData($item, $data)
    {
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
    }

    public function deleteAll($allItens)
    {
        foreach($allItens as $item){
            $this->entityManager->remove($item);
        }
        $this->entityManager->flush();
    }
}