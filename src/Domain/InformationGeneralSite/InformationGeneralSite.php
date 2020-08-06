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
            throw new InvalidArguments('titleSeo muito grande, máximo de caracteres permitido é 150');
        
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
        if(strlen($imageSeo) > 50)
            throw new InvalidArguments('imageSeo muito grande, máximo de caracteres permitido é 50');

        $this->imageSeo = $imageSeo;
        return $this;
    }

    public function getWhatsapp()
    {
        return $this->whatsapp;
    }

    public function setWhatsapp($whatsapp)
    {
        if(strlen($whatsapp) > 50)
        throw new InvalidArguments('whatsapp muito grande, máximo de caracteres permitido é 50');

        $this->whatsapp = $whatsapp;
        return $this;
    }

    public function getFacebook()
    {
        return $this->facebook;
    }

    public function setFacebook($facebook)
    {
        if(strlen($facebook) > 50)
        throw new InvalidArguments('facebook muito grande, máximo de caracteres permitido é 50');

        $this->facebook = $facebook;
        return $this;
    }

    public function getTwitter()
    {
        return $this->twitter;
    }

    public function setTwitter($twitter)
    {
        if(strlen($twitter) > 50)
        throw new InvalidArguments('twitter muito grande, máximo de caracteres permitido é 50');

        $this->twitter = $twitter;
        return $this;
    }

    public function getMobileBanner()
    {
        return $this->mobileBanner;
    }

    public function setMobileBanner($mobileBanner)
    {
        if(strlen($mobileBanner) > 50)
        throw new InvalidArguments('mobileBanner muito grande, máximo de caracteres permitido é 50');

        $this->mobileBanner = $mobileBanner;
        return $this;
    }

    public function getTabletBanner()
    {
        return $this->tabletBanner;
    }

    public function setTabletBanner($tabletBanner)
    {
        if(strlen($tabletBanner) > 50)
        throw new InvalidArguments('tabletBanner muito grande, máximo de caracteres permitido é 50');

        $this->tabletBanner = $tabletBanner;
        return $this;
    }

    public function getDesktopBanner()
    {
        return $this->desktopBanner;
    }

    public function setDesktopBanner($desktopBanner)
    {
        if(strlen($desktopBanner) > 50)
        throw new InvalidArguments('desktopBanner muito grande, máximo de caracteres permitido é 50');

        $this->desktopBanner = $desktopBanner;
        return $this;
    }

    public function getTitleSite()
    {
        return $this->titleSite;
    }

    public function setTitleSite($titleSite)
    {
        if(strlen($titleSite) > 50)
        throw new InvalidArguments('titleSite muito grande, máximo de caracteres permitido é 50');

        $this->titleSite = $titleSite;
        return $this;
    }

    public function getSubtitleSite()
    {
        return $this->subtitleSite;
    }

    public function setSubtitleSite($subtitleSite)
    {
        if(strlen($subtitleSite) > 50)
        throw new InvalidArguments('subtitleSite muito grande, máximo de caracteres permitido é 50');

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
        if(strlen($videoSite) > 50)
        throw new InvalidArguments('videoSite muito grande, máximo de caracteres permitido é 50');

        $this->videoSite = $videoSite;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }
}