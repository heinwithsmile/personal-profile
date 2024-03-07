<?php

require_once "../_config/db.php";

session_start();

$email = $password = $confirm_password = '';
$email_error = $password_error = $confirm_password_error = '';

if (isset($_POST['submit'])){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(empty($_POST['email'])){
            $email_error = 'Email is required';
            $_SESSION['email_error'] = $email_error;
        }else{
            $email = htmlspecialchars($_POST['email']);
        }
        if(empty($_POST['password'])){
            $password_error = 'Password is required';
            $_SESSION['password_error'] = $password_error;
        }else{
            $password = htmlspecialchars($_POST['password']);
        }
        if (empty($_POST['confirm-password'])) {
            $confirm_password_error = 'Confirm Password is required';
            $_SESSION['confirm_password_error'] = $confirm_password_error;
        } else {
            $confirm_password = htmlspecialchars($_POST['confirm-password']);
            if ($password !== $confirm_password) {
                $confirm_password_error = 'Passwords do not match';
                $_SESSION['confirm_password_error'] = $confirm_password_error;
            }
        }

        if(empty($email_error) && empty($password_error) && empty($confirm_password_error)){
            $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            
            try{
                $stmt->execute();
                echo "Data Insert Successfully.";
            }catch(PDOException $e){
                die("Error:" . $e->getMessage());
            }
            
        }else{
            header("Location: ../login.php");
            exit;
        }
    }
}