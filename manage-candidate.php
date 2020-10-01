<?php
    session_start();
    include("connect/connect.php");
    include("function.php");
    if(!$_SESSION['s_id']){
        header("location:index.php?status=error");
    }else{
        if($_SESSION['s_status'] == 'U'){
            header("location:evotecolor63.php");
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
                    <h4 class="text-primary text-center">บริหารจัดการผู้สมัคร</h4>
                    <?php boxstatus(); ?>
                    <hr>
                    <a href="addcandidate.php" class="btn btn-primary w-100 btn-sm" style="font-size: 15px;">เพิ่มผู้สมัคร</a>
                    <table class="table text-center table-responsive table-bordered">
                        <thead class="bg-success text-light">
                            <tr>
                                <th>รูปภาพ</th>
                               
                                <th>เบอร์</th>
                                <th>ชื่อ</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          
                    <?php
                        $sql = "SELECT * FROM candidate ORDER BY c_id ASC";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)){
                    ?>
                     <tr>
                                <td style="width: 200px;"><img src="uploads/<?php echo $row['c_pic'];?>" class="img-fluid w-50" alt=""></td>
                                <td style="width: 200px;"><?php echo $row['c_number']; ?></td>
                                <td style="width: 200px;"><?php echo $row['c_name']; ?></td>
                                <td><a href="editcandidate.php?id=<?php echo $row[0] ?>" class="btn btn-warning" style="font-size: 16px;">แก้ไข</a></td>
                                <td><a href="process/deletecandidate.php?id=<?php echo $row[0] ?>" class="btn btn-danger" style="font-size: 16px;">ลบ</a></td>
                            </tr>
                    <?php }?>
                    </tbody>
                    </table>
                    
                   
                  

                    
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