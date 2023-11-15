<?php
    require_once "./database.php";
    $conn = connect();
    $delete_id = $_GET['id']; 
    $query = "DELETE FROM list WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam('id', $delete_id);
    $result = $stmt->execute();
    
    if($result){
        header("Location:index.php"); 
    }
    