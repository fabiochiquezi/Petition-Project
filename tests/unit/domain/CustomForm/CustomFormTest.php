<?php

namespace FabioChiquezi\PetitionData\Tests\Unit\Domain\CustomFormTest;

use Exception;
use FabioChiquezi\PetitionData\Domain\CustomForm\CustomForm;
use PHPUnit\Framework\TestCase;

class CustomFormTest extends TestCase{

    public function testCreateBasicCustomForm(){
        $customForm = new CustomForm('nome');

        $this->assertEquals(0, $customForm->getRequired());
        $this->assertEquals('', $customForm->getPlaceholder());
        $this->assertEquals(0, $customForm->getType());
        $this->assertEquals('nome', $customForm->getName());
    }

    public function testSetRequiredException(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('O valor do atributo "required" deve ser 1 ou 0');

        $customForm = new CustomForm('a');
        $customForm->setRequired('a');
    }

    public function testSetTypeException(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("O atributo 'type' deve ser do tipo integer");
    
        $customForm = new CustomForm('a');
        $customForm->setType('a');
    }

    public function testSetPlaceholder(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("O atributo 'placeholder' não deve ter mais que 100 caracteres");

        $customForm = new customForm('nome');
        $customForm->setPlaceholder('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
    }

    public function testSetNameException(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("O atributo 'nome' não pode ser nulo");

        $customForm = new customForm('');
    }

    public function testSetNameException2(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("O atributo 'nome' não deve ter mais que 50 caracteres");

        $customForm = new customForm('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
    }

    public function testSetNameEspecial(){
        $customForm = new CustomForm('Fábio Teste');
        $this->assertEquals('f__bio_teste', $customForm->getName());
    }

    public function testCreateSucessfull(){
        $customForm = new CustomForm('Fábio');
        $customForm->setRequired(0);
        $customForm->setPlaceholder("descrição do input");
        $customForm->setType(0);

        $this->assertEquals(0, $customForm->getRequired());
        $this->assertEquals('descrição do input', $customForm->getPlaceholder());
        $this->assertEquals(0, $customForm->getType());
        $this->assertEquals('f__bio', $customForm->getName());
    }
}