<?php
    session_start();
    include("connect/connect.php");
    include("function.php");
    if(!$_SESSION['s_id']){
        header("location:index.php?status=error");
    }else{
        if($_SESSION['s_status'] == 'U'){
            header("location:vote_yrcambassador.php");
        }else{


?>
<!DOCTYPE html>
<html lang="en">
    <?php
        require_once 'component/head.php';
    ?>
    <style>
        body{
            font-family: 'Mitr' ,sans-serif;
            background-image: url(assets/img/bg.jpg);
        }
    </style>

<body>
    <?php
        require_once 'component/navbar2.php';
    ?>

    <div class="container mt-5">
        <div class="row">

        <?php
                require_once 'component/box.php';
            ?>

            <div class="col-xl-8 col-lg-7 mt-5 ">
                <div class="col-md-12 bg-white py-4" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 7px solid #e91e63;border-radius:7px">
                    <h4>เพิ่มข้อมูลผู้สมัคร</h4>
                    <?php boxstatus(); ?>
                    <hr>
                    
                    
                    <form method="post" action="process/addcandidate.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ชื่อ-สกุล</label>
                            <input type="name" class="form-control" name="c_name">
                        </div>
               
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">เบอร์</label>
                            <input type="name" class="form-control" name="c_number">
                        </div>
                      
                        <label for="exampleInputEmail1">อัพโหลดรูป</label>
                        <br>
                        <input type="file" name="c_pic">
                       
                                              
                        <button type="submit" name="submit" class="btn btn-rose btn-sm w-100" style="font-size:15px">เพิ่ม</button>                 
                    </form>

               
                  

                    
                </div>
                
                
                
            </div>
            
        </div>
    </div>



    <?php
        require_once 'component/jslink.php';
    ?>
    
</body>
</html>
<?php } ?>
<?php } ?>