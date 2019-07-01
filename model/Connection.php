<?php 

    class Connection{
        private $conn = '';

        public function __construct(){
            $this->conn = new PDO('mysql:host=localhost;dbname=corujaogames;charset=utf8', 'ronaldo', 'ronaldo');
        }
        
        public function getConn()
        {
            return $this->conn;
        }    
        
    }

?>