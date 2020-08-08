<?php

namespace FabioChiquezi\PetitionData\Domain\InformationGeneralSite;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

interface RepositoryInterface{
    public function getAll(): array;
    public function addData($data);
    public function deleteAll($allItens);
}