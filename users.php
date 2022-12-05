<?php

session_start();

$conn = mysqli_connect('localhost',"root", "", "dolphin_crm");
if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}
else{

    $data = 'SELECT firstname, lastname, email, role, created_at FROM Users';
    $result = mysqli_query($conn,$data);
    $userarray = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($conn);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="userstyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<header>
    <img src="dolphin.jpeg">
    <h1> Dolphin CRM </h1>
</header> 
<body>

<aside class="nav-bar">

    
    
        <ul>
            <li><i class="fas fa-home"></i><a href="dashboard.php">Home</a></li>
            <li><i class="fas fa-address-book"></i><a href="contact.php">New Contact</a></li>
            <li><i class="fas fa-user"></i><a href="users.php">Users</a></li>
            <li><i class="fas fa-sign-out-alt"></i><a href="index.html"> Logout </a></li>

        </ul>
       
</aside>


    <div class="container" name="users">
            <?php foreach($userarray as $userinfo){ ?>
                <div id='name'>
                <?php echo htmlspecialchars($userinfo['firstname'].' '.$userinfo['lastname']); ?>
                </div>
                <div id='email'> 
                    <?php echo htmlspecialchars($userinfo['email']); ?>
                </div>
                <div id='role'> 
                    <?php echo htmlspecialchars($userinfo['role']); ?>
                </div>
                <div id='created_at'> 
                    <?php echo htmlspecialchars($userinfo['created_at']); ?> 
                </div>
            <?php } ?>
    </div>
</body>
<html>