<?php
namespace Service;
use PDO;
class Database
{
    private static ?Database $instance;
    private string $host = 'localhost', $db = 'istichara', $username = 'root', $password = '';
    private PDO $connection;

    private function __construct()
    {
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);

    }

    public static function createInstance(): Database
    {
        if (!isset(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance;
        
    }
    public function getConnexion() :PDO{
        return $this->connection;
    }
}
$db = Database::createInstance()->getConnexion();
