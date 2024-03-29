<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = new \Alura\Doctrine\Entity\Student($argv[1]);
$student->addPhone(new Phone('(21)92312-1233'));
$student->addPhone(new Phone('(21)2312-1233'));


$entityManager->persist($student);
$entityManager->flush();