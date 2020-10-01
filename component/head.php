<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: YRC Ambassadors 2020 | ระบบโหวตทูตกิจกรรมฯ โรงเรียนยุพราชวิทยาลัย จังหวัดเชียงใหม่ ::</title>
    <link rel="icon" href="assets/img/logo.png" type="image/png" >
    <link href="assets/css/material-kit.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.typekit.net/ply8pcr.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Niramit|Pattaya|Pridi|Sarabun|Athiti|Chakra+Petch|K2D|Krub|Mitr|Pridi|Athiti&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/wow.js"></script>
    <script>
         new WOW().init();
    </script>
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.21/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.21/datatables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
        $('#table_id').dataTable( {
                            "oLanguage": {
                            "sLengthMenu": "แสดง _MENU_ คน ต่อหน้า",
                            "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                            "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ คน",
                            "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 คน",
                            "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ คน)",
                            "sSearch": "ค้นหา :"
                    }
        } );
        } );
    </script>
    <script>
        function archiveFunction() {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: "Are you sure?",
  text: "But you will still be able to retrieve this file.",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, archive it!",
  cancelButtonText: "No, cancel please!",
  closeOnConfirm: true,
  closeOnCancel: true
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = 'process/voteact.php';          // submitting the form when user press yes
  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
}

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">


        
</head>