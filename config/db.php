<?php
    class db{
        private $host="localhost";
        private $dbname="login";
        private $user="root";
        private $password="8629";

        public function conexion(){
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                
                return $PDO;
                
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }
   /* $obj = new db();
    print_r($obj->conexion());*/

?>