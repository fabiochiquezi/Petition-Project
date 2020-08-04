<?php
// Configuration for Doctrine

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use FabioChiquezi\PetitionData\Infra\Doctrine\EntityManagerFactory;

// replace with file to your own project bootstrap
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/env.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);