<?php

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$student = $entityManager->find(Student::class, $argv[1]);
// $studentRepository = $entityManager->getRepository(Student::class);

$entityManager->remove($student);
$entityManager->flush();