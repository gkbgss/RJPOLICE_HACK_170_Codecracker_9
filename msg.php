<!DOCTYPE html>
<html>
<head>
	<title>SEND MESSAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="msg.php" method="post">
     	<h2>CREATE MESSAGE FOR  OFFICER</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>MAIL ID</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>CASE NUMBER</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>



          <label>MESSAGE</label>
          <textarea type="text" 
                 name="msg" 
                 placeholder="msg" rows="4" cols="50">
          </textarea><br>

     	<button type="submit">SUBMIT  MESSAGE</button>
          <a href="home.php" class="ca">BACK TO HOME</a>
     </form>
</body>
</html>