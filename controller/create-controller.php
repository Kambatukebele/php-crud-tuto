<?php
    require_once "./database.php";
    $conn = connect();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $company = $_POST['company'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country']; 

        $query = "INSERT INTO list (company, email, phone, country) VALUES (:company, :email, :phone, :country)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':company', $company);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':country', $country);

        $result = $stmt->execute();
        if($result){
            header('Location: index.php');
        }
    }
