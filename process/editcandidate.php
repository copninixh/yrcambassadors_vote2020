<?php 
    session_start();
    include("../connect/connect.php");
    if($_POST['c_id'] == ''){
        header("location:../manage-candidate.php?status=notfoundid");
    }
    $c_name = $_POST['c_name'];
    $c_number = $_POST['c_number'];

    $c_id = $_POST['c_id'];
    $c_pic = $_FILES['c_pic']['name'];
    if($c_pic == ''){
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
    }else{
          $temp = explode('.',$_FILES['c_pic']['name']);
          $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
          $uploadDir = "../uploads/"; 
          $fileName = substr( str_shuffle( $chars ), 0, 5 ). '.'.end($temp) ;
          $uploadFilePath = $uploadDir.$fileName; 
          move_uploaded_file($_FILES['c_pic']['tmp_name'], $uploadFilePath);
          $sql = "UPDATE candidate SET
          c_name = '$c_name',
          c_number = '$c_number',
          c_pic = '".$fileName."'
          WHERE c_id = '$c_id'";
          $result = mysqli_query($conn,$sql);
          if($result){
               header("location:../manage-candidate.php?status=successedit");
          }else{
               header("location:../manage-candidate.php?status=erroredit");
          }
    }
   
?>