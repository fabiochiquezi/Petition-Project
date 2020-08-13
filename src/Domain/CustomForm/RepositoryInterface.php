<?php

namespace FabioChiquezi\PetitionData\Domain\CustomForm;

interface RepositoryInterface{
    public function getAll(): array;
    public function add($data);
    public function delete();
}