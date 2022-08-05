<?php 
session_start();
  include 'include/gifnoc.php';
  include 'include/noitcnuf.php';
  if(!empty($_POST["btn_submit1"])&&$_POST["add_note1"]!=''){
    $sql_insert = "INSERT INTO note_tb (note_detail,note_type) values ('$_POST[add_note1]',1)";
    if($result = mysqli_query($conn,$sql_insert)){
     header("location:/Cockpit65R10/notice.php");
    }else{
      echo $sql_insert;
    }
  }
  if(!empty($_POST["btn_submit2"])&&$_POST["add_note2"]!=''){
    $sql_insert = "INSERT INTO note_tb (note_detail,note_type) values ('$_POST[add_note2]',2)";
    if($result = mysqli_query($conn,$sql_insert)){
     header("location:/Cockpit65R10/notice.php");
    }else{
      echo $sql_insert;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COCKPIT:KET65 | ระบบรายงานตัวชี้วัดเขตสุขภาพที่ 10 ปีงบประมาณ 2565</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- JQVMap -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <style>
body {
  font-family: "Prompt", sans-serif;

}
</style>
  <script>
    function popupwindow(url, title, w, h) {

  var left = (screen.width/2)-(w/2);
 // var top = (screen.height/2)-(h/2);
  var top = 0;
  return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 
  </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
 
<?php include 'navbar.php';?>
<?php include 'aside.php';?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
  <!-- Content Wrapper. Contains page content -->
  <div class="card card-primary">
    <!-- Content Header (Page header) -->
    <div class="card-header">
      <div class="container-fluid">
        <div class="row mb-2  ">
          <div class="col-sm-12">
            <h1 class="m-0" style="padding-top: 10px">
              ระบบรายงานตัวชี้วัดเขตสุขภาพที่ 10 ปีงบประมาณ 2565
              </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
       
        <div class="row">
<div class="col-lg-12 col-6" style="margin-bottom: 10px">
<style>
body {
  font-family: "Prompt", sans-serif;
}
</style>
    <div class="row">
          <div class="col-md-6">
            <div class="card card-success">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h2 class="card-title">ข้อเสนอแนะ</h2>
                </div>
              </div>
              <div class="card-body">
                  <form action="" method="post">
                    <table width=100%><tr><td>
                    <input type="text" name="add_note1" value="" placeholder="+เพิ่มข้อเสนอแนะ..." class="form-control"></td><td>
                    <input type="submit" name="btn_submit1" value="บันทึก" class="btn btn-primary form-control"></td></tr></table>
                  </form>
<table class="" width="100%" border=0>
  <?php
    $sql = "select * from note_tb where note_type = 1";
    $res = mysqli_query($conn, $sql);
    $no = 1;
    while($data1=mysqli_fetch_array($res,MYSQLI_ASSOC)){
        echo "<tr><td align=center valign=top width=20px>$no.</td><td><div>$data1[note_detail]</div></td><td width=5px align=center><button class=form-control sbtn btn-primary>EDIT</button></td></tr>";
        $no++;
    }
  ?>
</table>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
          <div class="col-md-6">
            <div class="card card-warning">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h2 class="card-title">ปัญหาและอุปสรรค</h2>
                </div>
              </div>
              <div class="card-body">
               <form action="" method="post">
                    <table width=100%><tr><td>
                    <input type="text" name="add_note2" value="" placeholder="+เพิ่มข้อมูลปัญหาอุปสรรค..." class="form-control"></td><td>
                    <input type="submit" name="btn_submit2" value="บันทึก" class="btn btn-primary form-control"></td></tr></table>
                  </form>
                  <table class="" width="100%" border=0>
  <?php
    $sql = "select * from note_tb where note_type = 2";
    $res = mysqli_query($conn, $sql);
    $no = 1;
    while($data1=mysqli_fetch_array($res,MYSQLI_ASSOC)){
        echo "<tr><td align=center valign=top width=20px>$no.</td><td><div>$data1[note_detail]</div></td><td width=5px align=center><button class=form-control sbtn btn-primary>EDIT</button></td></tr>";
        $no++;
    }
  ?>
</table>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
            </div>
          </div>
        </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div width="100%" style="position: fixed;bottom: 10px;margin-left: 100px" align="center">


</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,"paging": true,"searching": true,
      "ordering": true,"info": true,
      "buttons": ["copy", "csv", "excel", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
