<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="homestyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
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

    <div class="dashboard-container">
        <h2>Dashboard </h2>
        <i class="fas fa-pls"></i><button type="button" id="addBtn" class="addbtn">Add Contact </button> 
    </div>

    <div class="filter">
        <h3><i class='fas fa-filter'></i>Filter By:</label>
        <button id="all" class="filterbtn">All</button>
        <button id="saleslead" class="filterbtn">Sales Lead</button>
        <button id="Support" class="filterbtn">Support</button>
        <button id="assigned" class="filterbtn">Assigned to Me</button>
    </div>




</body>
</html>