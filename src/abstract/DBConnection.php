<?php
namespace App\abstract;


class DBConnection extends Database
{
    public function setConnection($db_name)
    {
        $this->connection_active = true;
        $this->connection = "Connection handler to Database \n";
    }

    public function getConnection()
    {
        if ($this->connection_active) {
            return $this->connection;
        }
    }
}