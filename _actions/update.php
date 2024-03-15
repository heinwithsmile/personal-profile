<?php

require_once "../_config/db.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    echo $confirm_password;
}

