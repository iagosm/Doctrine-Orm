<?php

use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = new \Alura\Doctrine\Entity\Student($argv[1]);

$entityManager->persist($student);
$entityManager->flush();