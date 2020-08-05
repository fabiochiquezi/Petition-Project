<?php

namespace FabioChiquezi\PetitionData\Domain\InformationGeneralSite;

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
        $this->facebook = $facebook;

        return $this;
    }

    public function getTwitter()
    {
        return $this->twitter;
    }

    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    public function getMobileBanner()
    {
        return $this->mobileBanner;
    }

    public function setMobileBanner($mobileBanner)
    {
        $this->mobileBanner = $mobileBanner;

        return $this;
    }

    public function getTabletBanner()
    {
        return $this->tabletBanner;
    }

    public function setTabletBanner($tabletBanner)
    {
        $this->tabletBanner = $tabletBanner;

        return $this;
    }

    public function getDesktopBanner()
    {
        return $this->desktopBanner;
    }

    public function setDesktopBanner($desktopBanner)
    {
        $this->desktopBanner = $desktopBanner;

        return $this;
    }

    public function getTitleSite()
    {
        return $this->titleSite;
    }

    public function setTitleSite($titleSite)
    {
        $this->titleSite = $titleSite;

        return $this;
    }

    public function getSubtitleSite()
    {
        return $this->subtitleSite;
    }

    public function setSubtitleSite($subtitleSite)
    {
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
        $this->videoSite = $videoSite;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }
}