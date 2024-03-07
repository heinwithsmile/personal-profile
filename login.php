<?php

include "./_layouts/header.php";
session_start();

$email_error = $_SESSION['email_error'] ?? null;
$password_error = $_SESSION['password_error'] ?? null;
$confirm_password_error = $_SESSION['confirm_password_error']??null;
if(isset($_SESSION['email_error'])){
    unset($_SESSION['email_error']);
}
if(isset($_SESSION['password_error'])){
    unset($_SESSION['password_error']);
}
if(isset($_SESSION['confirm_password_error'])){
    unset($_SESSION['confirm_password_error']);
}
?>
<section>
    <div class="container">
        <a href="./index.php">Back</a>
        <h3 class="text-center">Personal Profile Management System</h3>
        <div class="wrapper flex">
            <div class="card">
                <h3 class="text-center">Account Login</h3>
                <form action="./_actions/login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        <small class="text-danger">Invalid Email</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <small class="text-danger">Invalid Password</small>
                    </div>
                    <button type="submit" class="btn btn-lg">Login</button>
                </form>
            </div>
            <div class="card">
                <h3 class="text-center">Create Account</h3>
                <form action="./_actions/signup.php" method="post" id="registrationForm">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        <small class="text-danger"><?=$email_error ?? ''?></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <small class="text-danger"><?=$password_error??''?></small>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" name="confirm-password" id="confirm-password" class="form-control">
                        <small class="text-danger"><?=$confirm_password_error??''?></small>
                    </div>
                    <button type="submit" name="submit" class="btn btn-lg">Register</button>
                    <!-- <button onclick="clearForm(event)">Clear</button> -->
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include "./_layouts/footer.php";
?>