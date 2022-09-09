<?php
    class Dbh {
    // Atributos
        private $host = "Localhost";
        private $user = "root";
        private $pw = "";
        private $dbName = "biblioteca";
    //Métodos
        public function connect(){
            $dsm = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
            $pdo = new PDO ($dsm, $this->user,$this->pw);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo 'Conectado a '.$pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS);
            return $pdo;
        }
    }


    