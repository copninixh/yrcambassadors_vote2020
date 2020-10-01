<?php

    include("connect/connect.php");

    

    function boxstatus(){
        if(isset($_GET['status'])){
            $status = $_GET['status'];
            if($status == 'successinsert'){
                echo '<div class="alert alert-success" style="border-radius: 5px;">
                    <div class="container">
                        <b></b> <i class="fas fa-check"></i> เพิ่มข้อมูลแล้ว !
                    </div>
                </div>';
            }else if($status == 'errorinsert'){
                echo '<div class="alert alert-danger" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-times"></i> ไม่สามารถเพิ่มข้อมูลได้ !
                    </div>
                </div>';
            }else if($status == 'erroredit'){
                echo '<div class="alert alert-danger" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-times"></i> ไม่สามารถแก้ไขข้อมูลได้ !
                    </div>
                </div>';
            }else if($status == 'notfoundid'){
                echo '<div class="alert alert-danger" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-times"></i> ไม่พบไอดีที่ต้องการแก้ไข !
                    </div>
                </div>';
            }else if($status == 'successedit'){
                echo '<div class="alert alert-success" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-check"></i> แก้ไขข้อมูลสำเร็จ !
                    </div>
                </div>';
            }else if($status == 'errordel'){
                echo '<div class="alert alert-danger" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-times"></i> ไม่สามารถลบข้อมูลได้ !
                    </div>
                </div>';
            }else if($status == 'successdel'){
                echo '<div class="alert alert-success" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-check"></i> ลบข้อมูลสำเร็จ !
                    </div>
                </div>';
            }else if($status == 'success'){
                echo '<div class="alert alert-success" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-check"></i> โหวตสำเร็จ !
                    </div>
                </div>';
            }
            else if($status == 'error'){
                echo '<div class="alert alert-danger" style="border-radius: 5px;">
                <div class="container">
                    <b></b><i class="fas fa-times"></i> ไม่สามารถโหวตได้ !
                </div>
            </div>';
            }
        }
    }

    function dateupdate(){
        $yaer  = date('Y');
        $month = date('m');
        $date = date('d/m/Y');
        $format = $date;

        echo $format;
        $th=mktime(gmdate("H")+7,gmdate("i"));
		$format="H:i";
							
		$str=date($format,$th);
		echo " เวลา: $str น.";
    }


?>