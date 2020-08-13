<?php

namespace FabioChiquezi\PetitionData\Domain\CustomForm;

use Exception;
use FabioChiquezi\PetitionData\Infra\Helpers\GeneralFunctions;

class CustomForm{
    private $id;
    private $name;
    private $type;
    private $placeholder;
    private $required;

    public function __construct($name){
        $this->setName($name);
        $this->setRequired();
        $this->setPlaceholder();
        $this->setType();
    }

    public function getRequired()
    {
        return $this->required;
    }

    public function setRequired($required = 0)
    {
        if(
            $required !== 1 && 
            $required !== 0 || 
            gettype($required) !== 'integer'
        )
            throw new Exception('O valor do atributo "required" deve ser 1 ou 0');

        $this->required = $required;

        return $this;
    }

    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    public function setPlaceholder($placeholder = '')
    {
        if(strlen($placeholder) > 100)
            throw new Exception("O atributo 'placeholder' não deve ter mais que 100 caracteres");

        $this->placeholder = $placeholder;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type = 0)
    {
        if(gettype($type) !== 'integer')
            throw new Exception("O atributo 'type' deve ser do tipo integer");

        $this->type = $type;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if($name === '')
            throw new Exception("O atributo 'nome' não pode ser nulo");

        if(strlen($name) > 50)
            throw new Exception("O atributo 'nome' não deve ter mais que 50 caracteres");

        $this->name = GeneralFunctions::replaceSpecialCharacters($name);

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }
}