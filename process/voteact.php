<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['insert'])){
        $c_number = $_POST['c_number'];
        $s_id = $_POST['s_id'];
        $s_level = $_POST['s_level'];
        $v_datetime = $_POST['v_datetime'];
        $check = "SELECT * FROM vote WHERE s_id = '$s_id'";
        $query = mysqli_query($conn,$sql);
        $numcheck = mysqli_num_rows($query);
        if($numcheck == '1'){
            header("location:../vote_yrcambassador.php?status=error");
        }else{
            $sql = "INSERT INTO `vote` (`v_id`, `s_id`,`s_level`, `c_number`, `v_datetime`) 
            VALUES (NULL, '$s_id','$s_level', '$c_number', '$v_datetime')";
            $result = mysqli_query($conn,$sql);
            if($result){
                header("location:../vote_yrcambassador.php?status=success");
            }else{
                header("location:../vote_yrcambassador.php?status=error");
            }
        }
        
        
    }

?>