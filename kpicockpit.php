<?php 
error_reporting(E_ERROR | E_PARSE);

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
.xa {
  color: #FFFFFF;
  text-decoration: underline;
}
table tr {
  font-size: 13px;
}
</style>
<script>
  function reset_btn(){
    header("location:/");
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
<script language="JavaScript" type="text/javascript">
function hidegraph(g_id){
  var aa = document.getElementById('aa'+g_id);
  if(aa.style.display == ''){aa.style.display = 'none';}
  else {aa.style.display = '';}
}

function show_graph(g_id,ket10,ubn,ssk,yaso,amna,muk,tar,type_data){
var checkhide = document.getElementById('aa'+g_id);
    if(checkhide.style.display!='none'){
      hidegraph(g_id);
    }else{
Chart.defaults.global.defaultFontFamily = "prompt";
  function number_format(number, decimals, dec_point, thousands_sep) {

    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+number) ? 0 : +number,
      prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
      sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
      dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
      s = '',
      toFixedFix = function(n, prec) {
        var k = Math.pow(10, prec);
        return '' + Math.round(n * k) / k;
      };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
      s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
      s[1] = s[1] || '';
      s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
  }

  // Bar Chart Example
  var ctx = document.getElementById(g_id);
  var aa = document.getElementById('aa'+g_id);
  if(aa.style.display == ''){aa.style.display = 'none';}
  else {aa.style.display = '';}
  var data = [ket10,ubn,ssk,yaso,amna,muk];
  for(var x=0;x<data.length;x++){
    if(data[x]==""||data[x]==null){data[x]=0;}
    if(data[x]>100){data[x]=100;}
    else{data[x]=data[x];}
  }
  barbordcolor = "rgba(231, 76, 60,1)"
  barbgcolor = "rgba(231, 76, 60,0.2)"
  gbgcolor = ["#27AE60","#27AE60","#27AE60","#27AE60","#27AE60","#27AE60"];
  hbgcolor = ["rgba(39, 174, 96,0.5)","rgba(39, 174, 96,0.5)","rgba(39, 174, 96,0.5)",
  "rgba(39, 174, 96,0.5)","rgba(39, 174, 96,0.5)","rgba(39, 174, 96,0.5)"];
  if(type_data==1){
    barbordcolor = "rgba(39, 174, 96,1)";
    barbgcolor = "rgba(39, 174, 96,0.5)"
    for(var i=0;i<=5;i++){
      if(data[i]>tar){
        gbgcolor[i] = "rgba(231, 76, 60,1)";
        hbgcolor[i] = "rgba(231, 76, 60,0.5)";
      }
    }
  }else{
    for(var i=0;i<=5;i++){
      if(data[i]<tar){
        gbgcolor[i] = "rgba(231, 76, 60,1)";
        hbgcolor[i] = "rgba(231, 76, 60,0.5)";
      }
    }
  }
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        datasets: [{
          label: "เกณฑ์เป้าหมาย (ร้อยละ)",
              backgroundColor: [barbgcolor],
          borderColor: [barbordcolor],
          data: [tar,tar,tar,tar,tar,tar],

          // Changes this dataset to become a line
          type: 'line'
        },{
          label: "ผลงาน (ร้อยละ)",
      backgroundColor: [gbgcolor[0],gbgcolor[1],gbgcolor[2],gbgcolor[3],gbgcolor[4],gbgcolor[5]],
      hoverBackgroundColor: [hbgcolor[0],hbgcolor[1],hbgcolor[2],hbgcolor[3],hbgcolor[4],hbgcolor[5]],
     //s borderColor: ["#145A32","#145A32","#145A32","#145A32","#145A32","#145A32"],
      data: [data[0], data[1], data[2], data[3], data[4], data[5]],
       type: 'bar',
        }],
        labels: ["เขตสุขภาพที่ 10", "อุบลราชธานี", "ศรีสะเกษ", "ยโสธร", "อำนาจเจริญ", "มุกดาหาร"],
      },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'Province'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          fontFamily: "prompt",
          maxTicksLimit: 6
        },
        maxBarThickness: 60,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 20,
          padding: 10,
          //fontFamily: "Verdana",
          fontFamily: "prompt",
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value)+'%';
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        },
      }],

    },
    legend: {
      display: false,
      labels:{
        font:{
          Family: "prompt",
        }
      }
    },
    tooltips: {
      fontFamily: "prompt",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + tooltipItem.yLabel+'%';
        }
      }
    },
  }
});
}

}
</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
 
<?php include 'navbar.php';?>
<?php include 'aside.php';
$str = array();
  if(empty($page)){
    echo "<script>window.location.href = 'index2.php';</script>";
  }
  else{
    $str = explode("_", $page);
    $str[1].". ".get_data1sql($conn,"stg_group_name","stg_group","stg_group_id = ".$str[1]);
  }
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
              <?php
echo $str[1].". ".get_data1sql($conn,"stg_group_name","stg_group","stg_group_id = ".$str[1]);
              ?>  
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
$txt ="";
$selectgroupstg = $str[1];
$sqlps = "select * FROM
(SELECT p.provcode,p.provnames,p.prov_url FROM province AS p where p.provcode in (34,33) ORDER BY p.provcode  DESC) as p1
UNION
(SELECT p.provcode,p.provnames,p.prov_url FROM province AS p where p.provcode in (35,37,49) ORDER BY p.provcode  ASC)";

$rsp=mysqli_query($conn,$sqlps);
while($r=mysqli_fetch_array($rsp,MYSQLI_ASSOC)) {
  if($r["provcode"] == '34'){$urlp34 = $r["prov_url"];}
  if($r["provcode"] == '33'){$urlp33 = $r["prov_url"];}
  if($r["provcode"] == '35'){$urlp35 = $r["prov_url"];}
  if($r["provcode"] == '37'){$urlp37 = $r["prov_url"];$amn_code = "37";}
  if($r["provcode"] == '49'){$urlp49 = $r["prov_url"];}
}
$sqlstg="SELECT
stg.stg_id,
stg.stg_grp_id,
stg.stg_name,
stg.stg_detail,
stg.stg_own,
stg.stg_status
FROM
stg
WHERE
stg.stg_status =  '1' AND
stg.stg_grp_id =  $selectgroupstg
ORDER BY
stg.stg_id ASC";

$resultstg=mysqli_query($conn,$sqlstg);
while($rowstg=mysqli_fetch_array($resultstg,MYSQLI_ASSOC)) {
$txt .= "<font size='4'>".$rowstg["stg_name"]."</font><br>
<table class=\"table table-bordered dataTable example1\"  width='99%' border='1'>
  <tr class=bg-warning>
    <th width='2%' scope='col'>&nbsp;</th>
    <th width='45%' scope='col'>ตัวชี้วัด</th>
  <th width='7%' scope='col'><center>เป้าหมาย</th>
  <th width='7%' scope='col'><center>เขต 10</th>";

//$sqlp = "SELECT p.provnames,p.prov_url FROM province AS p ORDER BY p.provcode ASC";
$sqlp=" select * FROM
(SELECT p.provcode,p.provnames,p.prov_url FROM province AS p where p.provcode in (34)) as p1
UNION
(SELECT p.provcode,p.provnames,p.prov_url FROM province AS p where p.provcode in (33,35,37,49) ORDER BY p.provcode  ASC) ";
$resultp=mysqli_query($conn,$sqlp);
while($row=mysqli_fetch_array($resultp,MYSQLI_ASSOC)) {
  if($amn_code == '37'){
    $txt .= "<th width='5%' scope='col'><center><a href='".$row['prov_url']."' target='_blank' >".$row['provnames']."</a></th>";
  }
  else{
    $txt .= "<th width='5%' scope='col'><center><a href='".$row['prov_url']."/index2.php' target='_blank'>".$row['provnames']."</a></th>";  
  }
}
$txt .= "<th width='4%' scope='col'></th>
  </tr>";
$sqldata = "SELECT
k.kpi_id,
k.kpi_name,
k.kpi_detail,
k.kpi_type,
k.kpi_scale,
k.kpi_tar,
k.kpi_type_data,
r8.dr_rate,
r8.dr_data,
r8.dr_pop,
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
k.kpi_file,
k.kpi_update,
k.kpi_source
FROM
stg AS s
Left Join kpi AS k ON s.stg_id = k.kpi_stg_id
Left Join data_kpi_region AS r8 ON k.kpi_id = r8.dr_kpi
Left Join (SELECT dp_prov,dp_kpi,dp_data,dp_rate,dp_pop FROM data_kpi_province WHERE dp_prov = '34') AS p34 ON k.kpi_id = p34.dp_kpi
Left Join (SELECT dp_prov,dp_kpi,dp_data,dp_rate,dp_pop FROM data_kpi_province WHERE dp_prov = '33') AS p33 ON k.kpi_id = p33.dp_kpi
Left Join (SELECT dp_prov,dp_kpi,dp_data,dp_rate,dp_pop FROM data_kpi_province WHERE dp_prov = '35') AS p35 ON k.kpi_id = p35.dp_kpi
Left Join (SELECT dp_prov,dp_kpi,dp_data,dp_rate,dp_pop FROM data_kpi_province WHERE dp_prov = '37') AS p37 ON k.kpi_id = p37.dp_kpi
Left Join (SELECT dp_prov,dp_kpi,dp_data,dp_rate,dp_pop FROM data_kpi_province WHERE dp_prov = '49') AS p49 ON k.kpi_id = p49.dp_kpi
WHERE
s.stg_status =  '1' AND
k.kpi_status =  '1' AND
s.stg_grp_id =  '$rowstg[stg_grp_id]' AND
s.stg_id =  '$rowstg[stg_id]'
ORDER BY
k.kpi_order ASC";   

$resultdata=mysqli_query($conn,$sqldata);
$resultdata2=mysqli_query($conn,$sqldata);
if(mysqli_num_rows($resultdata) > 0){
  $z=1;
  while($rowdata=mysqli_fetch_array($resultdata,MYSQLI_ASSOC)) {
    $ck_tar = "select * from tar_prov where kpi_id = $rowdata[kpi_id]";  
$resck_tar=mysqli_query($conn,$ck_tar);
$d_ck = mysqli_fetch_array($resck_tar,MYSQLI_ASSOC);
$p_tar = array($d_ck["tar_ubon"],$d_ck["tar_ssk"],$d_ck["tar_ys"],$d_ck["tar_amn"],$d_ck["tar_muk"]);
$dataxxxx = [$rowdata["dr_rate"],$rowdata["p34"],$rowdata["p33"],
    $rowdata["p35"],$rowdata["p37"],$rowdata["p49"]];
    for($x1=0;$x1<sizeof($dataxxxx);$x1++){
      if($dataxxxx[$x1]==""||empty($dataxxxx[$x1])){$dataxxxx[$x1]=0;}
    }
   $iconcollorx = array();
      if($rowdata["kpi_type_data"] == '0'){
        $dt_type_sign = '>=';
        if($rowdata["dr_rate"] >= $rowdata["kpi_tar"]){
          $iconcollor = "<img src='image/icon/true.png' width='20'/>";   
        }else{
          $iconcollor = "<img src='image/icon/false.png'  width='20'/>";
        }
      }else{
        $dt_type_sign = '<=';
        if($rowdata["dr_rate"] <= $rowdata["kpi_tar"]){
          $iconcollor = "<img src='image/icon/true.png'  width='20'/>";   
        }else{
          $iconcollor = "<img src='image/icon/false.png'  width='20'/>";
        } 
      }
      if($rowdata["kpi_type_data"] == '0'){
        //$dt_type_sign = '>=';
        for($i=0;$i<sizeof($dataxxxx);$i++){
          if($dataxxxx[$i] >= $rowdata["kpi_tar"]){
            $iconcollorx[$i] = "class='bg-success'";   
          }else{
            $iconcollorx[$i] = "class='bg-danger'";
          }     
           if($dataxxxx[$i]==''){$iconcollorx[$i] = "class='bg-secondary'";}
           if($i!=0){ if($p_tar[$i-1]==0&&mysqli_num_rows($resck_tar)>0){$iconcollorx[$i] = "class='bg-dark'";}} 
           //echo "type : ".$row_data["kpi_type_data"]." ".$dt_type_sign." tar:".$row_data["kpi_tar"]." res:".$rate0[$i]."<br>";
        }

      }else{
        //$dt_type_sign = '<=';
        for($i=0;$i<sizeof($dataxxxx);$i++){
          if($dataxxxx[$i] <= $rowdata["kpi_tar"]){
              $iconcollorx[$i] = "class='bg-success'";   
            }else{
              $iconcollorx[$i] = "class='bg-danger'";
            }
            if($dataxxxx[$i]==''){$iconcollorx[$i] = "class='bg-secondary'";}  
            if($i!=0){ if($p_tar[$i-1]==0&&mysqli_num_rows($resck_tar)>0){$iconcollorx[$i] = "class='bg-dark'";}} 

        }  
      }
      //$dupdate_kpi = retDatets($rowdata["kpi_update"]);
    $linklevel=$rowdata['kpi_detail'];
      if ($rowdata["kpi_source"]==2){
        $txt .= "<tr bgcolor='dbf2fd' onclick='show_graph(".$rowdata["kpi_id"].",
        ".$dataxxxx[0].",
        ".$dataxxxx[1].",
        ".$dataxxxx[2].",
        ".$dataxxxx[3].",
        ".$dataxxxx[4].",
        ".$dataxxxx[5].",
        ".$rowdata["kpi_tar"].",
        ".$rowdata["kpi_type_data"].")' style='cursor:pointer'>  
        <td><div align='center'>$iconcollor</div></td>
        <td>&nbsp;  $linklevel (".$rowdata["kpi_id"].")</td>
        <td class=bg-warning><div align='right'>".$dt_type_sign.$rowdata["kpi_tar"]."</div></td>
        <td ".$iconcollorx[0]."><div align='right'>".$rowdata["dr_rate"]."</div></td>
        <td ".$iconcollorx[1]."><div align='right'><a href='".$urlp34."/kpiamphur2.php?id=".$rowdata["kpi_id"]."' target='_blank' class='xa'>$rowdata[p34]</a></div></td>
        <td ".$iconcollorx[2]."><div align='right'><a href='".$urlp33."/kpiamphur2.php?id=".$rowdata["kpi_id"]."' target='_blank' class='xa'>$rowdata[p33]</a></div></td>
        <td ".$iconcollorx[3]."><div align='right'><a href='".$urlp35."/kpiamphur2.php?id=".$rowdata["kpi_id"]."' target='_blank' class='xa'>$rowdata[p35]</a></div></td>
        <td ".$iconcollorx[4]."><div align='right'><a href='".$urlp37."/report.php?id=".$rowdata["kpi_id"]."' target='_blank' class='xa'>$rowdata[p37]</a></div></td>
        <td ".$iconcollorx[5]."><div align='right'><a href='".$urlp49."/kpiamphur2.php?id=".$rowdata["kpi_id"]."' target='_blank' class='xa'>$rowdata[p49]</a></div></td>";
        
        $filename = "profile/f".$rowdata["kpi_id"].".pdf";
        if(file_exists($filename)){
          $txt .= "<td><div align='center'><img src='image/icon/file.png' width=20 title='รายละเอียด' onclick=\"popupwindow('pop-up.php?id=".$rowdata["kpi_id"]."','',600,250)\"></td>
        </tr>";
        }else{
          $txt .= "<td><div align='center'><img src='image/icon/X.png' width=20 title='รายละเอียด'></div></td></tr>";
        }
        $txt .= "<tr style='display:none' id=aa".$rowdata["kpi_id"]."  >   
        <td colspan='10'>
         <!-- Bar Chart -->
              <div class=\"card shadow mb-4\" style=margin-left:10%;margin-right:10%>
                <div class=\"card-header py-3\" style=cursor:pointer onclick=hidegraph(".$rowdata["kpi_id"].")>
                  <h6 class=\"m-0 font-weight-bold text-primary\" >".$linklevel." (".$rowdata["kpi_id"].")</h6>
                </div>
                <div class=\"card-body\" align=center>
                  <div class=\"chart-bar\">
                    <canvas id=".$rowdata["kpi_id"]." style=width:40%></canvas>
                  </div>
                  <div class=\"card-body\" align=center>
                  <table border=0 style=width:80% bgcolor=white class=\"table table-bordered dataTable example1 stripe\" id=\"example\" ><tr  align=center  class=bg-warning><td>จังหวัด</td><td>เขต10</td><td>อุบล</td><td>ศรีสะเกษ</td><td>ยโส</td><td>อำนาจ</td><td>มุก</td></tr>
                  <tr align=right><td class=bg-secondary>ร้อยละ</td>
                  <td $iconcollorx[0]>$rowdata[dr_rate]</td>
                  <td $iconcollorx[1]>$rowdata[p34]</td>
                  <td $iconcollorx[2]>$rowdata[p33]</td>
                  <td $iconcollorx[3]>$rowdata[p35]</td>
                  <td $iconcollorx[4]>$rowdata[p37]</td>
                  <td $iconcollorx[5]>$rowdata[p49]</td></tr>
                 <tr align=right><td class=bg-secondary>ค่าเป้าหมาย</td>
                  <td>".number_format($rowdata['dr_pop'],2)."</td>
                  <td>".number_format($rowdata["pp34"],2)."</td>
                  <td>".number_format($rowdata["pp33"],2)."</td>
                  <td>".number_format($rowdata["pp35"],2)."</td>
                  <td>".number_format($rowdata["pp37"],2)."</td>
                  <td>".number_format($rowdata["pp49"],2)."</td></tr>
                  <tr align=right><td class=bg-secondary>ผลงาน</td>
                  <td>".number_format($rowdata["dr_data"],2)."</td>
                  <td>".number_format($rowdata["pd34"],2)."</td>
                  <td>".number_format($rowdata["pd33"],2)."</td>
                  <td>".number_format($rowdata["pd35"],2)."</td>
                  <td>".number_format($rowdata["pd37"],2)."</td>
                  <td>".number_format($rowdata["pd49"],2)."</td>
                  </tr></table>
                  </div>
                </div>

              </div>
        </td></tr>";
      }else{
        
        $txt .= "<tr onclick='show_graph(".$rowdata["kpi_id"].",
        ".$dataxxxx[0].",
        ".$dataxxxx[1].",
        ".$dataxxxx[2].",
        ".$dataxxxx[3].",
        ".$dataxxxx[4].",
        ".$dataxxxx[5].",
        ".$rowdata["kpi_tar"].",
        ".$rowdata["kpi_type_data"].")' style='cursor:pointer'> 
        <td><div align='center'>$iconcollor</div></td>
        <td>&nbsp;  $linklevel (".$rowdata["kpi_id"].")</td>
        <td class=bg-warning><div align='right'>".$dt_type_sign.$rowdata["kpi_tar"]."</div></td>
        <td ".$iconcollorx[0]."><div align='right'>".$rowdata["dr_rate"]."</div></td>
        <td ".$iconcollorx[1]."><div align='right'><a href='".$urlp34."/kpiamphur2.php?id=".$rowdata["kpi_id"]."' target='_blank' class='xa'>$rowdata[p34]</a></div></td>
        <td ".$iconcollorx[2]."><div align='right'><a href='".$urlp33."/kpiamphur2.php?id=".$rowdata["kpi_id"]."' target='_blank' class='xa'>$rowdata[p33]</a></div></td>
        <td ".$iconcollorx[3]."><div align='right'><a href='".$urlp35."/kpiamphur2.php?id=".$rowdata["kpi_id"]."' target='_blank' class='xa'>$rowdata[p35]</a></div></td>
        <td ".$iconcollorx[4]."><div align='right'><a href='".$urlp37."/report.php?id=".$rowdata["kpi_id"]."' target='_blank' class='xa'>$rowdata[p37]</a></div></td>
        <td ".$iconcollorx[5]."><div align='right'><a href='".$urlp49."/kpiamphur2.php?id=".$rowdata["kpi_id"]."' target='_blank' class='xa'>$rowdata[p49]</a></div></td>";
        $filename = "profile/f".$rowdata["kpi_id"].".pdf";
        if(file_exists($filename)){
          $txt .= "<td><div align='center'><img src='image/icon/file.png' width=20 title='รายละเอียด' onclick=\"popupwindow('pop-up.php?id=".$rowdata["kpi_id"]."','',600,250)\"></div></td>
        </tr>";
        }else{
          $txt .= "<td><div align='center'><img src='image/icon/X.png' width=20 title='รายละเอียด' ></div></td></tr>";
        }
        $txt .= "<tr style='display:none' id=aa".$rowdata["kpi_id"]."  >   
        <td colspan='10' width=50%>
         <!-- Bar Chart -->
              <div class=\"card shadow mb-4\" style=margin-left:10%;margin-right:10%>
                <div class=\"card-header py-3\" style=cursor:pointer onclick=hidegraph(".$rowdata["kpi_id"].")>
                  <h6 class=\"m-0 font-weight-bold text-primary\" >".$linklevel." (".$rowdata["kpi_id"].")</h6>
                </div>
                <div class=\"card-body\">
                  <div class=\"chart-bar\">
                    <canvas id=".$rowdata["kpi_id"]." style=width:40%></canvas>
                  </div>
                  <div class=\"card-body\" align=center>
                  <table border=0 style=width:80% bgcolor=white class=\"table table-bordered dataTable example1 stripe\" id=\"example\" ><tr align=center class=bg-warning><td>จังหวัด</td><td>เขต10</td><td>อุบล</td><td>ศรีสะเกษ</td><td>ยโส</td><td>อำนาจ</td><td>มุก</td></tr>
                  <tr align=right><td class=bg-secondary>ร้อยละ</td>
                  <td $iconcollorx[0]>$rowdata[dr_rate]</td>
                  <td $iconcollorx[1]>$rowdata[p34]</td>
                  <td $iconcollorx[2]>$rowdata[p33]</td>
                  <td $iconcollorx[3]>$rowdata[p35]</td>
                  <td $iconcollorx[4]>$rowdata[p37]</td>
                  <td $iconcollorx[5]>$rowdata[p49]</td></tr>
                  <tr align=right><td class=bg-secondary>ค่าเป้าหมาย</td>
                  <td>".number_format($rowdata['dr_pop'],2)."</td>
                  <td>".number_format($rowdata["pp34"],2)."</td>
                  <td>".number_format($rowdata["pp33"],2)."</td>
                  <td>".number_format($rowdata["pp35"],2)."</td>
                  <td>".number_format($rowdata["pp37"],2)."</td>
                  <td>".number_format($rowdata["pp49"],2)."</td></tr>
                  <tr align=right><td class=bg-secondary>ผลงาน</td>
                  <td>".number_format($rowdata["dr_data"],2)."</td>
                  <td>".number_format($rowdata["pd34"],2)."</td>
                  <td>".number_format($rowdata["pd33"],2)."</td>
                  <td>".number_format($rowdata["pd35"],2)."</td>
                  <td>".number_format($rowdata["pd37"],2)."</td>
                  <td>".number_format($rowdata["pd49"],2)."</td>
                  </tr></table>
                  </div>
                </div>
              </div>
        </td></tr>";
      }
    }
}else{
  $txt .="<tr><td></td><td style='font-size:18px;color:red'>ยังไม่มีข้อมูลตัวชี้วัด</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";}
  $txt .= "</table>";
}
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
