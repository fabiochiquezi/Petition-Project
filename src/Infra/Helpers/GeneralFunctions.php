<?php

namespace FabioChiquezi\PetitionData\Infra\Helpers;

class GeneralFunctions{
    public static function replaceSpecialCharacters(string $val){
        return strtolower(preg_replace('/[^a-z0-9]/i', '_', $val));
    }
}