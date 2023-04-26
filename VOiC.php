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
    <title>VOiC</title>

</head>
<body>

       
            <?php if (isset($user)): ?> 

    <!-- navbar -->
    <header>
        <nav class="navbar navbar-expand-md  navbar-light">
            <div class="container">
                <a href="home.php" class="navbar-logo"></a>
                    <img class="d-inline-block align-top" src="logo.png" height="40" alt="">
                    <a href="home.php" class="nav-link" style="padding-left: 20px;"> Virtual Office in Cloud</a>
                
                <div class="search-box">
                    <input class="search-txt" type="text" name="Searchbox" placeholder="Type to Search">
                    <a class="search-btn" href="#"><i class="bi bi-search"></i></a>
                </div>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav"> <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a href="create.php" class="nav-link">Create</a>
                        </li>
                        <li class="nav-item active">
                            <a href="#" class="nav-link"> About </a>
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
        <h1>Home Page</h1>
    </div>
    <div class="container" style="padding-bottom: 150px; margin-top: 100px; margin-bottom: 100px; border-radius: 20px; background-color: #73db9038;">
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <div class="label">
                        <div class="d-lg-flex">
                            <div class="col-sm-6">
                                <label for="today-date" class="">Today's Date:</label>
                            </div>
                            <div class="col">
                                <input id="today-date" type="date" class="">
                            </div>
                        </div>
                    </div>
                    <div class="label">
                        <div class="d-lg-flex">
                            <div class="col-sm-6">
                                <label for="Child-Name" class="">Child's Name:</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="Child-Name" type="text" class="" placeholder="Child name"> 
                            </div>
                        </div>   
                    </div>
                    <div class="label">
                        <div class="d-lg-flex">
                            <div class="col-sm-6">
                                <label for="ChildState" class="">Child's Residence:</label>
                            </div>
                            <div class="col-sm-6">
                                <select name="Select-State" id="ChildState" oninput="ChildStatePr.value = ChildState.value">
                            <option value="">Select state</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AS">American Samoa</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="UM-81">Baker Island</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="GU">Guam</option>
                            <option value="HI">Hawaii</option>
                            <option value="UM-84">Howland Island</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="UM-86">Jarvis Island</option>
                            <option value="UM-67">Johnston Atoll</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="UM-89">Kingman Reef</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="UM-71">Midway Atoll</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="UM-76">Navassa Island</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="UM-95">Palmyra Atoll</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="VI">United States Virgin Islands</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="UM-79">Wake Island</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="label">
                        <div class="d-lg-flex">
                            <div class="col-sm-6">
                                <label for="Parent1Name" class="">Parent 1 Name (Claimant):</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="Parent1Name" type="text" class="" placeholder="First Parent name" oninput="Parent1NameConfirm.value = Parent1Name.value">
                            </div>
                        </div>
                    </div>
                    <div class="label">
                        <div class="d-lg-flex">
                            <div class="col-sm-6">
                                <label for="Child-stay" class="">Child Stay (Present) in:</label>
                                <input type="text" id="ChildStatePr" readonly style="width: 20%; padding: none; border: none; outline: none; background: transparent; "> 
                            </div>
                            <div class="col-sm-6">
                                <input id="Child-stay" type="number" class="" placeholder="Enter no of days">
                            </div>
                        </div>
                    </div>
                    <div class="label">
                        <div class="d-lg-flex">
                            <div class="col-sm-6">
                                <label for="Parent1-State" class="">Residence of</label>
                                <input type="text" id="Parent1NameConfirm" readonly style="width: 50%; padding: none; border: none; outline: none; background: transparent; margin-left: none !important;"> 
                            </div>
                            <div class="col-sm-6">
                                <select name="Select-State" id="Parent1-State">
                                    <option value="">Select state</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="UM-81">Baker Island</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="GU">Guam</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="UM-84">Howland Island</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="UM-86">Jarvis Island</option>
                                    <option value="UM-67">Johnston Atoll</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="UM-89">Kingman Reef</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="UM-71">Midway Atoll</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="UM-76">Navassa Island</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="UM-95">Palmyra Atoll</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="VI">United States Virgin Islands</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="UM-79">Wake Island</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="label">
                        <div class="d-lg-flex">
                            <div class="col-sm-6">
                                <label for="Case-date" class="">Date Case Filed:</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="Case-date" type="date" class="">
                            </div>
                        </div>
                    </div>
                    <div class="label">
                        <div class="d-lg-flex">
                            <div class="col-sm-6"> 
                                <label for="StateName" class="">State Case Filed:</label>
                            </div>
                            <div class="col-sm-6">
                                <select name="Select-State" id="StateName" oninput="CaseStatePr.value = StateName.value">
                                    <option value="">Select state</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="UM-81">Baker Island</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="GU">Guam</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="UM-84">Howland Island</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="UM-86">Jarvis Island</option>
                                    <option value="UM-67">Johnston Atoll</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="UM-89">Kingman Reef</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="UM-71">Midway Atoll</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="UM-76">Navassa Island</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="UM-95">Palmyra Atoll</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="VI">United States Virgin Islands</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="UM-79">Wake Island</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="label">
                        <div class="d-lg-flex">
                            <div class="col-sm-6">
                                <label for="Change-State" class="">Most recent Modification:</label>
                            </div>
                            <div class="col-sm-6">
                                <select name="Select-State" id="Change-State">
                                    <option value="">Select state</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="UM-81">Baker Island</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="GU">Guam</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="UM-84">Howland Island</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="UM-86">Jarvis Island</option>
                                    <option value="UM-67">Johnston Atoll</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="UM-89">Kingman Reef</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="UM-71">Midway Atoll</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="UM-76">Navassa Island</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="UM-95">Palmyra Atoll</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="VI">United States Virgin Islands</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="UM-79">Wake Island</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="label">
                        <div class="d-lg-flex">
                            <div class="col-sm-6">
                                <label for="Parent2Name" class="">Parent 2 Name (Respondant):</label>
                            </div>
                            <div class="col-sm-6"> 
                                <input id="Parent2Name" type="text" class="" placeholder="Second Parent name" oninput="Parent2NameConfirm.value = Parent2Name.value">
                            </div>
                        </div>
                    </div>
                    <div class="label">
                        <div class="d-lg-flex">
                            <div class="col-sm-6">
                                <label for="CaseStay" class="">Child Stay (Case Filed date) in:</label>
                                <input type="text" id="CaseStatePr" readonly style="width: 20%; padding: none; border: none; outline: none; background: transparent; "> 
                            </div>
                            <div class="col-sm-6">
                                <input id="CaseStay" type="number" class="" placeholder="Enter no of days">
                            </div>
                        </div>
                    </div>
                    <div class="label">
                        <div class="d-lg-flex">
                            <div class="col-sm-6">
                                <label for="Parent2-State" class="" style="padding-left: 0%;">Residence of</label>
                                <input type="text" id="Parent2NameConfirm" readonly style="width: 50%; padding: none; border: none; outline: none; background: transparent; "> 
                            </div>
                            <div class="col-sm-6">
                                <select name="Select-State" id="Parent2-State">
                                    <option value="">Select state</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="UM-81">Baker Island</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="GU">Guam</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="UM-84">Howland Island</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="UM-86">Jarvis Island</option>
                                    <option value="UM-67">Johnston Atoll</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="UM-89">Kingman Reef</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="UM-71">Midway Atoll</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="UM-76">Navassa Island</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="UM-95">Palmyra Atoll</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="VI">United States Virgin Islands</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="UM-79">Wake Island</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            
        </form>
        <input class="submit" type="submit" value="Submit">
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