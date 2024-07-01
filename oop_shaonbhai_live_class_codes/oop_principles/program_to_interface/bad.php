<?php

class MySQLDatabase {
    public function connect() {
        // MySQL-specific connection logic
    }

    public function query($sql) {
        // MySQL-specific query logic
    }
}

class UserRepository {
    private $database;

    public function __construct() {
        $this->database = new MySQLDatabase();
    }

    public function getUser($id) {
        $result = $this->database->query("SELECT * FROM users WHERE id = $id");
        // Process and return user data
    }
}

// Usage
$userRepo = new UserRepository();
$user = $userRepo->getUser(1);