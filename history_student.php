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
    require_once 'component/navbar.php';
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-12 text-center mt-5 wow fadeInUp" align="center">
                <div class="col-xl-12 bg-white py-4 mb-5" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 5px;">
                    <div class="container">
                        <h3 class="text-rose"><i class="fas fa-chart-bar"></i> YRC Ambassadors 2020 </h3>
                        <h4 class="text-primary">ประวัติการโหวตเลือกของนักเรียน</h4>
                        <?php 
                            if(!$_SESSION['s_id']){
                                echo '<a href="index.php" class="btn btn-primary btn-sm w-50">กลับหน้าหลัก</a>';
                            }else{
                                echo '<a href="vote_yrcambassador.php" class="btn btn-primary btn-sm w-50">กลับหน้าหลัก</a>';
                            }
                        ?>
                        
                        <hr>                
                        <div class="bg-rose text-light text-center mt-3 mb-3" style="padding: 5px;background-color:#e91e63">
                            <h4><i class="fas fa-chart-bar"></i> ประวัติการโหวต</h4>
                        </div>
                        <table class="table" id="table_id">
                            <thead>
                                <tr>
                                    <th>ชื่อ-สกุล</th>
                                    <th>เบอร์ที่โหวต</th>
                                    <th>วัน-เวลา ในการโหวต</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                        <?php
                            $sql = "SELECT * FROM vote ORDER BY v_id ASC";
                            $query = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($query)){

                            
                        ?>
                            
                            <tr>
                        <?php 
                            $sqlreadstu = "SELECT * FROM student WHERE s_id = '$row[s_id]'";
                            $querystu = mysqli_query($conn,$sqlreadstu);
                            while($rowstu = mysqli_fetch_array($querystu)){

                            
                        ?>
                            <td scope="row"><?php echo $rowstu['s_title']; echo $rowstu['s_name']; echo '&nbsp'; echo $rowstu['s_surname'];  ?></td>
                            
                                    
                        <?php }?>
                       
                            <td><?php echo $row['c_number']; ?></td>
                            <td><?php echo $row['v_datetime']; ?></td>
                                    
                                    
                                
                               
                            </tr>
                        <?php }?>
                        
                        </tbody>
                        </table>
                        
                        

                    </div>
    
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