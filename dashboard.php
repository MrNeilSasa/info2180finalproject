<?php

$host = 'localhost';
$username = 'info2180proj';
$password = 'password123';
$dbname = 'dolphin_crm';
error_reporting(0);
$all = $_GET['all'];
$saleslead = $_GET['saleslead'];
$support=$_GET['support'];

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

?>

<?php if($all == ''){
  $stmt = $conn -> query("SELECT * FROM contacts");
  $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
  ?>

  
  <table class='table'>
<thread>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Company</th>
    <th>Type</th>
    <th>     </th>
  </tr>
</thread>
<tbody>
<?php foreach($result as $row): ?>
    <tr>
      <td><?=$row['title'].' '.$row['firstname'].' '.$row['lastname'];?></td>
      <td><?=$row['email']; ?></td>
      <td><?=$row['company']; ?></td>
      <td><?=$row['type']; ?></td>
      <td><li><a href="contact.php">View</a></li></td>

    </tr>
  <?php endforeach; ?>
</tbody>
<?php } 

elseif($saleslead =='SalesLead'){
  $stmt = $conn -> query("SELECT * FROM contacts where type like '%SalesLead%'");
  $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
  ?>

  <table class='table'>
<thread>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Company</th>
    <th>Type</th>
    <th>     </th>
  </tr>
</thread>
<tbody>
<?php foreach($result as $row): ?>
    <tr>
      <td><?=$row['title'].' '.$row['firstname'].' '.$row['lastname'];?></td>
      <td><?=$row['email']; ?></td>
      <td><?=$row['company']; ?></td>
      <td><?=$row['type']; ?></td>

    </tr>
  <?php endforeach; ?>
</tbody>
<?php }
elseif($support == 'Support'){
    $stmt = $conn -> query("SELECT * FROM contacts where type like '%Support%'");
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table class='table'>
  <thread>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Company</th>
      <th>Type</th>
      <th>     </th>
    </tr>
  </thread>
  <tbody>
<?php foreach($result as $row): ?>
      <tr>
        <td><?=$row['title'].' '.$row['firstname'].' '.$row['lastname'];?></td>
        <td><?=$row['email']; ?></td>
        <td><?=$row['company']; ?></td>
        <td><?=$row['type']; ?></td>
        <td><li><a href="contact.php">View</a></li></td>

      </tr>
    <?php endforeach; ?>
  </tbody>

<?php } ?>