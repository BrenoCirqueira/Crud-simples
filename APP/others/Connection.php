<?php
    class Connection {
        private string $server = "127.0.0.1";
        private string $user = "daxcode";
        private string $db = "crud";
        private string $password = ""; 

        public function __construct() {}

        public function createConn(): PDO {
            $conn = new PDO("mysql:host=" . $this->server . ";dbname=" . $this->db,
                $this->user,
                $this->password
            );
            return $coon;
        }
    }
?>