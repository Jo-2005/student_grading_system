<?php

 namespace Cabico\Gs\Models;
 
use Cabico\Gs\Core\Database;
use Cabico\Gs\Core\Crud;

class StudentModel extends Database implements Crud 
{
    public int $id;
    public string $name;
    public string $course;
    public int $year_level;
    public string $section;
    public function __construct() {
        parent:: __construct();
        $this->id = 0;
        $this->name = " ";
        $this->course = " ";
        $this->year_level = " ";
        $this->section = " ";
    }
    public function create() {
        try {
            $sql = "INSERT INTO `students` (name, course, year_level, section) VALUES ('$this->name','$this->course','$this->year_level','$this->section')";
            $this->conn->prepare($sql);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    public function read(){
        try {
            $sql = "SELECT * FROM students";
            $results = $this->conn->query($sql);
            return $results->fetch_all(MYSQLI_ASSOC);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    public function update() {
        try {
            $sql = "UPDATE students SET name = ?, course = ?, year_level = ?, section = ? WHERE id = ?";
            $this->conn->prepare($sql);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    public function delete() {
        try {
            $sql = "DELETE FROM students WHERE id = ?";
            $this->conn->prepare($sql);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}