<?php
$title = $_POST["title"];
$author = $_POST["author"];
$description = $_POST["description"];
$createdOn = date('Y-m-d h:i:s');


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

$sql = "INSERT INTO documents (title, description, author, createdOn) VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die (mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssss", $title, $description, $author, $createdOn);

mysqli_stmt_execute($stmt);

header("Location: home.php");
exit;
