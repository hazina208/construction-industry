<?php

if(isset($_GET['equip_id'])){
    include('include/connect.php');
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $equip_id = validate($_GET['equip_id']);
    $sql ="DELETE FROM equipments WHERE equip_id=$equip_id";
    $result=mysqli_query($db, $sql);
    if($result){
        $_SESSION['delete']="<div class='success'> Record Successfully Deleted</div>";
        //redirect page to manage admin
        header("Location: equipments.php");
    }
    
    else{
        $_SESSION['delete']="<div class='error'> Failed to Delete the Record</div>";
        //redirect page to manage admin
        header("Location: equipments.php");
    }
}
    
else {
    header("Location: equipments.php");
}

?>

