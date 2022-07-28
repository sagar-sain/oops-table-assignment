<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Connection
{
    public $host = 'localhost';
    public $username = 'admin';
    public $password = 'admin';
    public $dbname = 'grocery';

    function makeConnection()
    {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            return $conn->connect_error;
        } else {
            return $conn;
        }
    }

}

?>