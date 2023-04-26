<?php

session_start();
if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";            
    $result = $mysqli->query($sql);    
    $user = $result->fetch_assoc();
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
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
    <title>Update</title>
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 700px;
        }
    </style>
</head>
<body>
    
    <?php if (isset($user)): ?> 
    <!-- navbar -->
    <header>
        <nav class="navbar navbar-expand-md  navbar-light">
            <div class="container">
                <a href="VOiC.php" class="navbar-logo">
                    <img class="d-inline-block align-top" src="logo.png" height="40" alt=""> </a>
                    <a href="VOiC.php" class="nav-link" style="padding-left: 20px;"> Virtual Office in Cloud</a>
                <div class="search-box">
                    <input class="search-txt" type="text" name="Searchbox" placeholder="Type to Search">
                    <a class="search-btn" href="#"><i class="bi bi-search"></i></a>
                </div>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav"> <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a href="home.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a href="#" class="nav-link">About</a>
                        </li>
                        <li class="nav-item active">
                            <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item active">
                            <a href="logout.php" class="nav-link">Log-out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar-End -->
    
    <div class="container">
        <h1>Create  Document</h1>
    </div>

    
<?php
    if(isset($_GET['uid'])){
        $id =  $_GET['uid'];
    }
    else{
        header ('home.php?sucess=0');
    }
?>
    
    
<?php 
$query = $mysqli->query("SELECT * FROM `documents` WHERE id = '$id' ");

$row = mysqli_fetch_array($query);
    
?>  
    
    
    <div class="container" style="padding-bottom: 150px; margin-top: 100px; margin-bottom: 100px; border-radius: 20px; background-color: #73db9038;">
        
        
        <form action="update-doc.php" method="post">
            <div>
                <div class="container heading">
                    <h4 style="text-align: center;">Title</h4>
                    <input type="text" class="entry" name="title" id="title" style=" text-align: center" placeholder="Title of the Document" value="<?= $row['title'];  ?>"> <br>
                </div>
                <div class="container heading">
                    <h4 style="text-align: center;">Author</h4>
                    <input type="text" class="entry" name="author" id="author" style=" text-align: center" placeholder="Author's Name" value="<?= $row['author'];  ?>" > <br>
                </div>
            </div>
            <div class="container">
                <div class="form-group"> 
                    <textarea name="description" class="form-control" id="description"> 
                        <?= $row['description'];  ?>
                    </textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="<? =$id ?>">
            <br>
            <div class="container" style="padding-bottom: 10px;">
                <button class="submit" style=" width: 10%" type="submit" id="submit"  value="update"> UPDATE </button> 
            </div>
        </form>
        
    </div>
    
    
    
    
    
    
    
<?php else: ?>
        <header>
        <nav class="navbar navbar-expand-md  navbar-light">
            <div class="container">
                <a href="Log-In.php" class="navbar-logo">                 </a>
                     <img class="d-inline-block align-top" src="logo.png" height="40" alt=""> 
                    <a href="Log-In.php" class="nav-link" style="padding-left: 20px;"> Virtual Office in Cloud</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav"> <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a href="#" class="nav-link"> About </a>
                        </li>
                        <li class="nav-item active">
                            <a href="contact.html" class="nav-link"> Contact </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <p style="text-align: center; padding-top: 100px"><a href="Log-In.php">Log-in</a> or <a href="Sign-Up.html">sign-up</a></p>
    <?php endif; ?>
   


    
    
    
    
    
    
    
    <footer class="bg-light text-center text-lg-start" style="margin-top: 200px;">
        <div class="text-center p-3" style="background-color: #7ddf99a5;; ">
          © 2023 Copyright
          <a class="text-dark" href="https://github.com/AkhilKarri2002">Created by Akhil Karri</a>
        </div>
    </footer>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>
