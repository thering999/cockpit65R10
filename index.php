<?php 
error_reporting(E_ERROR | E_PARSE);
session_start();
if (strstr($_SERVER['REQUEST_URI'], 'index.php') == false){header("location:index.php");}
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js" integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.esm.js" integrity="sha512-Jmi+uNSDc8pyBNQbRkhwxqTtRsAzq1p0IK7dSLjaudwIIqoG2giyWRvsh4bbPd2mNSbK1GyEiBUO86RSs428UQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.esm.min.js" integrity="sha512-SaY95UIbYlNfmc6tZOtqEWMyDHpIKJwXCPfDZNvgudlFZiJjMU3XJNrSnkVCL/3b7szsoU3hDXpUz6+TdLY1ag==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.js" integrity="sha512-uLlukEfSLB7gWRBvzpDnLGvzNUluF19IDEdUoyGAtaO0MVSBsQ+g3qhLRL3GTVoEzKpc24rVT6X1Pr5fmsShBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/helpers.esm.js" integrity="sha512-NrPCPNanqa1FM/aKCsKqZaEKs0X9M0JMVB9bjX8T2f50/LHQD+gHn0CX/ZN+kNkDPfXsQGfic21b/rKknQdC3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/helpers.esm.min.js" integrity="sha512-urWBnIv+F027G24xDNigjxvIuwnWlWy94W2yx77VkISKLzKSohOKOubMDhtEF6LZcEH7gctmNSpxDqIW/zMmUg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
</style>
<script>
  function hide_card(card_ID){
    var x = document.getElementById(card_ID);
    if(x.style.display == ''){x.style.display = 'none';}
  else {x.style.display = '';}
  }
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
<div class="col-lg-12 col-12" style="margin-bottom: 10px">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js" integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.esm.js" integrity="sha512-Jmi+uNSDc8pyBNQbRkhwxqTtRsAzq1p0IK7dSLjaudwIIqoG2giyWRvsh4bbPd2mNSbK1GyEiBUO86RSs428UQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.esm.min.js" integrity="sha512-SaY95UIbYlNfmc6tZOtqEWMyDHpIKJwXCPfDZNvgudlFZiJjMU3XJNrSnkVCL/3b7szsoU3hDXpUz6+TdLY1ag==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.js" integrity="sha512-uLlukEfSLB7gWRBvzpDnLGvzNUluF19IDEdUoyGAtaO0MVSBsQ+g3qhLRL3GTVoEzKpc24rVT6X1Pr5fmsShBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/helpers.esm.js" integrity="sha512-NrPCPNanqa1FM/aKCsKqZaEKs0X9M0JMVB9bjX8T2f50/LHQD+gHn0CX/ZN+kNkDPfXsQGfic21b/rKknQdC3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/helpers.esm.min.js" integrity="sha512-urWBnIv+F027G24xDNigjxvIuwnWlWy94W2yx77VkISKLzKSohOKOubMDhtEF6LZcEH7gctmNSpxDqIW/zMmUg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
body {
  font-family: "Prompt", sans-serif;
}
</style>
<!-- Main content 
    <div class="content" style="margin-top: -10px">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-warning">
              <div class="card-header border-0">
                <div style="cursor: pointer" onclick="hide_card('card_All')" class="d-flex justify-content-between">
                  <h2 class="card-title">ตัวชี้วัดเขตสุขภาพที่ 10 : KPIs 
                    <?=get_data1sql($conn,"count(*)","tk_kpi65 tk, kpi k","tk.tk_kpi = k.kpi_id")+
                    get_data1sql($conn,"count(*)","tk_kpi_sub ts, tk_kpi65 tk","ts.tk_id = tk.kpi_num")
                    ?> ตัว</h2>
                </div>
              </div>
              <div class="card-body" id="card_All">
                             <table border="0" width="100%">
                <tr>
                <!--  <td width="25%"><canvas id="myChart3"></canvas></td> -->
               <!--  <td></td>
                  <td width="30%"><canvas id="myChart"></canvas></td>
                  <td width="10%"></td>
                  <td width="50%">
                    <h3>ตัวชี้วัดเขตสุขภาพที่ 10 ปี 2565</h3> <canvas id="myChart2"></canvas></td>
                  <td></td>
                  </tr>
                  </table>
            </div>
            <!-- /.card -->
         <!--  </div>
          <!-- /.col-md-6 -->
          
        <!-- /.row -->
     <!--  </div>
      <!-- /.container-fluid -->
   <!--  </div>-->
   <div class="container-fluid">
    <div class="row">
          <div class="col-md-6">
            <div class="card card-warning">
              <div class="card-header border-0">
                <div style="cursor: pointer" onclick="hide_card('card_moph')" class="d-flex justify-content-between">
                  <h2 class="card-title">ตัวชี้วัดกระทรวง 2565 : KPIs <?=get_data1sql($conn,"count(*)","kpi k","(kpi_id between 301000 and 305000) and kpi_status = 1")?> ตัว (KPIs หลัก 75 ตัว)</h2>
                </div>
              </div>
              <div class="card-body" id="card_moph">
                <canvas id="myChart2" style="position: relative; height:40vh; width:40vw"></canvas>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
          <div class="col-md-6">
            <div class="card card-success">
              <div class="card-header border-0">
                <div style="cursor: pointer" onclick="hide_card('card_monitor')" class="d-flex justify-content-between">
                  <h2 class="card-title">ตัวชี้วัดเขตสุขภาพที่ 10 : KPIs <?=get_data1sql($conn,"count(*)","tk_kpi65 tk, kpi k","tk.tk_kpi = k.kpi_id")+
                    get_data1sql($conn,"count(*)","tk_kpi_sub ts, tk_kpi65 tk","ts.tk_id = tk.kpi_num")
                    ?> ตัว (KPIs หลัก 75 + 6 ตัว)</h2>
                </div>
              </div>
              <div class="card-body" id="card_monitor">
                <canvas id="myChart5" style="position: relative; height:40vh; width:40vw"></canvas>
                <?php
                $sqlr5 = "SELECT k.kpi_id,k.kpi_name,k.kpi_detail,k.kpi_type,k.kpi_scale,k.kpi_tar,k.kpi_type_data,
  r10.dr_rate,r10.dr_pop,r10.dr_data,
p34.dp_rate as p34,
p33.dp_rate as p33,
p35.dp_rate as p35,
p37.dp_rate as p37,
p49.dp_rate as p49,
p34.dp_data as pd34,
p33.dp_data as pd33,
p35.dp_data as pd35,
p37.dp_data as pd37,
p49.dp_data as pd49,
p34.dp_pop as pp34,
p33.dp_pop as pp33,
p35.dp_pop as pp35,
p37.dp_pop as pp37,
p49.dp_pop as pp49,
k.kpi_file,k.kpi_update,k.kpi_source FROM stg AS s
Left Join kpi AS k ON s.stg_id = k.kpi_stg_id
Left Join data_kpi_region AS r10 ON k.kpi_id = r10.dr_kpi
Left Join (SELECT dp_prov,dp_kpi,dp_data,dp_rate,dp_pop FROM data_kpi_province WHERE dp_prov = '34') AS p34 ON k.kpi_id = p34.dp_kpi
Left Join (SELECT dp_prov,dp_kpi,dp_data,dp_rate,dp_pop FROM data_kpi_province WHERE dp_prov = '33') AS p33 ON k.kpi_id = p33.dp_kpi
Left Join (SELECT dp_prov,dp_kpi,dp_data,dp_rate,dp_pop FROM data_kpi_province WHERE dp_prov = '35') AS p35 ON k.kpi_id = p35.dp_kpi
Left Join (SELECT dp_prov,dp_kpi,dp_data,dp_rate,dp_pop FROM data_kpi_province WHERE dp_prov = '37') AS p37 ON k.kpi_id = p37.dp_kpi
Left Join (SELECT dp_prov,dp_kpi,dp_data,dp_rate,dp_pop FROM data_kpi_province WHERE dp_prov = '49') AS p49 ON k.kpi_id = p49.dp_kpi
WHERE
s.stg_status =  '1' AND k.kpi_id IN (SELECT kpi_id from kpi where kpi_id IN 
(SELECT kpi_id FROM tk_kpi65 tk left join kpi k  on tk.tk_kpi = k.kpi_id WHERE tk_kpi < 999999 UNION
SELECT tks.kpi_id FROM tk_kpi_sub tks Join kpi k on k.kpi_id = tks.kpi_id)) order by kpi_id";
$result5 = mysqli_query($conn,$sqlr5);
$NO_passed5 = array(0,0,0,0,0,0);
$NO_failed5 = array(0,0,0,0,0,0);
$xx5 = array("dr_rate","p34","p33","p35","p37","p49");
$l_labels5 = array("เขตสุขภาพที่ 10","อุบลราชธานี","ศรีสะเกษ","ยโสธร","อำนาจเจริญ","มุกดาหาร");
while ($data5=mysqli_fetch_array($result5,MYSQLI_ASSOC)) {
  for($x=0;$x<sizeof($xx5);$x++){
    if($data5['kpi_type_data']==0){
      if($data5[$xx5[$x]]>=$data5['kpi_tar']){
        $NO_passed5[$x]++;
      }else{
        $NO_failed5[$x]++;
      }
    }else{
      if($data5[$xx5[$x]]<=$data5['kpi_tar']){
        $NO_passed5[$x]++;
      }else{
        $NO_failed5[$x]++;
      }
    }
  }
}
/*echo "<br><div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"card card-secondary\">
              <div class=\"card-header border-0\">
                <div style=\"cursor: pointer\" onclick=\"hide_card('card_moph')\" class=\"d-flex justify-content-between\">
                  <h2 class=\"card-title\">ตัวชี้วัดกระทรวง 2565 : KPIs ".get_data1sql($conn,"count(*)","kpi k","(kpi_id between 301000 and 305000) and kpi_status = 1")." ตัว</h2>
                </div>
              </div>
<table align=center border=0 style=width:95% bgcolor=white class=\"table table-bordered dataTable \" id=\"example1\" >

<tr class=bg-warning  style=font-weight:bold;>
<td align=center>จังหวัด</td>
<td align=center>เขต 10</td>
<td align=center>อุบล</td>
<td align=center>ศรีสะเกษ</td>
<td align=center>ยโส</td>
<td align=center>อำนาจ</td>
<td align=center>มุก</td></tr>";
echo "<tr><td class=bg-success align=center>ผ่าน</td>";
for($i=0;$i<sizeof($NO_passed5);$i++){
    echo "<td align=center>$NO_passed5[$i]</td>";
  }
echo "</tr><tr><td class=bg-danger align=center>ไม่ผ่าน</td>";
for($i=0;$i<sizeof($NO_passed5);$i++){
    echo "<td align=center>$NO_failed5[$i]</td>";
  }
echo "</tr><tr><td class=bg-success align=center>ผ่าน(%)</td>";
for($i=0;$i<sizeof($NO_passed5);$i++){
    echo "<td align=center>".number_format(($NO_passed5[$i]*100/($NO_failed5[$i]+$NO_passed5[$i])),2)."</td>";
  }
 echo "</tr><tr><td class=bg-danger align=center>ไม่ผ่าน(%)</td>";
 for($i=0;$i<sizeof($NO_passed5);$i++){
    echo "<td align=center>".number_format(($NO_failed5[$i]*100/($NO_failed5[$i]+$NO_passed5[$i])),2)."</td>";
  }
  echo "</tr></table></div></div>";*/
                ?>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <div class="row">
          <div class="col-md-6">
            <div class="card card-info">
              <div class="card-header border-0">
                <div style="cursor: pointer" onclick="hide_card('card_PA')" class="d-flex justify-content-between">
                  <h2 class="card-title">ตัวชี้วัด PA 2565 : KPIs <?=get_data1sql($conn,"count(*)","kpi k","(kpi_id between 101000 and 200000) and kpi_status = 1")?> ตัว (KPIs หลัก 29 ตัว)</h2>
                </div>
              </div>
              <div class="card-body" id="card_PA">
                <canvas id="myChart3" style="position: relative; height:40vh; width:40vw"></canvas>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
          <div class="col-md-6">
            <div class="card card-secondary">
              <div class="card-header border-0">
                <div style="cursor: pointer" onclick="hide_card('card_insp')" class="d-flex justify-content-between">
                  <h2 class="card-title">ตัวชี้วัดตรวจราชการ 2565 : KPIs <?=get_data1sql($conn,"count(*)","kpi k","(kpi_id between 201000 and 300000) and kpi_status = 1")?> ตัว</h2>
                </div>
              </div>
              <div class="card-body" id="card_insp">
                <canvas id="myChart4" style="position: relative; height:40vh; width:40vw"></canvas>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <div class="row">
          <div class="col-md-6">
            <div class="card card-success">
              <div class="card-header border-0">
                <div style="cursor: pointer" onclick="hide_card('card_pofit')" class="d-flex justify-content-between">
                  <h2 class="card-title">เสนอแนะ</h2>
                </div>
              </div>
              <div class="card-body" id="card_pofit">
                <table class="" width="100%" border=0>
  <?php
    $sql = "select * from note_tb where note_type = 1";
    $res = mysqli_query($conn, $sql);
    $no = 1;
    while($data1=mysqli_fetch_array($res,MYSQLI_ASSOC)){
        echo "<tr><td align=center valign=top width=20px>$no.</td><td><div>$data1[note_detail]</div></td></tr>";
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
                <div style="cursor: pointer" onclick="hide_card('card_dis')" class="d-flex justify-content-between">
                  <h2 class="card-title">ปัญหาและอุปสรรค</h2>
                </div>
              </div>
              <div class="card-body" id="card_dis">
               <table class="" width="100%" border=0>
  <?php
    $sql = "select * from note_tb where note_type = 2";
    $res = mysqli_query($conn, $sql);
    $no = 1;
    while($data1=mysqli_fetch_array($res,MYSQLI_ASSOC)){
        echo "<tr><td align=center valign=top width=20px>$no.</td><td><div>$data1[note_detail]</div></td></tr>";
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
<?php 

$sql_stg = "SELECT stg_id,stg_name FROM stg where stg_grp_id=3 and
stg_status = 1";
$result_stg = mysqli_query($conn,$sql_stg);
$nums = 0;
$no = mysqli_num_rows($result_stg);
$l_labels = "";
$l_data = array();
$d_success = array();
$kpi_sum = 0;
$sum_success = 0;
while($data_stg = mysqli_fetch_array($result_stg,MYSQLI_ASSOC)){
  if(mysqli_num_rows($result_stg)!=0)
  {$nums++;}
$sql = "select kpi_id as kpi_count from kpi k,stg s ,stg_group st where k.kpi_stg_id = s.stg_id and s.stg_grp_id=st.stg_group_id and kpi_status = 1 and s.stg_id =".$data_stg["stg_id"];

  $result = mysqli_query($conn,$sql);
  $data_kpi = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $data_kpi["kpi_count"];
  $l_labels .="'".$data_stg["stg_name"]."',";
  $l_data[$nums-1] = mysqli_num_rows($result);
  $kpi_sum += $l_data[$nums-1];
}
$nums;
for($i=1;$i<=$nums;$i++){
  $sql_success = "SELECT kpi_id,kpi_type_data,kpi_tar,dr_rate 
    from kpi k INNER Join data_kpi_region dk ON k.kpi_id = dk.dr_kpi 
    WHERE dk.dr_rate >= k.kpi_tar and k.kpi_type_data = 0 and k.kpi_status = 1 and kpi_stg_id LIKE \"30$i%\"
  UNION
  SELECT kpi_id,kpi_type_data,kpi_tar,dr_rate 
  from kpi k INNER Join data_kpi_region dk ON k.kpi_id = dk.dr_kpi 
  WHERE dk.dr_rate <= k.kpi_tar and k.kpi_type_data = 1 and k.kpi_status = 1 and kpi_stg_id LIKE \"30$i%\"";
  $res_success = mysqli_query($conn,$sql_success);
  $d_success[$i-1] = mysqli_num_rows($res_success);
  $sum_success += $d_success[$i-1];
}

$sql_stg = "SELECT * FROM stg WHERE stg_grp_id = 1 AND stg_status = 1";
$res_stg = mysqli_query($conn,$sql_stg);
$numarr = mysqli_num_rows($res_stg);
$NO_passed = array_fill(0, $numarr, 0);
$NO_failed = array_fill(0, $numarr, 0);
$labelPA = array_fill(0, $numarr, "");
$s_no = 0;
while($datastg = mysqli_fetch_array($res_stg,MYSQLI_ASSOC)){
  $sql_dataPA = "SELECT
  kpi_id,kpi_detail,kpi_tar,kpi_type_data,r10.dr_rate KET
FROM
  kpi
  LEFT JOIN (SELECT '10',dr_kpi,dr_data,dr_rate FROM data_kpi_region WHERE dr_region = '10') as r10  ON kpi.kpi_id = r10.dr_kpi
WHERE kpi_stg_id = ".$datastg["stg_id"]." and kpi_status = 1";
  $res_dataPA = mysqli_query($conn,$sql_dataPA);
  $labelPA[$s_no] = $datastg["stg_name"];
  while($dataPA = mysqli_fetch_array($res_dataPA,MYSQLI_ASSOC)){

    if($dataPA['kpi_type_data']==0){
      if($dataPA['KET']>=$dataPA['kpi_tar']){
        $NO_passed[$s_no]++;
      }else{
        $NO_failed[$s_no]++;
      }
    }else{
      if($dataPA['KET']<=$dataPA['kpi_tar']){
        $NO_passed[$s_no]++;
      }else{
        $NO_failed[$s_no]++;
      }
    }
    
  }
  $s_no++;
}

$sql_ins = "SELECT * FROM stg WHERE stg_grp_id = 2 AND stg_status = 1";
$res_ins = mysqli_query($conn,$sql_ins);
$numarr = mysqli_num_rows($res_ins);
$NO2_passed = array_fill(0, $numarr, 0);
$NO2_failed = array_fill(0, $numarr, 0);
$label_ins = array_fill(0, $numarr, "");
$s_no = 0;
while($datastg2 = mysqli_fetch_array($res_ins,MYSQLI_ASSOC)){
  $sql_datains = "SELECT
  kpi_id,kpi_detail,kpi_tar,kpi_type_data,r10.dr_rate KET
FROM
  kpi
  LEFT JOIN (SELECT '10',dr_kpi,dr_data,dr_rate FROM data_kpi_region WHERE dr_region = '10') as r10  ON kpi.kpi_id = r10.dr_kpi
WHERE kpi_stg_id = ".$datastg2["stg_id"]." and kpi_status = 1";
  $res_datains = mysqli_query($conn,$sql_datains);
  $labelins[$s_no] = $datastg2["stg_name"];
  while($datains = mysqli_fetch_array($res_datains,MYSQLI_ASSOC)){

    if($datains['kpi_type_data']==0){
      if($datains['KET']>=$datains['kpi_tar']){
        $NO2_passed[$s_no]++;
      }else{
        $NO2_failed[$s_no]++;
      }
    }else{
      if($datains['KET']<=$datains['kpi_tar']){
        $NO2_passed[$s_no]++;
      }else{
        $NO2_failed[$s_no]++;
      }
    }
    
  }
  $s_no++;
}



  ?>
<script>
const ctx = document.getElementById('myChart').getContext('2d');

const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [<?=$l_labels?>],
        datasets: [{
            data: [<?php for($x=0;$x<sizeof($l_data);$x++){echo $l_data[$x].",";} ?>],
            backgroundColor: [
                'rgba(0,123,255, 0.5)',
                'rgba(23,162,184, 0.5)',
                'rgba(255,82,0, 0.5)',
                'rgba(255,184,25, 0.5)',
                 'rgba(160,206,203, 0.5)',
                'rgba(232,62,140, 0.5)'
            ],
            borderColor: [
                'rgba(255, 255, 255, 1)'
            ],
            borderWidth: 3
        },
        {  
          data: [<?php 
              for($x=0;$x<sizeof($d_success);$x++){echo $d_success[$x].",".($l_data[$x]-$d_success[$x]).",";}
              ?>],
            backgroundColor: [
                'rgba(52,208,83, 0.8)',//ผ่าน
                'rgba(236,78,52, 0.8)',//ไม่ผ่าน
                 'rgba(52,208,83, 0.8)',//ผ่าน
                'rgba(236,78,52, 0.8)',//ไม่ผ่าน
                 'rgba(52,208,83, 0.8)',//ผ่าน
                'rgba(236,78,52, 0.8)',//ไม่ผ่าน
                 'rgba(52,208,83, 0.8)',//ผ่าน
                'rgba(236,78,52, 0.8)',//ไม่ผ่าน
                 'rgba(52,208,83, 0.8)',//ผ่าน
                'rgba(236,78,52, 0.8)',//ไม่ผ่าน
                 'rgba(52,208,83, 0.8)',//ผ่าน
                'rgba(236,78,52, 0.8)',//ไม่ผ่าน
            ],
            borderColor: [
                'rgba(255, 255, 255, 1)'
            ],
            borderWidth: 3
        }
        ]
    },
    options: {
      responsive: true,
        plugins: {
            tooltip: {
                callbacks: {

                    label: function(tooltipItems, datasets) {

                      x = [<?=$l_labels?>];
                      y = ['ผ่าน','ไม่ผ่าน'];
                      z = [<?php 
                    for($x=0;$x<sizeof($l_data);$x++){echo $l_data[$x].",";}
                    ?>]
                  zz =[<?php 
                    for($x=0;$x<sizeof($d_success);$x++)
                      {echo $d_success[$x].",".($l_data[$x]-$d_success[$x]).",";}
                    ?>]
                      if(tooltipItems.datasetIndex==0){
                        label = " "+x[tooltipItems.dataIndex]+" : "+z[tooltipItems.dataIndex]+" KPIs";
                      }else{
                        var cass = Math.ceil((tooltipItems.dataIndex+1)/2);
                        if(tooltipItems.dataIndex%2==0){label = y[0];}
                        else{label = y[1];}
                        label = label+" : "+zz[tooltipItems.dataIndex]+" KPIs";
                      }
                      
                        return label;

                    }
                },
                 titleFont: {
                              family: "prompt"
                },
                bodyFont: {
                              family: "prompt"
                },
            },
          legend: {
            onClick: function (e) {
        e.stopPropagation();
    },
                  labels: {
                      // This more specific font property overrides the global property
                      font: {
                          family: "prompt"
                      }
                  }
          },

        }
    },

});
</script>

<script>
const ctx2 = document.getElementById('myChart2').getContext('2d');

const myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: [<?=$l_labels?>],
        datasets: [{
          label: "ผ่าน",
            data: [<?php 
              for($x=0;$x<sizeof($d_success);$x++){echo (100-(($l_data[$x]-$d_success[$x])/$l_data[$x]*100)).",";}
              ?>],
            backgroundColor: [
                'rgba(0,123,255, 0.8)',
                'rgba(23,162,184, 0.8)',
                'rgba(255,82,0, 0.8)',
                'rgba(255,184,25, 0.8)',
                'rgba(160,206,203, 0.8)',
                'rgba(232,62,140, 0.8)'
            ],
            borderColor: [
                'rgba(255,255,255, 0.8)'
            ],
            borderWidth: 3
        },
        {  label: "ไม่ผ่าน",
          data: [<?php 
              for($x=0;$x<sizeof($l_data);$x++){echo (($l_data[$x]-$d_success[$x])/$l_data[$x]*100).",";}
              ?>],
            backgroundColor: [
                'rgba(0,123,255, 0.2)',
                'rgba(23,162,184, 0.2)',
                'rgba(255,82,0, 0.2)',
                'rgba(255,184,25, 0.2)',
                'rgba(160,206,203, 0.2)',
                'rgba(232,62,140, 0.2)'
            ],
            borderColor: [
                'rgba(255,255,255, 0.8)'
            ],
            borderWidth: 3
        }
        ]
    },
    options: {
      responsive: true,
      scales: {
          x: {
            stacked: true,
            ticks: {
                    // Include a dollar sign in the ticks
                    font:{
                    family: "prompt",
                },
                }
          },
          y: {
            stacked: true,
            ticks: {
                    // Include a dollar sign in the ticks
                    font:{
                    family: "prompt",
                },
                }
          },
    },

        plugins: {
            tooltip: {
                callbacks: {

                    label: function(tooltipItems, datasets) {

                      x = ['ไม่ผ่าน','ผ่าน'];
                      z = [<?php 
                    for($i=0;$i<sizeof($l_data);$i++){echo $l_data[$i].",";}
                    ?>]
                  zz =[<?php 
                    for($i=0;$i<sizeof($d_success);$i++)
                      {echo $d_success[$i].",";}
                    ?>]
                      if(tooltipItems.datasetIndex==1){
                        label = " "+x[0]+" : "+(z[tooltipItems.dataIndex]-zz[tooltipItems.dataIndex])+" KPIs";
                      }else{
                        label = " "+x[1]+" : "+(zz[tooltipItems.dataIndex])+" KPIs";
                      }
                      
                        return label;

                    }
                },
                 titleFont: {
                          family: "prompt"
            },
            bodyFont: {

                          family: "prompt"
            },
            },
          legend: {
            display : false,
                    labels: {
                        
                        // This more specific font property overrides the global property
                        font: {
                            
                            family: "prompt"
                        }
                    }
            },


        }
    },

});
</script>

<script>
const myChart3 = new Chart(document.getElementById('myChart3').getContext('2d'), {
    type: 'bar',
    data: {
        labels: [ <?php for($x=0;$x<sizeof($labelPA);$x++){echo "\"".$labelPA[$x]."\",";} ?> ],
        datasets: [{
          label: "ผ่าน",
            data: [<?php for($x=0;$x<sizeof($NO_passed);$x++){echo $NO_passed[$x].",";} ?>],
            backgroundColor: [
                'rgba(0,123,255, 0.8)',
                'rgba(23,162,184, 0.8)',
                'rgba(255,82,0, 0.8)',
                'rgba(255,184,25, 0.8)',
                'rgba(160,206,203, 0.8)',
                'rgba(232,62,140, 0.8)',
                'rgba(108, 52, 131, 0.8)',
                'rgba(230, 126, 34, 0.8)'
            ],
            borderColor: [
                'rgba(255,255,255, 0.8)'
            ],
            borderWidth: 3
        },
        {  label: "ไม่ผ่าน",
          data: [<?php for($x=0;$x<sizeof($NO_failed);$x++){echo $NO_failed[$x].",";} ?>],
            backgroundColor: [
                'rgba(0,123,255, 0.2)',
                'rgba(23,162,184, 0.2)',
                'rgba(255,82,0, 0.2)',
                'rgba(255,184,25, 0.2)',
                'rgba(160,206,203, 0.2)',
                'rgba(232,62,140, 0.2)',
                'rgba(108, 52, 131, 0.2)',
                'rgba(230, 126, 34, 0.2)'
            ],
            borderColor: [
                'rgba(255,255,255, 0.8)'
            ],
            borderWidth: 3
        }
        ]
    },
    options: {
      responsive: true,
      scales: {
          x: {
            stacked: true,
            ticks: {
                    // Include a dollar sign in the ticks
                    font:{
                    family: "prompt",
                },
                }
          },
          y: {
            stacked: true,
            ticks: {
                    // Include a dollar sign in the ticks
                    font:{
                    family: "prompt",
                },
                }
          },
    },

        plugins: {
            tooltip: {
                callbacks: {

                    label: function(tooltipItems, datasets) {

                      x = ['ไม่ผ่าน','ผ่าน'];
                      z = [<?php for($x=0;$x<sizeof($NO_failed);$x++){echo $NO_failed[$x].",";} ?>]
                      zz = [<?php for($x=0;$x<sizeof($NO_passed);$x++){echo $NO_passed[$x].",";} ?>]
                      if(tooltipItems.datasetIndex==1){
                        label = " "+x[0]+" : "+(z[tooltipItems.dataIndex])+" KPIs";
                      }else{
                        label = " "+x[1]+" : "+(zz[tooltipItems.dataIndex])+" KPIs";
                      }
                      
                        return label;

                    }
                },
                 titleFont: {
                          family: "prompt"
            },
            bodyFont: {

                          family: "prompt"
            },
            },
          legend: {
            display : false,
                    labels: {
                        display : false,
                        // This more specific font property overrides the global property
                        font: {
                            
                            family: "prompt"
                        }
                    }
            },

        }
    },

});
</script>
<script>
const myChart4 = new Chart(document.getElementById('myChart4').getContext('2d'), {
    type: 'bar',
    data: {
        labels: [ <?php for($x=0;$x<sizeof($labelins);$x++){echo "\"".$labelins[$x]."\",";} ?> ],
        datasets: [{
          label: "ผ่าน",
            data: [<?php for($x=0;$x<sizeof($NO2_passed);$x++){echo $NO2_passed[$x].",";} ?>],
            backgroundColor: [
                'rgba(0,123,255, 0.8)',
                'rgba(23,162,184, 0.8)',
                'rgba(255,82,0, 0.8)',
                'rgba(255,184,25, 0.8)',
                'rgba(160,206,203, 0.8)',
                'rgba(232,62,140, 0.8)'
            ],
            borderColor: [
                'rgba(255,255,255, 0.8)'
            ],
            borderWidth: 3
        },
        {  label: "ไม่ผ่าน",
          data: [<?php for($x=0;$x<sizeof($NO2_failed);$x++){echo $NO2_failed[$x].",";} ?>],
            backgroundColor: [
                'rgba(0,123,255, 0.2)',
                'rgba(23,162,184, 0.2)',
                'rgba(255,82,0, 0.2)',
                'rgba(255,184,25, 0.2)',
                'rgba(160,206,203, 0.2)',
                'rgba(232,62,140, 0.2)'
            ],
            borderColor: [
                'rgba(255,255,255, 0.8)'
            ],
            borderWidth: 3
        }
        ]
    },
    options: {
      responsive: true,
      scales: {
          x: {
            stacked: true,
            ticks: {
                    // Include a dollar sign in the ticks
                    font:{
                    family: "prompt",
                },
                }
          },
          y: {
            stacked: true,
            ticks: {
                    // Include a dollar sign in the ticks
                    font:{
                    family: "prompt",
                },
                }
          },
    },

        plugins: {
            tooltip: {
                callbacks: {

                    label: function(tooltipItems, datasets) {

                      x = ['ไม่ผ่าน','ผ่าน'];
                      z = [<?php for($x=0;$x<sizeof($NO2_failed);$x++){echo $NO2_failed[$x].",";} ?>]
                      zz = [<?php for($x=0;$x<sizeof($NO2_passed);$x++){echo $NO2_passed[$x].",";} ?>]
                      if(tooltipItems.datasetIndex==1){
                        label = " "+x[0]+" : "+(z[tooltipItems.dataIndex])+" KPIs";
                      }else{
                        label = " "+x[1]+" : "+(zz[tooltipItems.dataIndex])+" KPIs";
                      }
                      
                        return label;

                    }
                },
                 titleFont: {
                          family: "prompt"
            },
            bodyFont: {

                          family: "prompt"
            },
            },
          legend: {
            display : false,
                    labels: {
                        display : false,
                        // This more specific font property overrides the global property
                        font: {
                            
                            family: "prompt"
                        }
                    }
            },

        }
    },

});
</script>

<script>
const myChart5 = new Chart(document.getElementById('myChart5').getContext('2d'), {
    type: 'bar',
    data: {
        labels: [ <?php for($x=0;$x<sizeof($l_labels5);$x++){echo "\"".$l_labels5[$x]."\",";} ?> ],
        datasets: [{
          label: "ผ่าน",
            data: [<?php for($x=0;$x<sizeof($NO_passed5);$x++){echo $NO_passed5[$x].",";} ?>],
            backgroundColor: [
                'rgba(0,123,255, 0.8)',
                'rgba(23,162,184, 0.8)',
                'rgba(255,82,0, 0.8)',
                'rgba(255,184,25, 0.8)',
                'rgba(160,206,203, 0.8)',
                'rgba(232,62,140, 0.8)'
            ],
            borderColor: [
                'rgba(255,255,255, 0.8)'
            ],
            borderWidth: 3
        },
        {  label: "ไม่ผ่าน",
          data: [<?php for($x=0;$x<sizeof($NO_failed5);$x++){echo $NO_failed5[$x].",";} ?>],
            backgroundColor: [
                'rgba(0,123,255, 0.2)',
                'rgba(23,162,184, 0.2)',
                'rgba(255,82,0, 0.2)',
                'rgba(255,184,25, 0.2)',
                'rgba(160,206,203, 0.2)',
                'rgba(232,62,140, 0.2)'
            ],
            borderColor: [
                'rgba(255,255,255, 0.8)'
            ],
            borderWidth: 3
        }
        ]
    },
    options: {
      responsive: true,
      scales: {
          x: {
            stacked: true,
            ticks: {
                    // Include a dollar sign in the ticks
                    font:{
                    family: "prompt",
                },
                }
          },
          y: {
            stacked: true,
            ticks: {
                    // Include a dollar sign in the ticks
                    font:{
                    family: "prompt",
                },
                }
          },
    },

        plugins: {
            tooltip: {
                callbacks: {

                    label: function(tooltipItems, datasets) {

                      x = ['ไม่ผ่าน','ผ่าน'];
                      z = [<?php for($x=0;$x<sizeof($NO_failed5);$x++){echo $NO_failed5[$x].",";} ?>]
                      zz = [<?php for($x=0;$x<sizeof($NO_passed5);$x++){echo $NO_passed5[$x].",";} ?>]
                      if(tooltipItems.datasetIndex==1){
                        label = " "+x[0]+" : "+(z[tooltipItems.dataIndex])+" KPIs";
                      }else{
                        label = " "+x[1]+" : "+(zz[tooltipItems.dataIndex])+" KPIs";
                      }
                      
                        return label;

                    }
                },
                 titleFont: {
                          family: "prompt"
            },
            bodyFont: {

                          family: "prompt"
            },
            },
          legend: {
            display : false,
                    labels: {
                        display : false,
                        // This more specific font property overrides the global property
                        font: {
                            
                            family: "prompt"
                        }
                    }
            },

        }
    },

});
</script>
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
