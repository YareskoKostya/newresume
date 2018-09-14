<?php

class Model {

    public $pdo;

    public function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=resume_db', 'root', '');

        if (!$this->pdo) {
            throw new Exception('Could not connect to DB ');
        }
    }

    public function get_data() {
        
    }

}
