<?php
$con = new mysqli('localhost', 'root', '','dolphin_crm');
$date = 'now()';
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$password = $_GET['password'];
$email = $_GET['email'];
$role = $_GET['role']; 
if(!$con){
    die (mysqli_error($con));
}

/*
if(isset($_REQUEST['submit'])){
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $role = $_REQUEST['role'];
    
  if (isset($_POST['saveuser'])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $role = $_POST["role"];
  }  */

   

    $sql = "INSERT into users (firstname, lastname, password, email, role, created_at) values('$firstname', '$lastname', '$password', '$email', '$role', $date)";
    $result = mysqli_query($con,$sql);
    if ($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_query($con));
    }
//} 
?>


