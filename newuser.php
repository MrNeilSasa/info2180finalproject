<?php
$con = new mysqli('localhost', 'root', '','dolphin_crm');

if(!$con){
    die (mysqli_error($con));
}

if(isset($_REQUEST['submit'])){
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $role = $_REQUEST['role'];

    $sql = "insert into `Users` (firstname,lastname,password,email,role) values('$firstname', '$lastname', '$password', '$email', '$role')";
    $result = mysqli_query($con,$sql);
    if ($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_query($con));
    }
}
?>


