<?php

namespace App\Database;

use PDO;

class DatabaseManager
{
    protected $pdo;

    public function __construct()
    {
        $config = include 'config/database.php';
        $this->pdo = new PDO($config['dsn'], $config['username'], $config['password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }

    public function getPDO()
    {
        return $this->pdo;
    }
}

