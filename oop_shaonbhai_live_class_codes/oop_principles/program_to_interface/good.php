<?php

interface DatabaseInterface {
    public function connect();
    public function query($sql);
}

class MySQLDatabase implements DatabaseInterface {
    public function connect() {
        // MySQL-specific connection logic
    }

    public function query($sql) {
        // MySQL-specific query logic
    }
}

class PostgreSQLDatabase implements DatabaseInterface {
    public function connect() {
        // PostgreSQL-specific connection logic
    }

    public function query($sql) {
        // PostgreSQL-specific query logic
    }
}

class UserRepository {
    private $database;

    public function __construct(DatabaseInterface $database) {
        $this->database = $database;
    }

    public function getUser($id) {
        $result = $this->database->query("SELECT * FROM users WHERE id = $id");
        // Process and return user data
    }
}

// Usage
$mysqlDb = new MySQLDatabase();
$userRepo = new UserRepository($mysqlDb);
$user = $userRepo->getUser(1);

// If we want to switch to PostgreSQL, we can do so without changing UserRepository
$postgresDb = new PostgreSQLDatabase();
$userRepo = new UserRepository($postgresDb);
$user = $userRepo->getUser(1);