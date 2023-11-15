<?php
    require_once "./database.php";
    $conn = connect();

    //Selectiong
    $id = $_GET['id'];
    
    $query = "SELECT * FROM list WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam('id', $id);
    $stmt->execute(); 
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
   
    //Updating
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $company = $_POST['company'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        
        $query = "UPDATE list SET company = :company, email = :email, phone = :phone, country = :country WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam('id', $id);
        $stmt->bindParam('company', $company);
        $stmt->bindParam('email', $email);
        $stmt->bindParam('phone', $phone);
        $stmt->bindParam('country', $country);
        $result = $stmt->execute();

        if($result){
            header('Location: index.php');
        }

    }
