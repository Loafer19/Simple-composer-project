<?php

namespace Database;

use Database\MySQL;

class TablesConfig
{
    public function create()
    {
        $sql = "CREATE TABLE users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(30) NOT NULL,
            surname VARCHAR(30) NOT NULL,
            description MEDIUMTEXT NOT NULL,
            date TIMESTAMP NOT NULL
        )";

        self::execute($sql, 'users');

        $sql = "CREATE TABLE posts (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            user_id INT(6) UNSIGNED NOT NULL,
            title VARCHAR(30) NOT NULL,
            description MEDIUMTEXT NOT NULL,
            date TIMESTAMP NOT NULL,

            FOREIGN KEY (user_id) REFERENCES users(id)
            ON DELETE CASCADE
        )";

        self::execute($sql, 'posts');
    }

    public function execute($sql, $str)
    {
        $conn = MySQL::getInstance()->getConnection();

        if ($conn->query($sql)) {
            echo "<h2>Table $str created successfully!</h2>";
        } else {
            echo "Error creating table: " . $conn->error;
        }
    }
}
