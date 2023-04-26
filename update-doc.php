<?php

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];

$host = "localhost";
$dbname = "VOiC";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                      
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

//$sql = "UPDATE documents SET `title`='$title',`description`='$description',`author`='$author',`createdOn`='$createdOn' WHERE id = '$id' ";

//$query = mysqli_query($conn, "UPDATE documents SET `title`='$title',`description`='$description',`author`='$author',`createdOn`='$createdOn' WHERE id = '$id' ");
//
//if ($query){
//    header("Location: home.php?success=1");
//    exit;
//}
//else{
//    header("Location: VOiC.php");
//    exit;
//}

$sql = "UPDATE `documents` SET `title`=?, `description`=?, `author`=?, `createdOn`=? WHERE id=?";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die (mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssi", $title, $description, $author, $createdOn, $id);

mysqli_stmt_execute($stmt);

header("Location: home.php?success=1");
exit;
