<?php

namespace FabioChiquezi\PetitionData\Tests\Domain\InformationGeralSite;

use FabioChiquezi\PetitionData\Domain\WhatsApp;
use PHPUnit\Framework\TestCase;

class WhatsAppTest extends TestCase{

    public function testNumeroWhatsAppNaoTemLetras(){
        $class = new WhatsApp();
        $class->setNumber('5519abc');   

        self::assertEquals('5519abc', $class->getNumber());
    }

}