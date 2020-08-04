<?php

namespace FabioChiquezi\PetitionData\Infra\Doctrine;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class EntityManagerFactory{

    public function getEntityManager(): EntityManagerInterface
    {
        $paths = array(__DIR__ . '/../../');
        $isDevMode = getenv('IS_DEV_MODE');

        // the connection configuration
        $dbParams = array(
            'user'     =>  getenv('ABAIXO_ASSINADO_DB_USER'),
            'password' =>  getenv('ABAIXO_ASSINADO_DB_PASSWORD'),
            'dbname'   =>  getenv('ABAIXO_ASSINADO_DB_NAME'),
            'host'     =>  getenv('ABAIXO_ASSINADO_DB_HOST') . ':' . getenv('ABAIXO_ASSINADO_DB_PORT'),
            'driver'   =>  getenv('ABAIXO_ASSINADO_DB_DRIVER')
        );

        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
        return EntityManager::create($dbParams, $config);
    }

}