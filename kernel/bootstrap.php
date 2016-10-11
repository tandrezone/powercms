<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
//autoload of the composer
require 'packages/autoload.php';
require 'classes/ctrlpackage.class.php';
require 'classes/router.class.php';

$isDevMode = true;
$config =  Setup::createAnnotationMetadataConfiguration(array("app/model"), $isDevMode);
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' =>'datasource/database/sqlite/db.sqlite',
);
$entityManager= EntityManager::create($conn, $config);

require 'classes/blade.class.php';
require 'classes/controller.class.php';

$router = new router();

require 'app/routing.php';

$router->init();
