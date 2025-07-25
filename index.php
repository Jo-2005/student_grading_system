<?php

use Cabico\Gs\Models\StudentModel;
use Cabico\Gs\Core\Crud;

require 'vendor/autoload.php';

$student = new StudentModel;

$this->id = 9;
$this->name = "Shaira";
$this->course = "BSIT";
$this->year_level = 0;
$this->section = " ";

// $listofStudent = $Student->read();

// print_r($lisofStudents);