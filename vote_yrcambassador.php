<?php
    session_start();
    include("connect/connect.php");
    include("function.php");
    if(!$_SESSION['s_id']){
        header("location:index.php?status=error");
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

    <div class="container mt-5 wow fadeInRight">
        <div class="row">
            <?php
                require_once 'component/box.php';
            ?>
            <?php
                $sqlvote = "SELECT * FROM vote WHERE s_id = '$_SESSION[s_id]'";
                $queryvote = mysqli_query($conn,$sqlvote);
                $numvote = mysqli_num_rows($queryvote);
                $row2 = mysqli_fetch_array($queryvote);

                if($numvote == '1'){
            ?>
                <div class="col-xl-8 col-lg-7 mt-5 mb-5 ">
                    <div class="col-md-12 bg-white py-4" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #e91e63;border-radius:5px">                   
                        <?php boxstatus(); ?>
                    <div class="row justify-content-center">

                        <?php
                            $sql = "SELECT * FROM candidate WHERE c_number = '$row2[c_number]' ";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($result)){
                        ?>
                        
                            
                            <div class="col-xl-6 col-lg-7">
                                <div class="col-xl-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #e91e63;border-radius:5px">
                                    <h4 class="text-center text-rose"><i class="fas fa-vote-yea"></i> หมายเลข <?php echo $row['c_number']; ?></h4>
                                    <h4 class="text-center text-rose"><?php echo $row['c_name']; ?></h4>
                                    <img src="uploads/<?php echo $row['c_pic']; ?>" class="img-fluid">
                                   
                                    <a href="#" class="btn btn-success w-100 btn-sm" style="font-size: 15px;"><i class="fas fa-check-square"></i> คุณได้โหวตเลือกแล้ว</a>
                                    
                                </div>  
                            </div>
                            
                        <?php } ?> 
                        </div>

                       
                    </div>   
                </div>

            <?php }else{ ?>
                <div class="col-xl-8 col-lg-7 mt-5 mb-5 ">
                <div class="col-md-12 bg-white py-4" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #e91e63;border-radius:5px">
                    <!--div class="w-100 text-light text-center" style="background-color:#e91e63;border-radius:10px 10px 0px 0px">
                        <h4>วีดิโอแนะนำผู้เข้าประกวดทูตกิจกรรม YRC Ambassadors 2020</h4>
                    </div>
                    <div class="row">
                   
                        <div class="col-xl-6 mb-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FYupparaj.Committee%2Fvideos%2F2778974285705403%2F&show_text=0"   style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>
                            </div>
                        </div>

                        <div class="col-xl-6 mb-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=""   style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>
                            </div>
                        </div>
                 
                 
                    </div-->
                   
                       
                    <div class="w-100 text-light text-center" style="background-color:#e91e63;border-radius:10px 10px 0px 0px">
                        <h4>รายละเอียดทูตกิจกรรม YRC Ambassadors 2020</h4>
                    </div>
                    <div class="row">
                    <?php
                        $sql = "SELECT * FROM candidate ORDER BY c_id ASC";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)){
                    ?>
                       
                        
                        <div class="col-xl-4 col-lg-4 mt-2">
                            <div class="col-xl-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #e91e63;border-radius:5px">
                                <h4 class="text-center" style="color:#e91e63"><i class="fas fa-vote-yea"></i> หมายเลข <?php echo $row['c_number']; ?></h4>
                                <img src="uploads/<?php echo $row['c_pic']; ?>" class="img-fluid">
                                <form action="process/voteact.php" method="post">
                                    <div class="form-group d-none">
                                        <input type="name" class="form-control" value="<?php echo $row['c_number']; ?>" name="c_number" required readonly>
                                        <input type="name" class="form-control" value="<?php dateupdate(); ?>" name="v_datetime" required readonly>
                                        <input type="name" class="form-control" value="<?php echo $_SESSION['s_level']; ?>" name="s_level" required readonly>
                                        <input type="name" class="form-control" value="<?php echo $_SESSION['s_id']; ?>" name="s_id" required readonly>
                                    </div>
                                    <button onClick="javascript: return confirm('ยืนยันการโหวต เบอร์ <?php echo $row['c_number']; ?> (<?php echo $row['c_name']; ?>) ใช่หรือไม่?');" name="insert" class="btn btn-primary w-100 btn-sm" style="font-size: 15px;"><i class="fas fa-check-square"></i> โหวตคนนี้</button>
                                
                                </form>    
                            </div>  
                        </div>
                        
                    <?php } ?>

                       
                      

                       
                    </div>

                    
                </div>
                
                
                
            </div>
            <?php }?>

            
            
        </div>
    </div>



    <?php
        require_once 'component/jslink.php';
    ?>
    
</body>
</html>
<?php } ?>