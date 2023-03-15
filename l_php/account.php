<?php
session_start();

if(!isset($_SESSION['name'])){
    header('location:login.php');
    exit();
}


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Signup</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
    
<body role="document" style="background-color: paleturquoise;">
<nav class="navbar navbar-expand-lg bg-light">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="accueil.php">Home</a>
                    </li>
                    <?php if(!isset($_SESSION['name'])): ?> 
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Se connecter</a>
                    </li>
                     <?php  else:?> 
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Se deconnecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="account.php">Mon compte</a>
                    </li>
                     <?php endif;?> 
                </ul>
            </div>
        </div>
    </nav>

<main role="main">
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3"> SALUT </h1>
            <p>This is a template for a simple marketing or informational web site</p>
            <p><a href="">Learrn more</a></p>


        </div>
    </div>
</main>
</body>
</html>

