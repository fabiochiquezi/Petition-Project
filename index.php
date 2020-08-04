<?php

use Slim\Factory\AppFactory;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/env.php';
require_once __DIR__ . '/config/slimConfiguration.php';

$app = AppFactory::create();

require_once __DIR__ . '/routes/route.php';

$app->run();

