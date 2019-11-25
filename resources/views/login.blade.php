<?php
/**
 * Created by PhpStorm.
 * User: aniat
 * Date: 11/25/2019
 * Time: 4:10 PM
 */
?>
        <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miracle Loading - main</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>

<body>
<div class="login-clean">
    <form method="post">
        <h2 class="sr-only">Login Form</h2>
        <h1>Admin<br>Sign-In</h1>
        <div class="form-group"><label>Please enter your ID</label><input class="form-control" type="email" name="email" placeholder="Email"></div>
        <div class="form-group"><label>Please enter your password</label><input class="form-control" type="password" name="email" placeholder="Password"></div>
        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: #007bff;">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
</div>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
