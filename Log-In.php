<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: VOiC.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png">
    <title>Log-in</title>
</head>
<body>
    <!-- navbar -->
    <header>
        <nav class="navbar navbar-expand-md  navbar-light">
            <div class="container">
                <a href="VOiC.html" class="navbar-logo">
                    <a href="VOiC.html" class="nav-link" style="padding-left: 20px;"> Virtual Office in Cloud</a>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav"> <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a href="#" class="nav-link"> About </a>
                        </li>
                        <li class="nav-item active">
                            <a href="contact.html" class="nav-link"> Contact </a>
                        </li>
                        <li class="nav-item active">
                            <a href="Sign-Up.html" class="nav-link">Sign-Up</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar-End -->

    <div class="container">
        <h1>Log-In</h1>
    </div>
    <div class="container" style="padding: 100px; margin-bottom: 100px;">
        <div class="row">    
            <div class="d-md-flex">
                <div class="col-md-6">
                    <img src="proj.png" style="width: 60%; margin-top: 40px; border-radius: 20px; ">
                </div>
                <div class="col-md-6" style=" background-color: #73db9038; padding: 20px; border-radius: 20px;">
                    <form class="form" action="" method="post" autocomplete="off">
                        
                            <?php if ($is_invalid): ?>
                                <em>Invalid login</em>
                            <?php endif; ?>
                                
                        <div class="form-list">
                            <label for="email">Email : </label>
                            <input type="text" class="form-control" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"> <br>
                        </div>
                        <div class="form-list">
                            <label for="password">Password : </label>
                            <input type="password" class="form-control" name="password" id="password"> <br>
                        </div>   
                        <button class="log" name="Log In" value="Log-In">Log In</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
            <footer class="bg-light text-center text-lg-start" style="margin-top: 150px;">
            <div class="text-center p-3" style="background-color: #7ddf99a5;; ">
              © 2023 Copyright
              <a class="text-dark" href="https://github.com/AkhilKarri2002">Created by Akhil Karri</a>
            </div>
        </footer>
</body>
</html>