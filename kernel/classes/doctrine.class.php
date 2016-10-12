<?php
$isDevMode = true;
$config =  Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(array("app/model"), $isDevMode);
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' =>'datasource/database/sqlite/db.sqlite',
);
$entityManager= Doctrine\ORM\EntityManager::create($conn, $config);
