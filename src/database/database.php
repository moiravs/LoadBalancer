<?php
class Database { 
    private static $instance = null;
    private $conn;

    private function __construct() {
        $servername = "db";
        $dbname = "myDBPDO";
        $username = "root";
        $password = "password";
        $sql = null;
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $initSqlRelativePath = dirname(__DIR__) . '/database/init.sql';
            $sql = file_get_contents($initSqlRelativePath);

            // use exec() because no results are returned
            $this->conn->exec($sql);
        } catch(PDOException $e) {
        }

        return $this->conn;
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection() {
        if ($this->conn) {
            return $this->conn;
        }

        elseif ($this->conn === null) {
            throw new Exception('Database connection failed');
        }
    }
}
?>