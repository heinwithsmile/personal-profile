<?php
// echo "Default session.cookie_lifetime: " . ini_get('session.cookie_lifetime');
// exit;
session_start();
include "./_layouts/header.php";
include "./_config/db.php";

if(!$_SESSION['loggedin']){
    header("Location: login.php");
    exit;
}

?>
<section>
    <div class="container">
        <header class="flex align-center space-between">
            <a href="./index.php">Back</a>
            <h3>Personal Profile Management System</h3>
            <a href="#">Logout</a>
        </header>
        <form action="./_actions/update.php" method="post" enctype="multipart/form-data">
            <div class="wrapper flex">
                <div class="box">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" name="name" id="name" class="form-control" maxlength="100" required>
                        <small class="text-danger">Invalid Name</small>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" maxlength="100" required>
                        <small class="text-danger">Invalid Phone Number</small>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="30" rows="10"></textarea>
                        <small class="text-danger">Required</small>
                    </div>
                </div>
                <div class="box">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" maxlength="100" required>
                        <small class="text-danger">Invalid Email</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" >
                        <small class="text-danger">Invalid Password</small>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="confirm-password" name="confirm-password" id="confirm-password" class="form-control">
                        <smal class="text-danger">Invalid Confirm Password</small>
                    </div>
                </div>
                <div class="form-group flex">
                    <button type="submit" class="btn btn-danger">Delete Account</button>
                    <button type="submit" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>