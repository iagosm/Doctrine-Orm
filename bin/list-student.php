<?php

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

/** @var Student[] $studentList */
// $studentList = $studentRepository->findAll();
// foreach($studentList as $student) {
  
//   echo "Id:  $student->id\n Nome: $student->name \n\n"; 
// }

// $student = $studentRepository->findBy([
//     'name' => 'Iago Sousa'
// ]);
$student = $studentRepository->findAll();
var_dump($student);
// echo $studentRepository->count();