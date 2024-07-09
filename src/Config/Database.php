<?php
namespace App\Config;

use Dotenv\Dotenv;
use PDO;
use PDOException;

class Database
{
    private $host;
    private $user;
    private $pass;
    private $database_name;
    public $conn;

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . "/../../");
        $dotenv->load();

        $this->host = $_ENV["HOST"];
        $this->user = $_ENV["USER"];
        $this->pass = $_ENV["PASS"];
        $this->database_name = $_ENV["DATABASE"];
    }

    public function connect()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database_name", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $this->conn;
    }
}

