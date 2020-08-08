<?php

namespace FabioChiquezi\PetitionData\Tests\Unit\Domain\InformationGeralSite;

use Exception;
use FabioChiquezi\PetitionData\Domain\InformationGeneralSite\InformationGeneralSite;
use PHPUnit\Framework\TestCase;

class InformationGeneralSiteTest extends TestCase{
    public function testSetTitleSeo(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('titleSeo muito grande, máximo de caracteres permitido é 150');
        
        $infGenSite = new InformationGeneralSite();
        $infGenSite->setTitleSeo('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
    }

    public function testSetImageSeo(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('imageSeo muito grande, máximo de caracteres permitido é 150');
        
        $infGenSite = new InformationGeneralSite();
        $infGenSite->setImageSeo('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
    }

    public function testSetFacebook(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('facebook muito grande, máximo de caracteres permitido é 150');
        
        $infGenSite = new InformationGeneralSite();
        $infGenSite->setFacebook('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
    }

    public function testSetTwitter(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('twitter muito grande, máximo de caracteres permitido é 150');
        
        $infGenSite = new InformationGeneralSite();
        $infGenSite->setTwitter('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
    }

    public function testSetMobileBanner(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('mobileBanner muito grande, máximo de caracteres permitido é 150');
        
        $infGenSite = new InformationGeneralSite();
        $infGenSite->setMobileBanner('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
    }

    public function testSetTabletBanner(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('tabletBanner muito grande, máximo de caracteres permitido é 150');
        
        $infGenSite = new InformationGeneralSite();
        $infGenSite->setTabletBanner('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
    }

    public function testSetDesktopBanner(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('desktopBanner muito grande, máximo de caracteres permitido é 150');
        
        $infGenSite = new InformationGeneralSite();
        $infGenSite->setDesktopBanner('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
    }

    public function testSetTitleSite(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('titleSite muito grande, máximo de caracteres permitido é 150');
        
        $infGenSite = new InformationGeneralSite();
        $infGenSite->setTitleSite('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
    }

    public function testSetSubtitleSite(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('subtitleSite muito grande, máximo de caracteres permitido é 150');
        
        $infGenSite = new InformationGeneralSite();
        $infGenSite->setSubtitleSite('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
    }

    public function testSetVideoSite(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('videoSite muito grande, máximo de caracteres permitido é 150');
        
        $infGenSite = new InformationGeneralSite();
        $infGenSite->setVideoSite('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
    }
}