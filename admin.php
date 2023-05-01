<?php
session_start();
if (isset($_SESSION["user_id"])) {    
    if ( $_SESSION["role"] != '2'  ) {
                header("Location: home.php");
                die();
    }      
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png">
    <title>Admin Dashboard</title>

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
        .tableHead {
            text-align: center;
            font-size: 21px;
            border-bottom: 1.5px solid #AA96DA;
        }
        .tableCon{
            font-size: 17px;
            border-bottom: 0.5px solid #AA96DA;
        }
        .tabRow{
            padding: 20px; 
            text-align: center;
        }
    </style>
    
<?php    
     
if(isset($_GET['delid'])) {    
        $id = $_GET['delid'];       
        $sql_delete = "DELETE FROM `user` WHERE id = '$id' ";
        $result = $mysqli->query($sql_delete);      
        if($result){
            header('Location: admin.php');
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
        <nav class="navbar navbar-expand-lg  navbar-light">
            <div class="container">
                <a href="VOiC.php" class="navbar-logo">
                    <img class="d-inline-block align-top" src="logo.png" height="40" alt="">
                </a>
                    <a href="admin.php" class="nav-link" style="padding-left: 20px; font-weight: bolder; font-size: 18px; letter-spacing: 0.18em; "> Admin Dashboard</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav"> <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto"> 
                        <li class="nav-item active">
                            <a href="home.php" class="nav-link">Manage Docs</a>
                        </li>
                        <li class="nav-item active">
                            <a href="create.php" class="nav-link">Create</a>
                        </li>
                        <li class="nav-item active">
                            <a href="VOiC.php" class="nav-link">Search</a>
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
        <h1>Manage Users</h1>
    </div>

    <div class="container" style="padding-bottom: 150px; margin-top: 50px; margin-bottom: 100px; border-radius: 20px; padding-left: 140px; padding-right: 140px">

            
        
        
        <table class="container">
            <tr class="tableHead"> <th> ID</th><th>USER NAME</th><th> EMAIL</th><th>ROLE</th> </tr>        
        
        
<?php
$result = $mysqli->query("SELECT * FROM `user`");
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){     
?>
                
<!--        <div class="container" style="padding: 30px; border: #AA96DA solid; border-radius: 20px; background-color: #73db9038; margin-bottom: 50px ">    
            <div class="row" style="  ">
              <div class="col-sm-8" >
                  <h2> <?php echo $row['name'] ?> </h2>
                  <p>  </p>
                  <p> User Role :  <?php echo $row['role'] ?>  </p>
                  <p class="text-right"> Email : <?php  echo $row['email'] ?> </p> 
              </div>

              <div class="col-sm-4" >
                  <a href='read.php?rid=<?php echo $row['id']; ?>' class="btn btn-outline-success mr-2 btn-sm float-right read" >READ</a><br><br>
                  <a href='update.php?uid=<?php echo $row['id']; ?>' class="btn btn-outline-primary mr-2 btn-sm float-right read" style="float: right!important;  ">EDIT</a><br><br>
               <?php if($_SESSION["role"] == 2) {  ?>
                  <a href='home.php?delid=<?php echo $row['id']; ?>' class="btn btn-outline-danger mr-2 btn-sm float-right read" style=" float: right!important;">DELETE</a><br><br>               
               <?php } ?>
              </div>
            </div>
        </div>    -->
        

  
  
            <tr class="tableCon">
                <td class="tabRow"><?php echo $row['id'] ?></td>
                <td class="tabRow"><?php echo $row['name'] ?></td>
                <td class="tabRow"><?php echo $row['email'] ?></td>
                <td class="tabRow">
                    <?php 
                    if ($row['role'] == 1){
                        echo "Normal User";
                    }
                    if ($row['role'] == 2){
                        echo "Admin User";
                    }
                    ?></td>
                <td>
                    <a href='admin.php?delid=<?php echo $row['id']; ?>'  class="btn btn-outline-danger mr-2 btn-sm float-right read" > Delete </a>
                </td>
            </tr>
        

        
<?php        
            
    }
} else {
    echo "No results found.";
}           
?>               
                   
        
        </table>
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

<footer class="bg-light text-center text-lg-start" style="margin-top: 200px; bottom: 0;">
  <div class="text-center p-3" style="background-color: #7ddf99a5;; ">
    © 2023 Copyright
    <a class="text-dark" href="https://github.com/AkhilKarri2002">Created by Akhil Karri</a>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
