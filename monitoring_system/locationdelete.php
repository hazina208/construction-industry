<?php

if(isset($_GET['location_id'])){
    include('include/connect.php');
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $location_id = validate($_GET['location_id']);
    $sql ="DELETE FROM location WHERE location_id=$location_id";
    $result=mysqli_query($db, $sql);
    if($result){
        $_SESSION['delete']="<div class='success'> Location Successfully Deleted</div>";
        //redirect page to manage admin
        header("Location: locations.php");
    }
    
    else{
        $_SESSION['delete']="<div class='error'> Failed to Delete the Location</div>";
        //redirect page to manage admin
        header("Location: locations.php");
    }
}
    
else {
    header("Location: location.php");
}

?>


