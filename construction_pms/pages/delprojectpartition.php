<?php

if(isset($_GET['prog_id'])){
    include '../includes/db.php';
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $prog_id = validate($_GET['prog_id']);
    $sql ="DELETE FROM project_progress WHERE prog_id=$prog_id";
    $result=mysqli_query($conn, $sql);
    if($result){
        $_SESSION['delete']="<div class='success'> Record Successfully Deleted</div>";
        //redirect page to manage admin
        header("Location: update_progress.php");
    }
    
    else{
        $_SESSION['delete']="<div class='error'> Failed to Delete the Record</div>";
        //redirect page to manage admin
        header("Location: update_progress.php");
    }
}
    
else {
    header("Location: update_progress.php");
}

?>

