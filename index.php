<!DOCTYPE html>
<html lang="en">
<?php
    require_once 'component/head.php';
?>
<style>
body{
    font-family: 'Kanit' ,sans-serif;
    background-image:url('assets/img/bg.jpg');
    background-size:fixed;
    
}
.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}
.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	z-index: -1;
}
.wave2{
	position: fixed;
	left: 0;
	z-index: -1;
    margin-top:200px;
    margin-left: 150px;
    height: 55%;
}
.wave3{
	position: fixed;
	left: 0;
	z-index: -1;
    margin-top:150px;
    margin-left: 130px;
    height: 50%;
}
.wave4{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
}
.container-fluid{
    max-width: 700px;
}
</style>
<body >

                <?php
                    require_once 'component/navbar.php';
                ?>
                <div class="col-xl-12 mb-5 wow slideInUp" style="margin-top:130px;">
                        <div class="container-fluid mb-0" style="backdrop-filter: blur(24px);background:#e91e63;border-radius:10px 10px 0px 0px;">
                            <h3 class="pt-2 pb-2" align="center" style="font-weight:500;font-size:18px;color:white">
                            
                            ระบบโหวตทูตกิจกรรมฯ
                            </h3>
                        </div>
                        <div class="container-fluid pl-xl-5 pr-xl-5 "  style="backdrop-filter: blur(24px);background:rgba(255, 255, 255, 1);border-radius:0px 0px 10px 10px;margin-top:-10px;box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2)">
                            <p align="center"><img class="pt-4 img-fluid d-none d-xl-block" src="assets/img/logo.png" width="25%"></p>
                            <p align="center"><img class="pt-4 img-fluid d-xl-none" src="assets/img/logo.png" width="45%"></p>
                            <h2 class="" align="center" style="font-weight:600;color:#e91e63"><i class="fa fa-vote-yea"></i>&nbsp;YRC Vote Ambassadors 2020</h2>
                            <h4 align="center">Yupparaj Wittayalai School</h4>
                            


                            <div class="col-xl-12 py-4 pl-xl-5 pr-xl-5">
                            <?php
                                if(isset($_GET['status'])){
                                    $status = $_GET['status'];
                            ?>
                                <?php if($status == 'error'){ ?>
                                    <div class="alert alert-danger" style="border-radius: 5px;">
                                        <div class="container text-center">
                                            <b></b> เลขประจำตัวประชาชน หรือ รหัสผ่าน ไม่ถูกต้อง !
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <hr>
                                <form method="post" action="process/loginact.php" styl>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" style="color: #464646">เลขประจำตัวประชาชน</label>
                                        <input type="name" class="form-control" placeholder="เลขประจำตัวประชาชน" name="s_username"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" style="color: #464646">รหัสผ่าน</label>
                                        <input type="name" class="form-control"  placeholder="พิมพ์รหัสผ่าน 5 ตัวหลังบัตรประชาชน"  name="s_password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success btn-sm w-100" style="font-size:15px">เข้าสู่ระบบ</button>
                                </form>
                                <p align="center"><a href="result_yrcambassador.php">รายงานผลโหวต</a></p>
                                <hr>
                                <p align="center" style="color: #929292">©<?php echo date("Y") ?> All Right Reserved Kampanart.Ch , Ratchanon.Mo , Kru Viratchai.Ju | Web & Server developer Youth Computer YRC</p>
                            </div> 
                        </div>
                </div>
<?php
    require_once 'component/jslink.php';
?>
</body>
</html>