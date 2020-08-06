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
            throw new Exception("Por favor envie somenten números para o campo do WhatsApp");

        if( strlen($number) > 14 ) 
            throw new Exception("Número do WhatsApp inválido, o número não pode ser maior que 14 digitos");
        
        $this->number = $number;
        return $this;
    }
}

