<?php

use Alura\Doctrine\Entity\Course;
use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

/** @var Student[] $studentList */
$studentList = $studentRepository->findAll();

foreach($studentList as $student) {
  echo "Id:  $student->id\n Nome: $student->name"; 
  

  if($student->phones()->count() > 0) {
    echo PHP_EOL;
    echo "Telefones:\n";
    echo implode(', ', 
    $student->phones()
    ->map(fn (Phone $phone) => $phone->number)->toArray());
  }

  if($student->courses()->count() > 0) {
    echo PHP_EOL;
    echo "Cursos:\n";
    echo implode(', ', 
    $student->courses()
    ->map(fn (Course $courses) => $courses->nome)->toArray());
  }
  echo PHP_EOL . "\n";
}

// $student = $studentRepository->findAll();
echo $studentRepository->count([]) . PHP_EOL;