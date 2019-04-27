<?php
CLASS Database {
    PUBLIC FUNCTION __CONSTRUCT(){
        $this->db = NEW PDO("mysql:host=localhost;dbname=contoh", "root", "");
    }
}
?>