<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

$student = $entityManager->find(Student::class, $argv[1]);
// $student = $studentRepository->find($argv[1]);
$student->name = $argv[2];

$entityManager->persist($student);
$entityManager->flush();