<?php

if(isset($_GET['emp_id'])){
    include('include/connect.php');
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $emp_id = validate($_GET['emp_id']);
    $sql ="DELETE FROM employees WHERE emp_id=$emp_id";
    $result=mysqli_query($db, $sql);
    if($result){
        $_SESSION['delete']="<div class='success'> Record Successfully Deleted</div>";
        //redirect page to manage admin
        header("Location: employees.php");
    }
    
    else{
        $_SESSION['delete']="<div class='error'> Failed to Delete the Record</div>";
        //redirect page to manage admin
        header("Location: employees.php");
    }
}
    
else {
    header("Location: employees.php");
}

?>

