<?php
$server = "localhost";
 $user = "root";
 $password = "";
 $database = "hallies";

 $connect = mysqli_connect($server,$user,$password,$database);
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION['loggedin'] !== true) {
    header("location: form.html");
    exit;
}



include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<h1 class="text-center">Welcome to ur dashboard <?php 
  $sql = "SELECT * FROM `employeeinfo`";
  $result = mysqli_query($connect,$sql);
  while($rows = mysqli_fetch_assoc($result)){
echo  $username = $rows['Username'];}?></h1>
    <table class="table">
        <thead class="table-active">
            <th class="table-warning"><h3>First Name </h3></th>
            <th class="table-success"> <h3>Last Name </h3></th>
            <th class="table-danger"> <h3>Username</h3></th>
            <th class="table-dark"> <h3>Email </h3></th>
            <th class="table-light"> <h3>Phone Number</h3></th>
            <th class="table-info"><h3> Age</h3></th>
            <th class="table-primary"> <h3>Gender </h3></th>
            <th class="table-secondary"> <h3>Nationality</h3></th>
            <th class="table-primary"> <h3>State</h3></th>
            <th class="table-info"> <h3>Zip Code</h3</th>
            <th class="table-success"> <h3>Password</h3></th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `employeeinfo`";
            $result = mysqli_query($connect,$sql);
            while($rows = mysqli_fetch_assoc($result)){
                
            $first =  $rows['FirstName'];
            $last =  $rows['LastName'];
            $username = $rows['Username']; 
            $email = $rows['Email'];
            $number = $rows['PhoneNumber'];
            $age = $rows['Age'];
            $gender = $rows["Gender"];
            $nationality = $rows['Nationality'];
            $state = $rows['State'];
            $zipcode = $rows['ZipCode'];
            $pass = $rows['Password'];
            echo "
            <tr>
            <td class='table-warning' >$first</td>
            <td class='table-success'>$last</td>
            <td class='table-danger'>$email</td>
            <td class='table-dark'>$username</td>
            <td class='table-light'>$number</td>
            <td class='table-info'>$age</td>
            <td class='table-primary'>$gender</td>
            <td class='table-secondary'>$nationality</td>
            <td class='table-primary'>$state</td>
            <td class='table-info'>$zipcode</td>
            <td class='table-success'>$pass</td>
            </tr>
            ";
            };
            ?>
            </tbody>
        </table>
           

            <?php
            include "footer.php";
            ?>
</body>
</html>