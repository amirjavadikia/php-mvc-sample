<?php


class Db {
    public $pdo = null;
    private static $connection;

    private function __construct()
    {
        $servername = "YOUR SERVER NAME";
        $username = "root";
        $password = "";
        $dbname = "YOUR DATABASE NAME";
        try {
            $this->pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function getInstance(){
        if (self::$connection == null){
            self::$connection = new Db();
        }
        return self::$connection;
    }
}
