<?php

namespace Database;

class MySQL
{
    private static $instance = null;
    private $conn;

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'test';

    private function __construct()
    {
        $this->conn = new \mysqli($this->host, $this->user, $this->pass, $this->dbname);
	
	    $this->conn->set_charset('utf8');
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new MySQL();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
