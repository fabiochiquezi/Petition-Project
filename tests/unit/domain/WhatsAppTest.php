<?php

namespace FabioChiquezi\PetitionData\Tests\Unit\Domain\InformationGeralSite;

use Exception;
use FabioChiquezi\PetitionData\Domain\WhatsApp;
use PHPUnit\Framework\TestCase;

class WhatsAppTest extends TestCase{

    public function testNumeroWhatsAppNaoTemLetras(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Por favor envie somente números para o campo do WhatsApp');
        $whatsapp = new WhatsApp('5519abc');
    }

    public function testNumeroWhatsAppNaoEMaiorQue14(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Número do WhatsApp inválido, deve conter entre 13 e 14 caracteres');
        $whatsapp = new WhatsApp('551998312703500');
    }

    public function testNumeroWhatsAppMenorQue13(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Número do WhatsApp inválido, deve conter entre 13 e 14 caracteres');
        $whatsapp = new WhatsApp('551998312703');
    }

    public function testSetNumeroWhatsApp(){
        $whatsapp = new WhatsApp('5519983127035');
        self::assertEquals('5519983127035', $whatsapp->getNumber());
    }

}