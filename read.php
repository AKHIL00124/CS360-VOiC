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
    <title>Read Doc</title>
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 700px;
        }
        form {
            padding: 50px;
        }
        .Signature{
            text-transform: uppercase;
            display: block;
            margin : 0 auto;
            height: 40px;
            width: 350px;
            border-width: 0.1em;
            border-radius: 10px;
            border-color: #a0ced4;
        }
        .CaseDet{
            display: block;
            margin : 0 auto;
            height: 40px;
            width: 250px;
            border-width: 0.1em;
            border-radius: 10px;
            border-color: #a0ced4;
        }
        .heading{
            padding-top: 10px;
        }
        .f{
            font-family: "Times New Roman", Times, serif;
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
                    
                <?php if($_SESSION["role"] == 2) {  ?>
                    <a href="admin.php" class="nav-link" style="padding-left: 20px; font-weight: bolder; font-size: 18px; letter-spacing: 0.18em; "> Admin Dashboard</a>
                <?php } ?>   
                <?php if($_SESSION["role"] == 1) {  ?>
                    <a href="VOiC.php" class="nav-link" style="padding-left: 20px; font-size: 18px;"> Virtual Office in Cloud</a>
                <?php } ?>  
                    
                    
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


    
<?php
    if(isset($_GET['rid'])){
        $id =  $_GET['rid'];
    }
    else{
        header ('home.php?sucess=0');
    }
?>
    
    
<?php 
$query = $mysqli->query("SELECT * FROM `documents` WHERE id = '$id' ");

$row = mysqli_fetch_array($query);
    
?>  


    
    <div class="container f">
        <h1><?= $row['title'];  ?></h1>
    </div>

 
    <div class="container f" style="padding-bottom: 150px; margin-top: 0px; margin-bottom: 100px; border-radius: 20px; ">        
        <form action="home.php" method="post">
            
            <div class="row">
                <div class="col-sm-6" >
                    <div class="CaseDetTop">
                        <div class="d-lg-flex">
                            <div class="col-sm-6" style="padding-left: 70px ">
                                <h4 >Court : </h4>
                            </div>
                            <div class="col">
                                <h4> <?= $row['court'];  ?> </h4> <br>
                            </div>
                        </div>
                    </div>
                    <div class="CaseDetTop">
                        <div class="d-lg-flex">
                            <div class="col-sm-6" style="padding-left: 70px ">
                                <h4 >Case No : </h4>
                            </div>
                            <div class="col-sm-6">
                                <h4> <?= $row['caseNo'];  ?> </h4> <br>
                            </div>
                        </div>   
                    </div>
                </div>
                
                <div class="col-sm-6" >
                    <div class="CaseDetTop">
                        <div class="d-lg-flex">
                            <div class="col-sm-6" style="padding-left: 70px ">
                                <h4 >Petitioner : </h4>
                            </div>
                            <div class="col">
                                <h4> <?= $row['Petitioner'];  ?> </h4> <br>
                            </div>
                        </div>
                    </div>
                    <div class="CaseDetTop">
                        <div class="d-lg-flex">
                            <div class="col-sm-6" style="padding-left: 70px ">
                                <h4 >Respondent : </h4>
                            </div>
                            <div class="col-sm-6">
                                <h4> <?= $row['Respondent'];  ?> </h4>
                                <br>
                            </div>
                        </div>   
                    </div>
                </div>             
            </div>
            
            <div>
                <div class="container heading">
                    <h3 style="text-align: center;"></h3>
                </div>
                <div class="container heading">
                    <h4 style="text-align: right;"> Attorney :  <?= $row['author'];  ?> </h4> <h5 style="text-align: right;">on <?= $row['createdOn'];  ?> </h5>
                </div>
                <br>
            </div>
            <div class="container" style="padding: 30px ">
                
                <h2 style="text-align: center; border-bottom: black solid; padding-bottom: 15px">Case Matter</h2>
                                    
                <div class="form-group">                    
                    <h4 style="line-height: 2;">  <?= $row['description'];  ?> </h4>  
                </div>
            </div>
    
            <div class="col-6-sm container heading" style="padding: 30px " >
                <h3 style="text-align: center; border-bottom: black solid; padding-bottom: 15px ">Citations of case</h3> <br>            
                <h4 style=" text-align: center;" ><cite> <?= $row['Citations'];  ?> </cite></h4>
            </div>
            
            <div class="container heading" style="padding-top: 20px; padding-bottom: 15px " >
                <h3 style="text-align: center; padding: 20px; border-bottom: black solid; padding-bottom: 20px">Acknowledgment</h3>              
                <h4 style="text-align: center; padding: 20px ">I completely Agree with and Admit the above paragraph,  <ins style="font-family: Apple Chancery, cursive; padding: 10px; text-transform: uppercase; " > <?= $row['Signature'];  ?>  </ins> </h4>
            </div>
            <br>

            <input type="hidden" name="id" value="<? =$id ?>">
            <br>
            <div class="container" style="padding-bottom: 10px;">
                <button class="submit" style=" width: 10%; margin-top: 150px " type="submit" id="submit"  value="update"> done </button> 
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
