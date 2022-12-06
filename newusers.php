<?php
session_start();
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $role = $_POST["role"];

    define("DB_SERVER", "localhost");
    define("DB_USERNAME","root");
    define("DB_PASSWORD", "");
    define("DB_NAME","dolphin_crm");
    $conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("insert into Users (firstname, lastname, password, email, role )values (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$firstname, $lastname, $password, $email, $role);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="homestyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>New Contact</title>
</head>
<header>
    <img src="dolphin.jpeg">
    <h1> Dolphin CRM </h1>
</header>
<body>
    <aside class="nav-bar">
        <ul>
            <li><i class="fas fa-home"></i><a href="login.php">Home</a></li>
            <li><i class="fas fa-address-book"></i><a href="contact.php">New Contact</a></li>
            <li><i class="fas fa-user"></i><a href="users.php">Users</a></li>
            <li><i class="fas fa-sign-out-alt"></i><a href="index.html"> Logout </a></li>
        </ul>
    </aside>

    <section class="sbody">
                    <div class="body-heading">
                        <h2> New User</h2>
                    </div>
                    <div class="body-content" id="error">
                        <form name="UserForm" action="users.php" id="form" onsubmit="return validateUser()" method="post">
                            <div class="input">
                                <label for="firstname">First name</label>
                                <input type="text" placeholder="Enter first name" id="firstname" name="firstname" required>
                                <div class="error"></div>
                            </div>

                            <div class="input">
                                <label for="lastname">Last name</label>
                                <input type="text" placeholder="Enter last name" id="lastname" name="lastname" required>
                                <div class="error"></div>
                            </div>

                            <div class="input">
                                <label for="email">Email</label>
                                <input type="text" placeholder="Enter email" id="email" name="email" required>
                                <div class="error"></div>
                            </div>

                            <div class="input">
                                <label for="password">Password</label>
                                <input type="password" placeholder="Enter password" id="password" name="password" required>
                                <div class="error"></div>
                            </div>

                            <div class="input"> 
                                <label for="role">Role</label>
                                <select name="role" id="role">
                                    <option value="admin">Admin</option>
                                    <option value="member">Member</option>
                                </select>
                            </div>
                            
                            <button type="submit" id="saveuser" name="saveuser">Save</button>
                            <div id="result">

                            </div>
                        </form>
                    </div>
                </section>          
</body>
</html>

