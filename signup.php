<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 $database = "hallies";

 $connect = mysqli_connect($server,$user,$password,$database);


 
 if (isset($_POST['signup'])) {
   
    
    if (empty($_POST['FirstName'])||empty($_POST['LastName'])||empty($_POST['Username']) || empty($_POST['Email']) ||
    empty($_POST['PhoneNumber']) || empty($_POST['Age']) || empty($_POST['Gender']) || empty($_POST['Nationality']) || empty($_POST['State']) ||
    empty($_POST['ZipCode']) || empty($_POST['F_Password']) || empty($_POST['Password'])
    ) {
      echo" <h1> Filled Missing Value </h1>";
    }
    else {
        $first = mysqli_real_escape_string($connect, $_POST['FirstName']);
        $last = mysqli_real_escape_string($connect,$_POST['LastName']);
        $username = mysqli_real_escape_string($connect,$_POST['Username']);
        $email = mysqli_real_escape_string($connect, $_POST['Email']);
        $number = mysqli_real_escape_string($connect, $_POST['PhoneNumber']);
        $age = mysqli_real_escape_string($connect,$_POST['Age'] );
        $gender = mysqli_real_escape_string($connect, $_POST['Gender']);
        $nationality = mysqli_real_escape_string($connect, $_POST['Nationality']);
        $state = mysqli_real_escape_string($connect, $_POST['State']);
        $zipcode = mysqli_real_escape_string($connect, $_POST['ZipCode']);
        $firstpass = mysqli_real_escape_string($connect, $_POST['F_Password']);
        $firstpass=md5($firstpass);
        $pass = mysqli_real_escape_string($connect, $_POST['Password']);
        $pass=md5($pass);
        $query = "INSERT INTO `employeeinfo`(`FirstName`, `LastName`, `Username`, `Email`, `PhoneNumber`, `Age`, `Gender`, `Nationality`, `State`, `ZipCode`, `Password`) 
        VALUES ('$first','$last','$username','$email','$number','$age','$gender','$nationality','$state','$zipcode','$pass')";
 $result = mysqli_query($connect, $query) ;
 header("Location: index.php"); exit;

}
 }
?>