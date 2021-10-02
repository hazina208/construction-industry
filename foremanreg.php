<?php include_once("header2.php"); ?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
     <meta charset ="UTF-8">       
     <meta http-equiv="X-UA-Compatible" content="IE-edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Foreman Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="freg-check.php" method="post">
     	<h2>FOREMAN REGISTRATION</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>First Name</label>
          <?php if (isset($_GET['fname'])) { ?>
               <input type="text" 
                      name="fname" 
                      placeholder="First Name"
                      value="<?php echo $_GET['fname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="fname" 
                      placeholder="First Name"><br>
          <?php }?>

          <label>Middle Name</label>
          <?php if (isset($_GET['mname'])) { ?>
               <input type="text" 
                      name="mname" 
                      placeholder="Middle Name"
                      value="<?php echo $_GET['mname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="mname" 
                      placeholder="Middle Name"><br>
          <?php }?>

          <label>Last Name</label>
          <?php if (isset($_GET['lname'])) { ?>
               <input type="text" 
                      name="lname" 
                      placeholder="Last Name"
                      value="<?php echo $_GET['lname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="lname" 
                      placeholder="Last Name"><br>
          <?php }?>

          <label>ID Number</label>
          <?php if (isset($_GET['id'])) { ?>
               <input type="text" 
                      name="id" 
                      placeholder="ID Number"
                      value="<?php echo $_GET['id']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="id" 
                      placeholder="ID Number"><br>
          <?php }?>

          <label>Phone Number</label>
          <?php if (isset($_GET['phone'])) { ?>
               <input type="text" 
                      name="phone" 
                      placeholder="Phone Number"
                      value="<?php echo $_GET['phone']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="phone" 
                      placeholder="Phone Number"><br>
          <?php }?>

          <label>Email Address</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email Address"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email Address"><br>
          <?php }?>

          <label>User Name</label>
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


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="foremanlogin.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>