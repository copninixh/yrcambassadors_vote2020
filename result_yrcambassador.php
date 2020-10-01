<?php
    session_start();
    include("connect/connect.php");
    include("function.php");
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
                        <h4 class="text-primary">รายงานผลการเลือกตั้งประธานคณะสี ปีการศึกษา 2563</h4>
                        <?php 
                            if(!$_SESSION['s_id']){
                                echo '<a href="index.php" class="btn btn-primary btn-sm w-50">กลับหน้าหลัก</a>';
                            }else{
                                echo '<a href="vote_yrcambassador.php" class="btn btn-primary btn-sm w-50">กลับหน้าหลัก</a>';
                            }
                        ?>
                        <hr>

                        <div class="bg-rose text-light text-center mt-3" style="padding: 5px;background-color:#e91e63">
                            <h4><i class="fas fa-chart-bar"></i> ภาพรวมการโหวต</h4>
                        </div>

                        <?php 
                            $sql = "SELECT * FROM student ORDER BY s_id ASC";
                            $result = mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($result);

                            $sql2 = "SELECT * FROM vote ORDER BY v_id ASC";
                            $result2 = mysqli_query($conn,$sql2);
                            $num2 = mysqli_num_rows($result2);

                            $result = $num2/$num;
                            $result100 = $result*100;
                        ?>

                        <h4 class="text-left"><i class="fas fa-clipboard-list text-rose"></i> จำนวนนักเรียนที่มีสิทธิ์โหวต <span  style="font-weight: 700;"><?php echo $num; ?></span> คน</h4>
                        <h4 class="text-left"><i class="fas fa-clipboard-list text-rose"></i> มีนักเรียนโหวตแล้ว  <span  style="font-weight: 700;"><?php echo $num2; ?></span> คน <span class="text-danger" style="font-size: 20px;">คิดเป็นร้อยละ <?php echo number_format((float)$result100, 2, '.', ''); ?></span> </h4>
                     
                            <?php
                                $query22 = "SELECT s_level, count(*) as number FROM vote GROUP BY s_level";
                                $result22 = mysqli_query($conn, $query22);
                            ?>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">  
                                google.charts.load('current', {'packages':['corechart']});  
                                google.charts.setOnLoadCallback(drawChart);  
                                function drawChart()  
                                {  
                                        var data = google.visualization.arrayToDataTable([  
                                                ['s_level', 'จำนวนผู้โหวต'],  
                                                <?php  
                                                while($row22 = mysqli_fetch_array($result22))  
                                                {  
                                                    echo "['ชั้นมัธยมศึกษาปีที่ ".$row22["s_level"]."', ".$row22["number"]." ],";  
                                                }  
                                                ?>  
                                            ]);  
                                        var options = {  
                                            title: 'นักเรียนที่มาโหวต',
                                            subtitle: 'แยกตามระดับชั้น',   
                                            pieHole: 100 
                                            };  
                                        var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));  
                                        chart.draw(data, options);  
                                }  
                            </script>  
                            <div class="container-fluid">
                                <div id="piechart" style="width: 100%; height: 400px;"></div>
                            </div>
                            
                        <h4 class="text-left"><i class="fas fa-clock text-rose"></i> ข้อมูลอัพเดทเมื่อ <?php dateupdate(); ?></h4>
                        <hr>
                        <div class="bg-rose text-light text-center mt-3" style="padding: 5px;background-color:#e91e63">
                            <h4><i class="fas fa-chart-bar"></i> คะแนน</h4>
                        </div>
                        <div class="row">
                        
                        <?php
                            $sqlstu = "SELECT * FROM candidate ORDER BY c_id ASC";
                            $querystu = mysqli_query($conn , $sqlstu);
                            while($rowstu = mysqli_fetch_array($querystu)){
                        ?>

                            <div class="col-xl-4 col-lg-4 mt-2">
                                <div class="col-xl-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #e91e63;border-radius:5px">
                                    <h4 class="text-center" style="color:#e91e63"><i class="fas fa-vote-yea"></i> หมายเลข <?php echo $rowstu['c_number']; ?></h4>
                                    <img src="uploads/<?php echo $rowstu['c_pic']; ?>" class="img-fluid">
                                    <?php
                                        $sqlnum = "SELECT * FROM vote WHERE c_number = '$rowstu[c_number]'";
                                        $querynum = mysqli_query($conn,$sqlnum);
                                        $numstu = mysqli_num_rows($querynum);
                                    ?>
                                    <h4 class="text-danger"><?php echo $numstu; ?> คะแนนโหวต</h4>
                                </div>  
                            </div>


                        <?php }?>
                        </div>
                        

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