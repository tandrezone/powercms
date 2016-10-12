<?php

//autoload of the composer
if(file_exists('packages/server/autoload.php')){
  include_once('packages/server/autoload.php');
} else {
  echo "composer not installed run composer install";
  exit();
}




require 'classes/ctrlpackage.class.php';
require 'classes/router.class.php';

$isDevMode = true;
$config =  Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(array("app/model"), $isDevMode);
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' =>'datasource/database/sqlite/db.sqlite',
);
$entityManager= Doctrine\ORM\EntityManager::create($conn, $config);

require 'classes/blade.class.php';
require 'classes/controller.class.php';

$router = new router();

require 'app/routing.php';

$router->init();
