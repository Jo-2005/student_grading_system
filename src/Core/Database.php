<?php

namespace Cabico\Gs\Core;
use Cabico\StudentModel\Core\Crud;
use mysqli;

class Database {

    protected $conn;

    public function __construct()
    {
        $host = 'localhost';
        $db = 'oop';
        $user = 'root';
        $pass = ' ';
        // mysqli connection
        $this->conn = new mysqli($host, $user, $pass, $db);
        if ($this->conn->connect_error) {
            dis("Connection failed: " . $this->conn->connect_error);
        }
    }
}