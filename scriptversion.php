<?php 
session_start();
  include 'include/gifnoc.php';
  include 'include/noitcnuf.php';
  $urlp34="";$urlp33="";$urlp35="";$urlp37="";$urlp49="";
  $amn_code=0;
  
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
<?php include 'aside.php';
$str = array();
?>
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
          <div class="col-sm-6">
            <h1 class="m-0" style="padding-top: 10px">
              ตรวจสอบ Version Script ดึงข้อมูล
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
<?php 
$txt = "<table id=example1 width='99%' border='1' class='table table-bordered dataTable'><thead>
  <tr class=bg-warning>
    <th width='2%' scope='col'>KPI_ID</th>
    <th width='35%' scope='col'>ตัวชี้วัด</th>
  <th width='7%' scope='col'>ผู้รับผิดชอบ Script</th>";

//$sqlp = "SELECT p.provnames,p.prov_url FROM province AS p ORDER BY p.provcode ASC";
$sqlp=" select * FROM
(SELECT p.provcode,p.provnames,p.prov_url FROM province AS p where p.provcode in (34)) as p1
UNION
(SELECT p.provcode,p.provnames,p.prov_url FROM province AS p where p.provcode in (33,35,37,49) ORDER BY p.provcode  ASC) ";
$resultp=mysqli_query($conn,$sqlp);
while($row=mysqli_fetch_array($resultp)) {
  if($row['provcode'] == '37'){
    $txt .= "<th width='8%' scope='col'><a href='$row[prov_url]' target='_blank'>$row[provnames]</a></th>";
  }
  else{
    $txt .= "<th width='8%' scope='col'><a href='$row[prov_url]/index2.php' target='_blank'>$row[provnames]</a></th>";  
  }
}
$txt .= "<th width='4%' scope='col'></th>
  </tr></thead>";
$sqlctrl = "SELECT 
DISTINCT(`kpi_name`),
`kpi_id`,
`owner`,kpi_order,
ub.kpi_script_update as version_ubon,
sk.kpi_script_update as version_ssk,
ys.kpi_script_update as version_yaso,
an.kpi_script_update as version_amnat,
mk.kpi_script_update as version_muk
from kpi
LEFT JOIN data_kpi_province ub on kpi.kpi_id = ub.dp_kpi and ub.dp_prov = 34
LEFT JOIN data_kpi_province sk on kpi.kpi_id = sk.dp_kpi and sk.dp_prov = 33 
LEFT JOIN data_kpi_province ys on kpi.kpi_id = ys.dp_kpi and ys.dp_prov = 35 
LEFT JOIN data_kpi_province an on kpi.kpi_id = an.dp_kpi and an.dp_prov = 37 
LEFT JOIN data_kpi_province mk on kpi.kpi_id = mk.dp_kpi and mk.dp_prov = 49 where kpi.kpi_source = 2 and kpi.kpi_status = 1 ORDER BY kpi.kpi_order ASC";
$resultctrl=mysqli_query($conn,$sqlctrl);
while($row=mysqli_fetch_array($resultctrl)) {
$version = array("none",$row['version_ubon'],$row['version_ssk'],$row['version_yaso'],$row['version_amnat'],$row['version_muk']);
$txt_bgred = "class=bg-danger";
$txt_bggreen = "class=bg-success";
$check_script_bg = array($txt_bggreen,$txt_bggreen,$txt_bggreen,$txt_bggreen,$txt_bggreen,$txt_bggreen);
$check_script_val = 0;
if($row['owner']=="อุบลราชธานี"){$check_script_val=1;}
if($row['owner']=="ศรีสะเกษ"){$check_script_val=2;}
if($row['owner']=="ยโสธร"){$check_script_val=3;}
if($row['owner']=="อำนาจเจริญ"){$check_script_val=4;}
if($row['owner']=="มุกดาหาร"){$check_script_val=5;}
$dataprov[0] = "none";
$dataprov[1] = $row['version_ubon'];
$dataprov[2] = $row['version_ssk'];
$dataprov[3] = $row['version_yaso'];
$dataprov[4] = $row['version_amnat'];
$dataprov[5] = $row['version_muk'];
for($i=0;$i<=5;$i++){
  if($version[$check_script_val]!=$version[$i]||$dataprov[$i]=="0000-00-00 00:00:00"||$dataprov[$i]==""){
    $check_script_bg[$i] = $txt_bgred;
  }
  if($dataprov[$i]=="0000-00-00 00:00:00"||$dataprov[$i]==""){
    $dataprov[$i] = Null;
  }
  if($dataprov[$i]==""){$check_script_bg[$i] = "class=bg-secondary";}
}
  $txt.="<tr>
  <td>".$row['kpi_id']."</td>
  <td>".$row['kpi_name']."</td>
  <td class=bg-warning>".$row['owner']."</td>
  <td ".$check_script_bg[1].">".$dataprov[1]."</td>
  <td ".$check_script_bg[2].">".$dataprov[2]."</td>
  <td ".$check_script_bg[3].">".$dataprov[3]."</td>
  <td ".$check_script_bg[4].">".$dataprov[4]."</td>
  <td ".$check_script_bg[5].">".$dataprov[5]."</td>
  <td></td>
  </tr>";
  }
  
$txt .= "</table>";                                     
//$sqlctrl = "SELECT * FROM control_version Where kpi_id in (SELECT kpi_id from kpi where kpi_source=2)";
//$rsp=mysql_query($sqlp,$link);
//while($r=mysql_fetch_array($rsp));

  
$txt .= " </div>
</body>
</html>";
echo $txt;
?>
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
      "responsive": true, "lengthChange": true, "autoWidth": false,"paging": false,"searching": true,
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
<?php 
error_reporting (E_ALL ^ E_NOTICE);
session_start();  
if(empty($_POST["sl_grpstg"])){$selectgroupstg = 1;} 
?>
<script language="JavaScript" type="text/javascript">
function popup(url,name,windowWidth,windowHeight)
{    
	myleft=(screen.width)?(screen.width-windowWidth)/2:100;	
	mytop=(screen.height)?(screen.height-windowHeight)/2:100;	
	properties = "width="+windowWidth+",height="+windowHeight;
	properties +=",scrollbars=yes, top="+mytop+",left="+myleft;   
	window.open(url,name,properties);
}
</script>
<style type="text/css">
<!--
.quadratgreen {
 -webkit-animation: GREEN 1s infinite; /* Safari 4+ */
  -moz-animation:    GREEN 1s infinite; /* Fx 5+ */
  -o-animation:      GREEN 1s infinite; /* Opera 12+ */
  animation:         GREEN 1s infinite; /* IE 10+, Fx 29+ */
}

.quadratred {
 -webkit-animation: RED 1s infinite; /* Safari 4+ */
  -moz-animation:    RED 1s infinite; /* Fx 5+ */
  -o-animation:      RED 1s infinite; /* Opera 12+ */
  animation:         RED 1s infinite; /* IE 10+, Fx 29+ */
}

@-webkit-keyframes GREEN {
0%, 100% {
    background-color: rgb(117,209,63);
    /*border: 3px solid #000000;*/
}
0%, 100% {
    background-color: rgb(117,209,63);
   /* border: 3px solid rgb(117,209,63);*/
}
}

@-webkit-keyframes RED {
0%, 100% {
    background-color: #D9534F;
    /*border: 3px solid #D9534F;*/
}
0%, 100% {
    background-color: #D9534F;
   /* border: 3px solid #D9534F;*/
}

/*@-webkit-keyframes RED {
40%, 50% {
    background-color: #D9534F;
    /*border: 3px solid #000000;*/
}
90%, 100% {
    background-color: #FFFFFF;
   /* border: 3px solid rgb(117,209,63);*/
}*/
}
-->
</style>
