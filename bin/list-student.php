<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

/** @var Student[] $studentList */
$studentList = $studentRepository->findAll();

foreach($studentList as $student) {
  echo "Id:  $student->id\n Nome: $student->name \n\n"; 
  echo "Telefones:\n";

  echo implode(', ', 
  $student->phones()
  ->map(fn (Phone $phone) => $phone->number)->toArray());
  echo PHP_EOL . "\n";
  
}

// $student = $studentRepository->findAll();
echo $studentRepository->count([]) . PHP_EOL;