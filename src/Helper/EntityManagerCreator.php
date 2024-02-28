<?php

namespace Alura\Doctrine\Helper;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator
{
  public static function createEntityManager()
  {
    // Create a simple "default" Doctrine ORM configuration for Attributes
    $config = ORMSetup::createAttributeMetadataConfiguration(
      paths: [__DIR__ . "/.."],
      isDevMode: true,
    );
    // or if you prefer XML
    // $config = ORMSetup::createXMLMetadataConfiguration(
    //    paths: array(__DIR__."/config/xml"),
    //    isDevMode: true,
    //);

    // configuring the database connection
    $connection = DriverManager::getConnection([
      'driver' => 'pdo_sqlite',
      'path' => __DIR__ . '/../../db.sqlite',
    ], $config);

    // obtaining the entity manager
    return new EntityManager($connection, $config);
  }
}
