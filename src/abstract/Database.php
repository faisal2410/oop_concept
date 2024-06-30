<?php
namespace App\abstract;
abstract class Database
{
    public $connection;
    public $connection_active = false;

    abstract public function setConnection($db_name);
    abstract public function getConnection();
}