<?php

    class Test extends Dbh {

        public function showData(){
            $query = "SELECT * FROM usuarios";
            $statement = $this->connect()->query($query);
            while ($row = $statement->fetch()){
                echo $row['nombre']. '<br>';
            }
        }

        public function insertData($nombre,$apellido,$contraseña,$id_rol){
            $query = "INSERT INTO usuarios(nombre,apellido,contraseña,id_rol) VALUES (?,?,?,?)";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([$nombre,$apellido,$contraseña,$id_rol]);
        }
    }