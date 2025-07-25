<?php

use Cabico\Gs\Models\StudentModel;

require 'vendor/autoload.php';

$students = new StudentModel;

$students->id= 69;
$students->name="bebong";
$students->course="IT";
$students->year_level=1;
$students->section="D";

$students->create();
//$student->delete();
//$student->update();
//$student->read();




?>