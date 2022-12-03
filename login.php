<?php
$email = $_POST['email'];
$password = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<header>
    <h1> Dolphin CRM </h1>
</header>    
<body>
    <div class="dashboard-container">
        <h2>Dashboard </h2>
        <button type="button" id="addBtn" class="addbtn">Add Contact </button> 
    </div>    
    
    <aside class="nav-bar">
        <ul>
            <li><a href="login.php">Home</a></li>
            <li><a href="contact.php">New Contact</a></li>
            <li><a href="users.php">Example.com</a></li>

        </ul>
        <a href="index.html"> Logout </a>
    </aside>


</body>
</html>