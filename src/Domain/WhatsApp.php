<?php

namespace FabioChiquezi\PetitionData\Domain;

use Exception;

class WhatsApp{
    private $number;

    public function __construct($number){
        $this->setNumber($number);
        return $this;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        if( !is_numeric($number) )
            throw new Exception("Por favor envie somente números para o campo do WhatsApp");

        if( strlen($number) > 14 || strlen($number) < 13 ) 
            throw new Exception("Número do WhatsApp inválido, deve conter entre 13 e 14 caracteres");
        
        $this->number = $number;
        return $this;
    }
}

