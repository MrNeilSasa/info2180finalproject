

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

    <section class="sects">
        <div class="body-heading">
            <h2> New Contact</h2>
        </div>

        <section class="sbody">
        
            <div class="body-content">

                <form action="newcontact.php" id="form" method="post">

                <div class="title-input">
                    <label for="title">Title</label>
                    <select id="title" name="title">
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Ms">Ms</option>
                        <option value="Dr">Dr</option>
                        <option value="Prof">Prof</option>
                    </select>
                </div>

                <div class="input">
                </div>

                <div class="input">
                    <label for="fname">First name</label>
                        <input type="text" placeholder="Enter first name" id="fname" name="firstname">
                        <div class="error"></div>
                </div>
        
                <div class="input">
                    <label for="lname">Last name</label>
                        <input type="text" placeholder="Enter last name" id="lname" name="lastname">
                        <div class="error"></div>
                </div>
        
                <div class="input">
                    <label for="email">Email</label>
                        <input type="text" placeholder="something@example.com" id="email" name="email">
                        <div class="error"></div>
                </div>
        
                <div class="input"> 
                    <label for="tele">Telephone</label>
                        <input type="number" id="tele" name="telephone" >
                        <div class="error"></div>
                </div>
        
                <div class="input"> 
                    <label for="company">Company</label>
                        <input type="text" id="compnay" name="company">
                        <div class="error"></div>
                </div>
            
                <div class="input"> 
                    <label for="type">Type</label>
                        <select id="type" name="type">
                            <option value="sales">Sales Lead</option>
                            <option value="support">Support</option>
                        </select>
                        <div class="error"></div>
                </div>
            
                <div class="input"> 
                    <label for="assign">Assigned To</label>
                        <select id="assign" name="assigned_to">
                            <option value=""> </option>
                        </select>
                    <div class="error"></div>
                </div>

                    <div class="button"> 
                        <button type="submit"id="saveuser" name="save" onclick="message();">Save</button>
                    </div>
                    <br>
                    <div class="success" id="success"> User Successfully Saved.</div>
                    <div class="failed" id="failed"> Fields are Empty. </div>
                </form>
            </div>
        </section>           
    </section>        
</body>
</html>



<?php
    session_start();

    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $telephpne = $_POST['telephone'];
    $company = $_POST['company'];
    $type = $_POST['type'];
    $assigned_to = $_POST['assigned_to'];

    define("DB_SERVER", "localhost");
    define("DB_USERNAME","root");
    define("DB_PASSWORD", "");
    define("DB_NAME","dolphin_crm");


    $conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("insert into Contacts (title,firstname, lastname, email, telephone, company, type, assigned_to) values (?, ?, ?, ?,?,?,?,?)");
    $stmt->bind_param("ssssisss", $title, $firstname, $lastname, $email, $telephpne, $company, $type, $assigned_to);
    $stmt->execute();
    echo"registration Successfully...";
    $stmt->close();
    $conn->close();
    
?>