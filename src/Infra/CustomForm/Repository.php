<?php

namespace FabioChiquezi\PetitionData\Infra\CustomForm;

use FabioChiquezi\PetitionData\Domain\CustomForm\CustomForm;
use FabioChiquezi\PetitionData\Domain\CustomForm\RepositoryInterface;

class Repository implements RepositoryInterface{
    private $connect;

    public function __construct($connect){
        $this->connect = $connect;
    }

    public function getAll(): array
    {
    
        return [];
    }

    public function add($data){
        $customForm = new CustomForm($data['name']);
        
        $customForm->setRequired( (int) $data['required'] ?? 0 );
        $customForm->setPlaceholder( $data['placeholder'] ?? '' );
        $customForm->setType( (int) $data['type'] ?? 0 );

        $this->connect->persist( $customForm );
        $this->connect->flush();
    }

    public function delete(){
        $class = CustomForm::class;

        $qb = $this->connect
        ->createQueryBuilder()
        ->delete("$class", 'c')
        ->where('c.id > 0')
        ->getQuery();

        return $qb->getResult();
    }
}