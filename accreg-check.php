<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['fname']) && isset($_POST['mname'])
   && isset($_POST['lname']) && isset($_POST['id'])
    && isset($_POST['phone']) && isset($_POST['email'])
    && isset($_POST['uname'])
	&& isset($_POST['password']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    
	$fname = validate($_POST['fname']);
	$mname = validate($_POST['mname']);
	$lname = validate($_POST['lname']);
	$idn = validate($_POST['id']);
	$phone = validate($_POST['phone']);
	$emailadd = validate($_POST['email']);

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	

	$user_data = 'fname='. $fname. '&mname='. $mname. 'lname='. $lname. '&id='. $idn. '&phone='. $phone. 'email='. $emailadd. '&uname='. $uname ;


	if (empty($fname)) {
		header("Location: accreg.php?error=First Name is required&$user_data");
	    exit();
	}
	else if (empty($lname)) {
		header("Location: accreg.php?error=Last Name is required&$user_data");
	    exit();
	}
	else if (empty($mname)) {
		header("Location: accreg.php?error=Middle Name is required&$user_data");
	    exit();
	}
	else if (empty($idn)) {
		header("Location: accreg.php?error=ID Number is required&$user_data");
	    exit();
	}
	else if (empty($phone)) {
		header("Location: accreg.php?error=Phone Number is required&$user_data");
	    exit();
	}
	else if (empty($emailadd)) {
		header("Location: accreg.php?error=Email Address is required&$user_data");
	    exit();
	}
	
	else if(empty($uname)){
        header("Location: accreg.php?error=Username is required&$user_data");
	    exit();
	}
	
	else if(empty($pass)){
        header("Location: accreg.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: accreg.php?error=Re Password is required&$user_data");
	    exit();
	}


	else if($pass !== $re_pass){
        header("Location: accreg.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM accountant WHERE username='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: accreg.php?error=The username is taken try another&$user_data");
	        exit();
		}

		$sql2 = "SELECT * FROM accountant WHERE id_no='$idn' ";
		$result2 = mysqli_query($conn, $sql2);

		if (mysqli_num_rows($result2) > 0) {
			header("Location: accreg.php?error=The ID Number is Taken&$user_data");
	        exit();
		}

		$sql3 = "SELECT * FROM accountant WHERE phone_no='$phone' ";
		$result3 = mysqli_query($conn, $sql3);

		if (mysqli_num_rows($result3) > 0) {
			header("Location: accreg.php?error=The Phone Number is Taken&$user_data");
	        exit();
		}


		else {
           $sql4 = "INSERT INTO accountant(first_name, middle_name, last_name, id_no, phone_no, email, username, password) VALUES('$fname', '$mname', '$lname', '$idn',  '$phone', '$emailadd', '$uname', '$pass' )";
           $result4 = mysqli_query($conn, $sql4);
           if ($result4) {
           	 header("Location: acclogin.php?success=Your account has been created successfully");
				
	         exit();
           }else {
	           	header("Location: accreg.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
}