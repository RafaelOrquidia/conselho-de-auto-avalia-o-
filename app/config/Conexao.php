<?php 
namespace app\config;

use PDO;
use PDOException;

class Conexao {
    private $host = 'localhost';
    private $db = 'cnaq';
    private $user = 'root';
    private $pass = '';
    private $conn;

    public function __construct() {
        try {
            $this->conn = new \PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function getConn() {
        return $this->conn;
    }
}
?>