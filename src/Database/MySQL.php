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

    public function getPosts()
    {
        $db = MySQL::getInstance()->getConnection();

        $sql = "SELECT * FROM posts";

        $result = mysqli_query($db, $sql);

        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $data;
    }

    public function createPost($request)
    {
        $db = MySQL::getInstance()->getConnection();

        $title = addslashes($request['title']);
        $description = addslashes($request['description']);

        $sql = "INSERT INTO posts (title, description) VALUES ('$title', '$description')";

        if (!mysqli_query($db, $sql)) {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }

        return;
    }

    public function deletePost($request)
    {
        $db = MySQL::getInstance()->getConnection();

        $id = $request['id'];
        
        $sql = "DELETE FROM posts WHERE id=$id";

        if (!mysqli_query($db, $sql)) {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }

        return;
    }
}
