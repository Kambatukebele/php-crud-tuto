<?php
    function connect(){
        $serverName = "localhost";
        $userName = "root"; 
        $password = ""; 
        $dbName = "php_crud-tuto";
        $string = "mysql:host=$serverName;dbname=$dbName";
       try {
        $conn = new PDO($string, $userName, $password);
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($conn){
            echo "connected successfully!";
            return $conn; 
        }
       } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
       } 
    }