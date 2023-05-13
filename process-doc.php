<?php
$title = $_POST["title"];
$author = $_POST["author"];
$description = $_POST["description"];
$createdOn = date('Y-m-d h:i:s');
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
$court   = $_POST['court'];
$caseNo   = $_POST['caseNo'];
$Petitioner   = $_POST['Petitioner'];
$Respondent   = $_POST['Respondent'];
$Citations   = $_POST['Citations'];
$Signature   = $_POST['Signature'];

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

//( `title`, `description`, `author`, `createdOn`, `todaydate`, `ChildName`, `ChildState`, `Parent1Name`, `ChildStayPre`, `Parent1State`, `CaseDate`, `CaseState`, `ChangeState`, `Parent2Name`, `CaseStay`, `Parent2State`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]')

$sql = "INSERT INTO documents (title, description, author, createdOn, todaydate, ChildName, ChildState, Parent1Name, ChildStayPre, Parent1State, CaseDate, CaseState, ChangeState, Parent2Name, CaseStay, Parent2State, court, caseNo, Petitioner, Respondent, Citations, Signature) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die (mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssssssisssssississss", $title, $description, $author, $createdOn, $todaydate, $ChildName, $ChildState, $Parent1Name, $ChildStayPre, $Parent1State, $CaseDate, $CaseState, $ChangeState, $Parent2Name, $CaseStay, $Parent2State, $court, $caseNo, $Petitioner, $Respondent, $Citations, $Signature);

mysqli_stmt_execute($stmt);

header("Location: home.php");
exit;
