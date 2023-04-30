<?php
session_start();
if (isset($_SESSION["user_id"])) {
   $mysqli = require __DIR__ . "/database.php";

//    $mysqli = require __DIR__ . "/database.php";
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png">
    <title>VOiC Search</title>
    <style>
        .read {
            float: right!important;  

            border-radius: 5px;
        } 
        .search-btn1 {
            background: #AA96DA;
            color: #21216f;
            float: right;
            width: 40px;
            height: 40px;
            border-radius: 20%;
        /*    background: #73db90 ;*/
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.5s;            
        }
        .search-txt1 {
            width: 240px;
            padding: 0 6px;
            border: none;
            background: none;
            outline: none;
            float: left;
            color: rgb(0, 0, 0);
            font-size:  14px;
            transition: 0.5s;
            line-height:  40px;
        }
    </style>
    
<?php    
if(isset($_GET['delid'])) {    
        $id = $_GET['delid'];       
        $sql_delete = "DELETE FROM `documents` WHERE id = '$id' ";
        $result = $mysqli->query($sql_delete);      
        if($result){
            header('Location: home.php');
        }else{
            echo "Error";
        }
}
?>  
</head>
<body>
<?php if (isset($user)): ?> 
    <!-- navbar -->
    <header>
        <nav class="navbar navbar-expand-md  navbar-light">
            <div class="container">
                <a href="home.php" class="navbar-logo">
                    <img class="d-inline-block align-top" src="logo.png" height="40" alt="">
                    </a>
                    <a href="home.php" class="nav-link" style="padding-left: 20px;"> Virtual Office in Cloud</a>
                

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav"> <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto"> 
                        <li class="nav-item active">
                            <a href="VOiC.php" class="nav-link">Search</a>
                        </li>
                        <li class="nav-item active">
                            <a href="home.php" class="nav-link"> Home </a>
                        </li>
                        <li class="nav-item active">
                            <a href="contact.html" class="nav-link"> Contact </a>
                        </li>
                        <li class="nav-item active">
                            <a href="logout.php" class="nav-link"> Log-out </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar-End -->
    
    <div class="container">
        <h1>Search Page</h1>
    </div>
    <div class="container" style="padding-bottom: 150px; margin-top: 100px; margin-bottom: 100px; border-radius: 20px; padding-left: 140px; padding-right: 140px">
        
        
       
<?php
if (isset($_POST['search'])) {
    $todaydate   = date('Y-m-d', strtotime($_POST['todaydate']));
    $ChildName   = $_POST['ChildName'];
    $ChildState   = $_POST['ChildState'];
    $Parent1Name   = $_POST['Parent1Name'];
    $ChildStayPre   = $_POST['ChildStayPre'];
    $Parent1State   = $_POST['Parent1State'];
    $CaseDate   = date('Y-m-d', strtotime($_POST['CaseDate']));
    $CaseState   = $_POST['CaseState'];
    $ChangeState   = $_POST['ChangeState'];
    $Parent2Name   = $_POST['Parent2Name'];
    $CaseStay   = $_POST['CaseStay'];
    $Parent2State   = $_POST['Parent2State'];

    $sql = "SELECT * FROM `documents` WHERE todaydate LIKE '%".$todaydate."%' AND ChildName LIKE '%".$ChildName."%' AND ChildState LIKE '%".$ChildState."%' AND Parent1Name LIKE '%".$Parent1Name."%'  "
            . " AND Parent1State LIKE '%".$Parent1State."%' AND ChildStayPre LIKE '%".$ChildStayPre."%' AND CaseDate LIKE '%".$CaseDate."%' AND CaseState LIKE '%".$CaseState."%' AND ChangeState LIKE '%".$ChangeState."%' "
            . "AND CaseStay LIKE '%".$CaseStay."%' AND Parent2Name LIKE '%".$Parent2Name."%' AND Parent2State LIKE '%".$Parent2State."%'  ";
    
    $result = $mysqli->query($sql);
    if (mysqli_num_rows($result) > 0) {
        $queryResult = mysqli_num_rows($result);
    
        ?>
        <div class="container" style="padding-bottom: 20px; padding-left: 40px " >
         <?php
            echo "There are " . $queryResult . " results";
          ?>
        </div>
       <?php
        
        while($row = mysqli_fetch_assoc($result)){     
?>                         

        <div class="container" style="padding: 30px; border: #AA96DA solid; border-radius: 20px; background-color: #73db9038; margin-bottom: 50px ">    
            <div class="row" style="  ">
              <div class="col-sm-8" >
                  <h2> <?php echo $row['title'] ?> </h2>
                  <p>  </p>
                  <p>Writen on <?php echo $row['createdOn'] ?>  </p>
                  <p class="text-right"> By <?php  echo $row['author'] ?> </p> 
              </div>
              <div class="col-sm-4" >
                  <a href='read.php?rid=<?php echo $row['id']; ?>' class="btn btn-outline-success mr-2 btn-sm float-right read" >READ</a><br><br>
                  <a href='update.php?uid=<?php echo $row['id']; ?>' class="btn btn-outline-primary mr-2 btn-sm float-right read" style="float: right!important;  ">EDIT</a><br><br>
                  <a href='home.php?delid=<?php echo $row['id']; ?>' class="btn btn-outline-danger mr-2 btn-sm float-right read" style=" float: right!important;">DELETE</a><br><br>               
              </div>
            </div>
        </div>    
<?php            
        }
    } else {
        echo "No results found.";
    }  
}
?>               
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

<!--    footer-->
    <footer class="bg-light text-center text-lg-start" style="margin-top: 350px; bottom: 0;">
  <div class="text-center p-3" style="background-color: #7ddf99a5;; ">
    © 2023 Copyright
    <a class="text-dark" href="https://github.com/AkhilKarri2002">Created by Akhil Karri</a>
  </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>