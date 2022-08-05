<?php
$id = $_GET["id"];
include("include/gifnoc.php");
$txt = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>TEMPLATE</title>
    <link rel='stylesheet' href='style.css' type='text/css' media='screen' />
<style>
body {
  font-family: \"Prompt\", sans-serif;

}
.xa {
  color: #FFFFFF;
  text-decoration: underline;
}
table tr {
  font-size: 13px;
}
</style>
</head>
<body><br>";
$sql = "SELECT
k.kpi_id,
k.kpi_name,
k.kpi_detail,
k.kpi_file,
k.kpi_file2,
k.kpi_source,
ds.detaildata
FROM
kpi AS k
LEFT JOIN ds ON k.kpi_source = ds.iddata
WHERE
k.kpi_id = $id";
$resultdata=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($resultdata,MYSQLI_ASSOC);
$txt .= "<table width='95%' border='0' align='center' class='tbhl'>
  <tr>
    <td width='15%'>ID</td>
    <td width='85%'>&nbsp;$rs[kpi_id]</td>
  </tr>
  <tr>
    <td>ตัวชี้วัด</td>
    <td>&nbsp;$rs[kpi_name]</td>
  </tr>
  <tr>
    <td>ตัวชี้วัดเต็ม</td>
    <td>&nbsp;$rs[kpi_detail]</td>
  </tr>
  <tr>
    <td>KPI Template</td>
    <td>&nbsp;<a href='profile/f$rs[kpi_id].pdf'>$rs[kpi_file]</a></td>
  </tr>
  <tr>
    <td>อธิบาย Script</td>
    <td>&nbsp;<a href='profile/f2_$rs[kpi_id]'>$rs[kpi_file2]</a></td>
  </tr>
  <tr>
    <td>แหล่งข้อมูล</td>
    <td>&nbsp;$rs[detaildata]</td>
  </tr>
</table>
<br><center><input type='button' value='ปิด' onclick='window.close();'></center>
";
$txt .= "</body>
</html>";
echo $txt;
?>
