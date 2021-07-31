<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo ucwords($title); ?></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-success navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">PHP Intro</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-dark" href=".">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="contact.php">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>
<?php
if(isset($heading) == false)
     $heading = "We are happy to have you here!";
?>
<div class="jumbotron text-uppercase text-center text-success m-0">
    <h1><?= $heading ?></h1>
</div>