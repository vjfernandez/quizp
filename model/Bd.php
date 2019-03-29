<?php

namespace model;

class Bd {

    private $servername;
    private $username;
    private $password;
    private $conn;
    private static $instance;

    // Create connection
    public function __construct() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->conn = new \mysqli($this->servername, $this->username, $this->password, "quiz");
        echo "bd initialized";
    }

    public static function getInstance() {
        if (!isset(Bd::$instance)) {
            Bd::$instance = new Bd();
        }
        echo "bd getInstance";
        return Bd::$instance;
    }

    public function query($sql) {
        $result = $this->conn->query($sql)->fetch_all(MYSQLI_BOTH);
        return $result;
    }

}

echo "bd included";
