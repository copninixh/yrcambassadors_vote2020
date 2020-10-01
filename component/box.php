<div class="col-xl-4 col-lg-5 mt-5 wow fadeInLeft" >
                <div class="col-md-12 bg-white py-4" style="border-radius: 7px">
                    <p class="text-center"><img src="assets/img/logo.png" class="img-fluid w-50" alt=""></p>
                    <h4 class="text-rose text-center">ข้อมูลผู้มีสิทธิในการโหวต</h4>
                    
                    <hr>
                    <p style="font-size: 16px;">
                    <i class="fas fa-user-graduate text-rose"></i> ชื่อ : <?php echo $_SESSION['s_title']; echo $_SESSION['s_name']; echo '&nbsp;'; echo $_SESSION['s_surname']; ?> <br>
                    <i class="fas fa-chart-line text-rose"></i> ชั้นมัธยมศึกษาปีที่ <?php echo $_SESSION['s_level']; ?>/<?php echo $_SESSION['s_room']; ?> <br>
                    <?php
                        $sqlcheck = "SELECT * FROM vote WHERE s_id = '$_SESSION[s_id]'";
                        $querycheck = mysqli_query($conn,$sqlcheck);
                        $numcheck = mysqli_num_rows($querycheck);
                        if($numcheck == '1'){
                    ?>
                        <a href="#" class="btn btn-success w-100 btn-sm" style="font-size: 15px;"><i class="fas fa-vote-yea"></i> โหวตเรียบร้อยแล้ว</a>
                    <?php }else{?>
                        <a href="#" class="btn btn-danger w-100 btn-sm" style="font-size: 15px;"><i class="fas fa-times"></i> ยังไม่ได้โหวต</a>
                    <?php }?>
                   
                  
                    <?php if($_SESSION['s_status'] == 'A'){ ?>
                        <hr>
                        <div class="list-group ">
                            <a href="#" class="list-group-item list-group-item-action active" style="border-radius: 5px 5px 0px 0px;">ระบบบริหารจัดการ (แอดมิน)</a>
                            <a href="manage-candidate.php" class="list-group-item list-group-item-action" style="background-color: #e9ecef;"><i class="fas fa-vote-yea"></i> จัดการผู้สมัคร</a>
                            <a href="result_yrcambassador.php" class="list-group-item list-group-item-action" style="background-color: #e9ecef;"><i class="fas fa-chart-bar"></i> รายงานผลลงคะแนนเสียง</a>
                            <a href="history_student.php" class="list-group-item list-group-item-action" style="background-color: #e9ecef;"><i class="fas fa-chart-bar"></i> ประวัติการลงคะแนน</a>
                        </div> 
                    <?php }else{ ?>

                    <?php } ?>
                </div>
</div>