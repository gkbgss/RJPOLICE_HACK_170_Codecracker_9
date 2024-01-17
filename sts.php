<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

		$sql = "SELECT * FROM users where id=2";

		$result = mysqli_query($conn, $sql);
         
               $row=mysqli_fetch_array($result);

               


$a= $row['progress'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>CHECK YOUR STATUS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>WELCOME, <?php echo $_SESSION['name']; ?> FOR CHECK STATUS</h1>
     <label for="points">PROGRESS:</label>
<input type="range" id="points" disabled value="<?php echo $a ?>"  name="points" min="0" max="100">
    DESCRIPTION : <h1> <?php echo $row['description'];?></h1>

     <a href="home.php" class="a">BACK TO HOME</a>
     <a href="logout.php" class="a">Logout</a>
</body>
</html>

<?php 
}
else{
     header("Location: index.php");
     exit();
}
 ?>