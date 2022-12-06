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
            <li><i class="fas fa-home"></i><a href="dashboard.html">Home</a></li>
            <li><i class="fas fa-address-book"></i><a href="contact.php">New Contact</a></li>
            <li><i class="fas fa-user"></i><a href="users.php">Users</a></li>
            <li><i class="fas fa-sign-out-alt"></i><a href="index.html"> Logout </a></li>

        </ul>
       
</aside>

<h2>User </h2>
        <i class="fas fa-pls"></i><button type="button" id="addBtn" class="addbtn"><i class="fa fa-plus" aria-hidden="true"></i><a href="newuser.html">Add User</a></button>

<table class='table'>
  <thread>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Role</th>
      <th>Created</th>
    </tr>
  </thread>
  <tbody>
<?php foreach($userarray as $row): ?>
      <tr>
        <td><?=$row['firstname'].' '.$row['lastname']; ?></td>
        <td><?=$row['email']; ?></td>
        <td><?=$row['role']; ?></td>
        <td><?=$row['created_at']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>

</body>
<html>
