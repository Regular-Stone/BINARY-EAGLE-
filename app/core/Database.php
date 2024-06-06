<?php
class Database {
    private static ?Database $instance = null;
    private PDO $connexion;

    private function __construct(string $host, string $dbname, string $user, string $password) {
        try {
            $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // echo $e->getMessage();
        }
    }

    public static function getInstance(string $host, string $dbname, string $user, string $password): Database {
        if (!self::$instance) {
            self::$instance = new Database($host, $dbname, $user, $password);
        }
        return self::$instance;
    }

    public function getConnexion(): PDO {
        return $this->connexion;
    }
}