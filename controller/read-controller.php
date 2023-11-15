<?php
    require_once "./database.php";
    $conn = connect();

    $query = "SELECT * FROM list ORDER BY id DESC";
    $stmt = $conn->prepare($query);
    $stmt->execute(); 
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    if(is_array($result) && count($result) > 0){
        return $result; 
    }

