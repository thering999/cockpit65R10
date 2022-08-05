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

?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
  <!-- Content Wrapper. Contains page content -->
  <div class="card card-info">
    <!-- Content Header (Page header) -->
    <div class="card-header">
      <div class="container-fluid">
        <div class="row mb-2  ">
          <div class="col-sm-12">
            <h1 class="m-0" style="padding-top: 10px">
             ตัวชี้วัดเขตสุขภาพที่ 10 : KPIs <?=get_data1sql($conn,"count(*)","tk_kpi65 tk, kpi k","tk.tk_kpi = k.kpi_id")+
                    get_data1sql($conn,"count(*)","tk_kpi_sub ts, tk_kpi65 tk","ts.tk_id = tk.kpi_num")
                    ?> ตัว (KPIs หลัก 75 + 6 ตัว)
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
$txt="<table id='example1' class='table table-bordered table-sm'>
<thead><tr class=bg-warning height=60px>
<th width='3%'></th><th width=45% scope=col><center>ตัวชี้วัด</th>
<th width=5% scope=col><center>เป้าหมาย</th>
<th width=5% scope=col><center>เขต10</th>";
$sqlp=" select * FROM
(SELECT p.provcode,p.provnames,p.prov_url FROM province AS p where p.provcode in (34)) as p1
UNION
(SELECT p.provcode,p.provnames,p.prov_url FROM province AS p where p.provcode in (33,35,37,49) ORDER BY p.provcode  ASC) ";
$resultp=mysqli_query($conn,$sqlp);
while($row=mysqli_fetch_array($resultp,MYSQLI_ASSOC)) {
  if($amn_code == '37'){
    $txt .= "<th width='5%' scope='col'><center><a href='".$row['prov_url']."' target='_blank'>".$row['provnames']."</a></th>";
  }
  else{
    $txt .= "<th width='5%' scope='col'><center><a href='".$row['prov_url']."/index2.php' target='_blank'>".$row['provnames']."</a></th>";  
  }
}
$txt .= "<th width='5%'></th></tr></thead>
<tbody>";

$sql_tk = "SELECT * FROM tk_kpi65 tk left join kpi k  on tk.tk_kpi = k.kpi_id order by kpi_num";
$res_tk=mysqli_query($conn,$sql_tk);
while($row_tk=mysqli_fetch_array($res_tk,MYSQLI_ASSOC)) {
  $sqldata = "SELECT k.kpi_id,k.kpi_name,k.kpi_detail,k.kpi_type,k.kpi_scale,k.kpi_tar,k.kpi_type_data,
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
s.stg_status =  '1' AND k.kpi_status =  '1'";
  if($row_tk["tk_sub"]==1){
    
  $txt .="<tr class=bg-light>
      <td align=center><button type=\"button\" class=\"btn btn-block btn-secondary btn-sm\" style='pointer-events: none;'>".$row_tk["kpi_num"]."</button></td>
      <td style='padding-top:10px' colspan=9>".$row_tk["tk_kpi_name"]."</td>
      
  </tr>"; 
  $sql_sub = "SELECT * FROM tk_kpi_sub tk,kpi k WHERE k.kpi_id = tk.kpi_id and tk_id = ".$row_tk["kpi_num"]; 
  $res_sub=mysqli_query($conn,$sql_sub);
  
  while($row_sub=mysqli_fetch_array($res_sub,MYSQLI_ASSOC)) {
    $tmp_kpi = explode(" ", $row_sub["kpi_name"]);
    $cclatr = "";
    if($row_sub["kpi_source"]=='2'){$cclatr="bgcolor='dbf2fd'";}
      
      $dt_type_sign= "";
      $sel_dr = "Select * from data_kpi_region where dr_kpi=".$row_sub["kpi_id"];
      $res_dr=mysqli_query($conn,$sel_dr);
      $row_dr=mysqli_fetch_array($res_dr,MYSQLI_ASSOC);
      $rate0[0] = $row_dr['dr_rate'];
      $sqldata2 = $sqldata." AND k.kpi_id = ".$row_sub["kpi_id"]."
ORDER BY k.kpi_order ASC";
$iconcollor=array();
$res_data=mysqli_query($conn,$sqldata2);
$row_data=mysqli_fetch_array($res_data,MYSQLI_ASSOC);
$rate0[1]=$row_data['p34'];$rate0[2]=$row_data['p33'];$rate0[3]=$row_data['p35'];$rate0[4]=$row_data['p37'];$rate0[5]=$row_data['p49'];
$r0x = $rate0;
for($i=0;$i<sizeof($rate0);$i++){
  if($rate0[$i]==''){ $r0x[$i]=0; }
}
$ck_tar = "select * from tar_prov where kpi_id = $row_sub[kpi_id]";  
$resck_tar=mysqli_query($conn,$ck_tar);
$d_ck = mysqli_fetch_array($resck_tar,MYSQLI_ASSOC);
$p_tar = array($d_ck["tar_ket"],$d_ck["tar_ubon"],$d_ck["tar_ssk"],$d_ck["tar_ys"],$d_ck["tar_amn"],$d_ck["tar_muk"]);
$txt .="<tr $cclatr onclick='show_graph(".$row_data["kpi_id"].",
        ".$r0x[0].",
        ".$r0x[1].",
        ".$r0x[2].",
        ".$r0x[3].",
        ".$r0x[4].",
        ".$r0x[5].",
        ".$row_data["kpi_tar"].",
        ".$row_data["kpi_type_data"].")' style='cursor:pointer'>
      <td></td>
      <td align=left>";
      /*if($row_sub["sub_lv"]>1){
        $txt .= ">>";
      }*/
      $txt .="<button type=\"button\" class=\"btn btn-warning btn-sm\" style='pointer-events: none;'>".$tmp_kpi[0]."</button>
      ".$row_sub["kpi_name"]."</td>";
      
if($row_data["kpi_type_data"] == '0'){
        $dt_type_sign = '>=';
        for($i=0;$i<sizeof($rate0);$i++){
          if($rate0[$i] >= $row_data["kpi_tar"]){
            $iconcollor[$i] = "class='bg-success'";   
          }else{
            $iconcollor[$i] = "class='bg-danger'";
          }     
           if($rate0[$i]==''){$iconcollor[$i] = "class='bg-secondary'";}
           if($p_tar[$i]==0&&mysqli_num_rows($resck_tar)>0){$iconcollor[$i] = "class='bg-dark'";}
           //echo "type : ".$row_data["kpi_type_data"]." ".$dt_type_sign." tar:".$row_data["kpi_tar"]." res:".$rate0[$i]."<br>";
        }

      }else{
        $dt_type_sign = '<=';
        for($i=0;$i<sizeof($rate0);$i++){
          if($rate0[$i] <= $row_data["kpi_tar"]){
              $iconcollor[$i] = "class='bg-success'";   
            }else{
              $iconcollor[$i] = "class='bg-danger'";
            }
            if($rate0[$i]==''){$iconcollor[$i] = "class='bg-secondary'";} 
            if($p_tar[$i]==0&&mysqli_num_rows($resck_tar)>0){$iconcollor[$i] = "class='bg-dark'";}
 
        }  
      }
      $txt.="<td align=center style='padding-top:10px' class=bg-warning>".$dt_type_sign.$row_sub["kpi_tar"]."</td>";
      for($i=0;$i<sizeof($rate0);$i++){
        $txt.="<td align=center style='padding-top:10px' ".$iconcollor[$i].">".$rate0[$i]."</td>";
      }
      $txt.="<td align=center style='padding-top:10px'>".get_data1sql($conn,"stg_detail","stg","stg_id = ".$row_tk["tk_owner"])."</td>
  </tr>";
  $txt .= "<tr style='display:none' id=aa".$row_data["kpi_id"]."  >   
        <td colspan='10'>
         <!-- Bar Chart -->
              <div class=\"card shadow mb-4\" style=margin-left:10%;margin-right:10%>
                <div class=\"card-header py-3\" style=cursor:pointer onclick=hidegraph(".$row_data["kpi_id"].")>
                  <h6 class=\"m-0 font-weight-bold text-primary\" >".$row_data["kpi_detail"]." (".$row_data["kpi_id"].")</h6>
                </div>
                <div class=\"card-body\" align=center>
                  <div class=\"chart-bar\">
                    <canvas id=".$row_data["kpi_id"]." style=width:40%></canvas>
                  </div>
                  <div class=\"card-body\" align=center>
                  <table border=0 style=width:80% bgcolor=white class=\"table table-bordered dataTable example1 stripe\" id=\"example\" ><tr  align=center  class=bg-warning><td>จังหวัด</td><td>เขต10</td><td>อุบล</td><td>ศรีสะเกษ</td><td>ยโส</td><td>อำนาจ</td><td>มุก</td></tr>
                  <tr align=right><td class=bg-secondary>ร้อยละ</td>
                  <td $iconcollor[0]>$row_data[dr_rate]</td>
                  <td $iconcollor[1]>$row_data[p34]</td>
                  <td $iconcollor[2]>$row_data[p33]</td>
                  <td $iconcollor[3]>$row_data[p35]</td>
                  <td $iconcollor[4]>$row_data[p37]</td>
                  <td $iconcollor[5]>$row_data[p49]</td></tr>
                 <tr align=right><td class=bg-secondary>ค่าเป้าหมาย</td>
                  <td>".number_format($row_data['dr_pop'],2)."</td>
                  <td>".number_format($row_data["pp34"],2)."</td>
                  <td>".number_format($row_data["pp33"],2)."</td>
                  <td>".number_format($row_data["pp35"],2)."</td>
                  <td>".number_format($row_data["pp37"],2)."</td>
                  <td>".number_format($row_data["pp49"],2)."</td></tr>
                  <tr align=right><td class=bg-secondary>ผลงาน</td>
                  <td>".number_format($row_data["dr_data"],2)."</td>
                  <td>".number_format($row_data["pd34"],2)."</td>
                  <td>".number_format($row_data["pd33"],2)."</td>
                  <td>".number_format($row_data["pd35"],2)."</td>
                  <td>".number_format($row_data["pd37"],2)."</td>
                  <td>".number_format($row_data["pd49"],2)."</td>
                  </tr></table>
                  </div>
                </div>

              </div>
        </td></tr>";
    }
  }
  else{
    $cclatr = "";
    if($row_tk["kpi_source"]=='2'){$cclatr="bgcolor='dbf2fd'";}
     
  $sel_dr = "Select * from data_kpi_region where dr_kpi=".$row_tk["kpi_id"];
      $res_dr=mysqli_query($conn,$sel_dr);
      $row_dr=mysqli_fetch_array($res_dr,MYSQLI_ASSOC);
      $rate[0] = $row_dr['dr_rate'];
      $dt_type_sign= "";
      $sqldata .= " AND k.kpi_id = ".$row_tk["kpi_id"]."
ORDER BY k.kpi_order ASC";
$iconcollor=array();
$res_data=mysqli_query($conn,$sqldata);
$row_data=mysqli_fetch_array($res_data,MYSQLI_ASSOC);
$rate[1]=$row_data['p34'];$rate[2]=$row_data['p33'];$rate[3]=$row_data['p35'];$rate[4]=$row_data['p37'];$rate[5]=$row_data['p49'];
$r0 = $rate;
$ck_tar = "select * from tar_prov where kpi_id = $row_tk[kpi_id]";  
$resck_tar=mysqli_query($conn,$ck_tar);
$d_ck = mysqli_fetch_array($resck_tar,MYSQLI_ASSOC);
$p_tar = array($d_ck["tar_ket"],$d_ck["tar_ubon"],$d_ck["tar_ssk"],$d_ck["tar_ys"],$d_ck["tar_amn"],$d_ck["tar_muk"]);
for($i=0;$i<sizeof($rate);$i++){
  if($rate[$i]==''){ $r0[$i]=0; }
}
 $txt .="<tr $cclatr onclick='show_graph(".$row_data["kpi_id"].",
        ".$r0[0].",
        ".$r0[1].",
        ".$r0[2].",
        ".$r0[3].",
        ".$r0[4].",
        ".$r0[5].",
        ".$row_data["kpi_tar"].",
        ".$row_data["kpi_type_data"].")' style='cursor:pointer'>
      <td align=center>
      <button type=\"button\" class=\"btn btn-block btn-secondary btn-sm\" style='pointer-events: none;'>".$row_tk["kpi_num"]."</button>
      </td>
      <td style='padding-top:10px'>".$row_tk["tk_kpi_name"]."</td>";
if($row_tk["kpi_type_data"] == '0'){
        $dt_type_sign = '>=';
        for($i=0;$i<sizeof($rate);$i++){
          if($rate[$i] >= $row_tk["kpi_tar"]){
            $iconcollor[$i] = "class='bg-success'";   
          }else{
            $iconcollor[$i] = "class='bg-danger'";
          }     
           if($rate[$i]==''){$iconcollor[$i] = "class='bg-secondary'";} 
           if($p_tar[$i]==0&&mysqli_num_rows($resck_tar)>0){$iconcollor[$i] = "class='bg-dark'";} 
        }
      }else{
        $dt_type_sign = '<=';
        for($i=0;$i<sizeof($rate);$i++){
          if($rate[$i] <= $row_tk["kpi_tar"]){
              $iconcollor[$i] = "class='bg-success'";   
            }else{
              $iconcollor[$i] = "class='bg-danger'";
            }
            if($rate[$i]==''){$iconcollor[$i] = "class='bg-secondary'";}  
            if($p_tar[$i]==0&&mysqli_num_rows($resck_tar)>0){$iconcollor[$i] = "class='bg-dark'";}
        }  
      }

  $txt .="<td style='padding-top:10px' align=center class=bg-warning>".$dt_type_sign.$row_tk["kpi_tar"]."</td>";
      for($i=0;$i<sizeof($rate);$i++){
        $txt.="<td align=center style='padding-top:10px' ".$iconcollor[$i].">".$rate[$i]."</td>";
      }
      $txt .="<td align=center style='padding-top:10px'>".get_data1sql($conn,"stg_detail","stg","stg_id = ".$row_tk["tk_owner"])."</td>
  </tr>";
  $txt .= "<tr style='display:none' id=aa".$row_data["kpi_id"]."  >   
        <td colspan='10'>
         <!-- Bar Chart -->
              <div class=\"card shadow mb-4\" style=margin-left:10%;margin-right:10%>
                <div class=\"card-header py-3\" style=cursor:pointer onclick=hidegraph(".$row_data["kpi_id"].")>
                  <h6 class=\"m-0 font-weight-bold text-primary\" >".$row_data["kpi_detail"]." (".$row_data["kpi_id"].")</h6>
                </div>
                <div class=\"card-body\" align=center>
                  <div class=\"chart-bar\">
                    <canvas id=".$row_data["kpi_id"]." style=width:40%></canvas>
                  </div>
                  <div class=\"card-body\" align=center>
                  <table border=0 style=width:80% bgcolor=white class=\"table table-bordered dataTable example1 stripe\" id=\"example\" ><tr  align=center  class=bg-warning><td>จังหวัด</td><td>เขต10</td><td>อุบล</td><td>ศรีสะเกษ</td><td>ยโส</td><td>อำนาจ</td><td>มุก</td></tr>
                  <tr align=right><td class=bg-secondary>ร้อยละ</td>
                  <td $iconcollor[0]>$row_data[dr_rate]</td>
                  <td $iconcollor[1]>$row_data[p34]</td>
                  <td $iconcollor[2]>$row_data[p33]</td>
                  <td $iconcollor[3]>$row_data[p35]</td>
                  <td $iconcollor[4]>$row_data[p37]</td>
                  <td $iconcollor[5]>$row_data[p49]</td></tr>
                 <tr align=right><td class=bg-secondary>ค่าเป้าหมาย</td>
                  <td>".number_format($row_data['dr_pop'],2)."</td>
                  <td>".number_format($row_data["pp34"],2)."</td>
                  <td>".number_format($row_data["pp33"],2)."</td>
                  <td>".number_format($row_data["pp35"],2)."</td>
                  <td>".number_format($row_data["pp37"],2)."</td>
                  <td>".number_format($row_data["pp49"],2)."</td></tr>
                  <tr align=right><td class=bg-secondary>ผลงาน</td>
                  <td>".number_format($row_data["dr_data"],2)."</td>
                  <td>".number_format($row_data["pd34"],2)."</td>
                  <td>".number_format($row_data["pd33"],2)."</td>
                  <td>".number_format($row_data["pd35"],2)."</td>
                  <td>".number_format($row_data["pd37"],2)."</td>
                  <td>".number_format($row_data["pd49"],2)."</td>
                  </tr></table>
                  </div>
                </div>

              </div>
        </td></tr>";
}
}
$txt.="</tbody>";

$txt .="<tfoot>
<tr class=bg-warning>
<th width='3%'></th><th width=45% scope=col><center>ตัวชี้วัด</th>
<th width=5% scope=col><center>เป้าหมาย</th>
<th width=5% scope=col><center>เขต10</th>";
$sqlp="select * FROM
(SELECT p.provcode,p.provnames,p.prov_url FROM province AS p where p.provcode in (34)) as p1
UNION
(SELECT p.provcode,p.provnames,p.prov_url FROM province AS p where p.provcode in (33,35,37,49) ORDER BY p.provcode  ASC) ";
$resultp=mysqli_query($conn,$sqlp);
while($row=mysqli_fetch_array($resultp,MYSQLI_ASSOC)) {
  if($amn_code == '37'){
    $txt .= "<th width='5%' scope='col'><center><a href='".$row['prov_url']."' target='_blank'>".$row['provnames']."</a></th>";
  }
  else{
    $txt .= "<th width='5%' scope='col'><center><a href='".$row['prov_url']."/index2.php' target='_blank'>".$row['provnames']."</a></th>";  
  }
}
$txt .= "<th width='5%'></th></tr>
                  </tfoot>
                </table>";
$sqlr = "SELECT k.kpi_id,k.kpi_name,k.kpi_detail,k.kpi_type,k.kpi_scale,k.kpi_tar,k.kpi_type_data,
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
$result = mysqli_query($conn,$sqlr);
$NO_passed = array(0,0,0,0,0,0);
$NO_failed = array(0,0,0,0,0,0);
$xx = array("dr_rate","p34","p33","p35","p37","p49");
$l_labels = array("เขตสุขภาพที่ 10","อุบลราชธานี","ศรีสะเกษ","ยโสธร","อำนาจเจริญ","มุกดาหาร");
while ($data=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  for($x=0;$x<sizeof($xx);$x++){
    if($data['kpi_type_data']==0){
      if($data[$xx[$x]]>=$data['kpi_tar']){
        $NO_passed[$x]++;
      }else{
        $NO_failed[$x]++;
      }
    }else{
      if($data[$xx[$x]]<=$data['kpi_tar']){
        $NO_passed[$x]++;
      }else{
        $NO_failed[$x]++;
      }
    }
  }
}

echo "<table border=0 align=center width=100%><tr><td width = 50%><canvas id=\"myChart2\"></canvas></td><td width = 50%>

          <div class=\"col-md-12\">
            <div class=\"card card-success\">
              <div class=\"card-header border-0\">
                <div class=\"d-flex justify-content-between\">
                  <h2 class=\"card-title\"><center>รายละเอียดตัวชี้วัดเขตสุขภาพที่ 10 (75+6)</h2>
                </div>
              </div>
              <div class=\"card-body\" id=\"card_moph\">
                <table align=center border=0 style=width:100% bgcolor=white class=\"table table-bordered dataTable \" id=\"example1\" >

<tr class=bg-warning  style=font-size:14px;font-weight:bold;>
<td align=center>จังหวัด</td>
<td align=center>เขต 10</td>
<td align=center>อุบล</td>
<td align=center>ศรีสะเกษ</td>
<td align=center>ยโส</td>
<td align=center>อำนาจ</td>
<td align=center>มุก</td></tr>";
echo "<tr><td class=bg-success align=center>ผ่าน</td>";
for($i=0;$i<sizeof($NO_passed);$i++){
    echo "<td align=center>$NO_passed[$i]</td>";
  }
echo "</tr><tr><td class=bg-danger align=center>ไม่ผ่าน</td>";
for($i=0;$i<sizeof($NO_passed);$i++){
    echo "<td align=center>$NO_failed[$i]</td>";
  }
echo "</tr><tr><td class=bg-success align=center>ผ่าน(%)</td>";
for($i=0;$i<sizeof($NO_passed);$i++){
    echo "<td align=center>".number_format(($NO_passed[$i]*100/($NO_failed[$i]+$NO_passed[$i])),2)."</td>";
  }
 echo "</tr><tr><td class=bg-danger align=center>ไม่ผ่าน(%)</td>";
 for($i=0;$i<sizeof($NO_passed);$i++){
    echo "<td align=center>".number_format(($NO_failed[$i]*100/($NO_failed[$i]+$NO_passed[$i])),2)."</td>";
  }
  echo "</tr></table>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
        <!-- /.row -->
      </div>
</td></tr></table>";
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
      "responsive": true, "lengthChange": false, "autoWidth": false,"paging": false,"searching": true,
      "ordering": false,"info": true,
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
<script>
const ctx2 = document.getElementById('myChart2').getContext('2d');
Chart.defaults.global.defaultFontFamily = "prompt";
const myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: [<?php 
              for($x=0;$x<sizeof($l_labels);$x++){echo "'".$l_labels[$x]."',";}
              ?>],
        datasets: [{
            label: '# of Passed',
            data: [<?php 
              for($x=0;$x<sizeof($NO_passed);$x++){echo $NO_passed[$x].",";}
              ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.8)',
                'rgba(54, 162, 235, 0.8)',
                'rgba(255, 206, 86, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                'rgba(153, 102, 255, 0.8)',
                'rgba(255, 159, 64, 0.8)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        },{
            label: '# of Failed',
            data: [<?php 
              for($x=0;$x<sizeof($NO_failed);$x++){echo $NO_failed[$x].",";}
              ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }],
    },
    options: {
        scales: {
            yAxes: [{
              stacked: true,
                ticks: {
                    beginAtZero: true
                },

            }],
            xAxes: [{
              stacked: true,
                ticks: {
                    beginAtZero: true
                }
            }]
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
          return datasetLabel + ': ' + tooltipItem.yLabel+' KPIs';
        }
      }
    },
    },
});
</script>
</body>
</html>
