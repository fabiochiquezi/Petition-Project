<?php

namespace FabioChiquezi\PetitionData\Domain\InformationGeneralSite;

use Doctrine\Migrations\Query\Exception\InvalidArguments;
use Exception;

class InformationGeneralSite{
    private $id;
    private $titleSeo;
    private $descriptionSeo;
    private $imageSeo;
    private $whatsapp;
    private $facebook;
    private $twitter;
    private $mobileBanner;
    private $tabletBanner;
    private $desktopBanner;
    private $titleSite;
    private $subtitleSite;
    private $contentSite;
    private $videoSite;

    public function getTitleSeo()
    {
        return $this->titleSeo;
    }

    public function setTitleSeo($titleSeo)
    {
        if(strlen($titleSeo) > 150) 
            throw new Exception('titleSeo muito grande, máximo de caracteres permitido é 150');
        
        $this->titleSeo = $titleSeo;
        return $this;
    }

    public function getDescriptionSeo()
    {
        return $this->descriptionSeo;
    }

    public function setDescriptionSeo($descriptionSeo)
    {
        $this->descriptionSeo = $descriptionSeo;

        return $this;
    }

    public function getImageSeo()
    {
        return $this->imageSeo;
    }

    public function setImageSeo($imageSeo)
    {
        if(strlen($imageSeo) > 150)
            throw new Exception('imageSeo muito grande, máximo de caracteres permitido é 150');

        $this->imageSeo = $imageSeo;
        return $this;
    }

    public function getWhatsapp()
    {
        return $this->whatsapp;
    }

    public function setWhatsapp($whatsapp)
    {
        $this->whatsapp = $whatsapp;
        return $this;
    }

    public function getFacebook()
    {
        return $this->facebook;
    }

    public function setFacebook($facebook)
    {
        if(strlen($facebook) > 150)
        throw new Exception('facebook muito grande, máximo de caracteres permitido é 150');

        $this->facebook = $facebook;
        return $this;
    }

    public function getTwitter()
    {
        return $this->twitter;
    }

    public function setTwitter($twitter)
    {
        if(strlen($twitter) > 150)
        throw new Exception('twitter muito grande, máximo de caracteres permitido é 150');

        $this->twitter = $twitter;
        return $this;
    }

    public function getMobileBanner()
    {
        return $this->mobileBanner;
    }

    public function setMobileBanner($mobileBanner)
    {
        if(strlen($mobileBanner) > 150)
        throw new Exception('mobileBanner muito grande, máximo de caracteres permitido é 150');

        $this->mobileBanner = $mobileBanner;
        return $this;
    }

    public function getTabletBanner()
    {
        return $this->tabletBanner;
    }

    public function setTabletBanner($tabletBanner)
    {
        if(strlen($tabletBanner) > 150)
        throw new Exception('tabletBanner muito grande, máximo de caracteres permitido é 150');

        $this->tabletBanner = $tabletBanner;
        return $this;
    }

    public function getDesktopBanner()
    {
        return $this->desktopBanner;
    }

    public function setDesktopBanner($desktopBanner)
    {
        if(strlen($desktopBanner) > 150)
        throw new Exception('desktopBanner muito grande, máximo de caracteres permitido é 150');

        $this->desktopBanner = $desktopBanner;
        return $this;
    }

    public function getTitleSite()
    {
        return $this->titleSite;
    }

    public function setTitleSite($titleSite)
    {
        if(strlen($titleSite) > 150)
        throw new Exception('titleSite muito grande, máximo de caracteres permitido é 150');

        $this->titleSite = $titleSite;
        return $this;
    }

    public function getSubtitleSite()
    {
        return $this->subtitleSite;
    }

    public function setSubtitleSite($subtitleSite)
    {
        if(strlen($subtitleSite) > 150)
        throw new Exception('subtitleSite muito grande, máximo de caracteres permitido é 150');

        $this->subtitleSite = $subtitleSite;
        return $this;
    }

    public function getContentSite()
    {
        return $this->contentSite;
    }

    public function setContentSite($contentSite)
    {
        $this->contentSite = $contentSite;
        return $this;
    }

    public function getVideoSite()
    {
        return $this->videoSite;
    }

    public function setVideoSite($videoSite)
    {
        if(strlen($videoSite) > 150)
        throw new Exception('videoSite muito grande, máximo de caracteres permitido é 150');

        $this->videoSite = $videoSite;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }
}