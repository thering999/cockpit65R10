<?php 
session_start();
if(!empty($_SESSION['nigol_epsmargorP'])){
  include 'include/gifnoc.php';
  include 'include/noitcnuf.php';
  $page = get_page($_SERVER['REQUEST_URI']); 
  $page_act[$page] = "active";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EPS | ระบบตรวจสอบผลการประเมินผลงานวิชาการ</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <style>
body {
  font-family: "Prompt", sans-serif;

}
table tr {
  font-size: 13px;
}
</style>
<script>
  function reset_btn(){
    header("location:/eps_program/admin_page.php");
  }
  $(function(){
          $("#btn_reset").click(function(){
              alert("xxxx");
          });
      });
  function checkempty(){
              if(document.getElementById('s_name').value!=''||document.getElementById('pos_number').value!=''&&document.getElementById('pos_number').value.length==6){
                document.getElementById('btn_submit').removeAttribute("disabled");
                document.getElementById('btn_submit').className = "btn btn-primary";
              }else{
                document.getElementById('btn_submit').setAttribute('disabled','disabled');
                document.getElementById('btn_submit').className = "btn btn-warning";
              }
            }
        </script>
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
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
<?php include 'navbar.php';?>
<?php include 'aside.php';?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
  <!-- Content Wrapper. Contains page content -->
  <div class="card card-warning">
    <!-- Content Header (Page header) -->
    <div class="card-header">
      <div class="container-fluid">
        <div class="row mb-2 card-warning">
          <div class="col-sm-6">
            <h1 class="m-0">ค้นหาผลงานวิชาการ</h1>
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
<div class="col-lg-12 col-6">
  <button name="btn_insert" class="btn btn-success" style="width: 200px" onclick="popupwindow('add_project.php','ADD',1200,700)">ลงรับผลงาน</button>
  <br><br>
            <!-- small box -->
            <form method="POST">

              ชื่อผู้ส่งผลงาน : <input type="text" name="s_name" id="s_name" onclick="checkempty()" onkeyup="checkempty()" onfocusout="checkempty()">
              เลขที่ตำแหน่ง : <input placeholder="เลขที่ตำแหน่ง..." id="pos_number" name="pos_number" maxlength="6" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" onclick="checkempty()" onkeyup="checkempty()" onfocusout="checkempty()">
              <input class="btn btn-warning" type="submit" name="btn_submit" value="ค้นหาผลงาน" disabled="" id="btn_submit">
              <input class="btn btn-danger" type="reset" name="btn_reset" value="เริ่มใหม่" id="btn_reset" onclick="window.location.href='admin_page.php'">
            
                    
              </form>
               <hr>
              <?php
              $pos_num = "";
              if(!empty($_POST["btn_submit"])){
                $pos_num = " AND per.PID = ".$_POST['pos_number'];
              }
              ?>
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="4%">ลำดับที่</th>
                    <th width="25%">ชื่อผลงาน</th>
                    <th>ชื่อ-สกุลผู้ส่งผลงาน</th>
                    <th>ตำแหน่ง</th>
                    <th>หน่วยงาน</th>
                    <th>สถานะ</th><th>วันที่ดำเนินการ</th>
                    <th width="10%">หมายเหตุ</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?PHP 
                     $sel_sql = "SELECT * FROM project_tb pro,person_tb per,project_event proe,title_name tn where proe.pro_id=pro.pro_id AND pro.pro_user_id = per.PID AND tn.title_id = per.title_id ".$pos_num." order by pro.pro_id"; 
                    $result = mysqli_query($conn,$sel_sql);
                    $no = 1;
                    while($data=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                      echo "<tr>
                      <td>".$no."</td>
                      <td>".$data["pro_name"]."</td>
                      <td>".$data["title_name"].$data["th_name"]."</td>
                      <td>".get_data1sql($conn,"pos_name","position_tb","pos_id = ".$data["pos_id"])."</td>
                      <td>".get_data1sql($conn,"dept_name","department_tb","dept_id = ".$data["dept_id"])."</td>";
                      $link ="onclick=\"popupwindow('change_status.php?proID=".$data["pro_id"]."', 'DRAW', '650', '750')\"";
                      $click="";
                      $color="btn-secondary";
                      $colorx = array('primary','warning','dark','secondary','info','danger','success');   
                      

                      echo "<td align='center'><a href=\"#\" style=\"width: 100px; $click font-size:13px; \" $link class=\"btn btn-".$colorx[$data["stat_id"]-1]." btn-icon-split\">".get_data1sql($conn,"status","status_tb","stat_id =".$data["stat_id"])."</a></td>";

                      echo "<td>".SortThaiDate($data["date_receive"])."</td>";
                      echo "<td align=center><a class=\"btn btn-warning btn-sm\" href=\"\" onclick=\"popupwindow()\"><i class=\"fas fa-pencil-alt\">
                              </i></a>";?>
                               | 
                      <a class="btn btn-danger btn-sm" href="JavaScript:if(confirm('ยืนยันการลบข้อมูลในรายการ ? ')==true){popupwindow()}"><i class="fas fa-trash">
                              </i></a> </td>

                      </tr>
                      <?php
                      $no++;
                    }
                    ?>
                </tbody>
                  <tfoot>
                <tr>
                    <th width="4%">ลำดับที่</th>
                    <th width="25%">ชื่อผลงาน</th>
                    <th>ชื่อ-สกุลผู้ส่งผลงาน</th>
                    <th>ตำแหน่ง</th>
                    <th>หน่วยงาน</th>
                    <th>สถานะ</th><th>วันที่ดำเนินการ</th>
                    <th width="10%">หมายเหตุ</th>
                  </tr>
                  </tfoot>
                </table>

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
<?php }else{
  header("location:/eps_program/login.php");
}?>