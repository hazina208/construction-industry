<?php

if(isset($_GET['tool_id'])){
    include('include/connect.php');
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $tool_id = validate($_GET['tool_id']);
    $sql ="DELETE FROM tools WHERE tool_id=$tool_id";
    $result=mysqli_query($db, $sql);
    if($result){
        $_SESSION['delete']="<div class='success'> Record Successfully Deleted</div>";
        //redirect page to manage admin
        header("Location: tools.php");
    }
    
    else{
        $_SESSION['delete']="<div class='error'> Failed to Delete the Record</div>";
        //redirect page to manage admin
        header("Location: tools.php");
    }
}
    
else {
    header("Location: tools.php");
}

?>

