<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
        $s_username = $_POST['s_username'];
        $s_password =  $_POST['s_password'];
        $sql = "SELECT * FROM student WHERE s_username = '$s_username' AND s_password = '$s_password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if($row > 0){
            $_SESSION['s_id'] = $row['s_id'];
            $_SESSION['s_idstu'] = $row['s_idstu'];
            $_SESSION['s_title'] = $row['s_title'];
            $_SESSION['s_name'] = $row['s_name'];
            $_SESSION['s_surname'] = $row['s_surname'];
            $_SESSION['s_level'] = $row['s_level'];
            $_SESSION['s_room'] = $row['s_room'];
            $_SESSION['s_color'] = $row['s_color'];
            $_SESSION['s_status'] = $row['s_status'];
            header("location:../vote_yrcambassador.php");
        }else{
            header("location:../index.php?status=error");
        }
    }

?>