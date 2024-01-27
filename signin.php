<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "hallies";

$connect = mysqli_connect($server,$user,$password,$database);
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("Location: dashboard.php"); exit; }
    if (isset($_POST['signin'])){
        $email = $_POST['Email'];
        $pass = $_POST['Password'];
        $pass = md5($pass);

        $query = "SELECT * FROM `employeeinfo` WHERE Email = '$email' AND Password = '$pass' ";
        $output = mysqli_query($connect,$query) or die(mysqi_error());
        $rows = mysqli_num_rows($output);

        if ($rows > 0) {
            $_SESSION["loggedin"] = true;
$_SESSION["id"] = $id;
$_SESSION['Email'] = $email;

// Redirect to user dashboard page
header("Location: dashboard.php");
        }
    }    
?>