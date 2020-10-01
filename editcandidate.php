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
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM candidate WHERE c_id = '$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    }
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
                    <h4 class="text-primary text-center">บริหารจัดการผู้สมัคร</h4>
                    <hr>
                    <h5>ส่วนที่ 1 ข้อมูลทั่วไป</h5>
                  
                    <form method="post" action="process/editcandidate.php" enctype="multipart/form-data">
                        <div class="form-group d-none">
                            <label for="exampleInputEmail1">ไอดีการแก้ไข</label>
                            <input type="name" class="form-control" value="<?php echo $row['c_id']; ?>" name="c_id" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">ชื่อ-สกุล</label>
                            <input type="name" class="form-control" value="<?php echo $row['c_name']; ?>" name="c_name">
                        </div>
                        
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">เบอร์</label>
                            <input type="name" class="form-control" value="<?php echo $row['c_number']; ?>" name="c_number">
                        </div>

                        <input type="file" name="c_pic">

                        <div class="col-xl-12 text-center">
                            <img src="uploads/<?php echo $row['c_pic']; ?>" class="img-fluid w-50">
                        </div>
                        

                                              
                        <button type="submit" name="submit" class="btn btn-warning btn-sm w-100" style="font-size:15px">แก้ไข</button>                 
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