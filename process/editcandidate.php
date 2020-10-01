<?php 
    session_start();
    include("../connect/connect.php");
    if($_POST['c_id'] == ''){
        header("location:../manage-candidate.php?status=notfoundid");
    }
    $c_name = $_POST['c_name'];
    $c_number = $_POST['c_number'];

    $c_id = $_POST['c_id'];
    

    $sql = "UPDATE candidate SET
    c_name = '$c_name',
    c_number = '$c_number'
    
   WHERE c_id = '$c_id'";

   $result = mysqli_query($conn,$sql);
   if($result){
        header("location:../manage-candidate.php?status=successedit");
   }else{
        header("location:../manage-candidate.php?status=erroredit");
   }
?>