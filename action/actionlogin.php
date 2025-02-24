<?php

session_start();
include 'config.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Email = $_POST['email'];
        $Password = $_POST['password'];


        $query = "SELECT id_user, email, password, NamaLengkap FROM tbl_user WHERE email = ? AND password = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ss", $Email, $Password);
        $stmt->execute();
        $result = $stmt->get_result();


        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['NamaLengkap'] = $row['NamaLengkap'];
            
            echo '<script>window.location.href ="../pages/todolist.php"</script>';
        }else{
            echo'<script>alert("Email atau password salah")</script>';     
        }

      }


?>