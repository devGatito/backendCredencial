<?php

namespace App\Config;

use PDO;

class Database {
    private $host = 'localhost';
    private $db = 'credential_system';
    private $user = 'root';
    private $pass = '';
    private $charset = 'utf8mb4';

    public function connect() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        try {
            $pdo = new PDO($dsn, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $e) {
            throw new \Exception("Connection failed: " . $e->getMessage());
        }
    }
}
