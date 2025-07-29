<?php

use Cabico\Gs\Models\StudentModel;

require 'vendor/autoload.php';

$students = new StudentModel;

$students->id=123456;
$students->name="Cabico";
$students->course="IT";
$students->year_level=1;
$students->section="D";

//$students->create();
//$students->delete(69);
//$students->update();
//$students->read();




?>