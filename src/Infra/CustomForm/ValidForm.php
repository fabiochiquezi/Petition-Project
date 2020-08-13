<?php

namespace FabioChiquezi\PetitionData\Infra\CustomForm;

class ValidForm{
    private $erro = [];

    public function __construct($data){ 
        if( empty($data['name']) ){
            $this->erro['name'] = 'O atributo nome é obrigatório';
        }else{
            $this->validName($data['name']); 
        }

        if($data['placeholder']) $this->validPlaceholder($data['placeholder']);
        if($data['type']) $this->validType($data['type']);
        if($data['required']) $this->validRequired($data['required']);
    }

    public function getErros(){
        return $this->erro;
    }

    public function valid(){
        if( count($this->erro) === 0) return true;
        return false;
    }

    private function validName($name){
        if(empty($name)) 
            $this->erro['name'] = 'O atributo "nome" nome está vázio';
        
        if(strlen($name) > 50) 
            $this->erro['name'] = 'O atributo "nome" deve ter no máximo 50 caracteres';
    } 

    private function validPlaceholder($placeholder){
        if(strlen($placeholder) > 100) 
            $this->erro['placeholder'] = 'O atributo "placeholder" deve ter no máximo 100 caracteres';
    } 

    private function validType($type){
        if(!filter_var($type, FILTER_VALIDATE_INT))
            $this->erro['type'] = "O atributo 'type' deve ser do tipo integer";
    } 

    private function validRequired($required){
        if( filter_var($required, FILTER_VALIDATE_INT) ){
            $required = (int) $required;
            
            if(
                $required !== 1 && 
                $required !== 0
            )
            $this->erro['required'] = 'O valor do atributo "required" deve ser 1 ou 0';
        
        }
        else{
            $this->erro['required'] = "O atributo 'required' deve ser do tipo integer";
        }
    } 
}