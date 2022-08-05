<?php
include("includes/dbconn.php");    
$sql_backup_dataket = "select * from data_kpi_region where 1";
$rst_backup=mysql_query($sql_backup_dataket,$link);
$i = 1;
while ($data=mysql_fetch_array($rst_backup)) {
	$databackup .= $data["dr_region"].",".$data["dr_kpi"].",".$data["dr_pop"].",".$data["dr_data"].",".$data["dr_rate"].";";
}
$dm = date("d/m");
$y = date("Y") + 543;
$date_backup = $dm."/".$y;

$sql_insert = "insert into data_kpi_region_backup (data_backup,date_backup) values ('$databackup','".$date_backup."')";
if($inst_backup=mysql_query($sql_insert,$link)){
	echo "<center><H2>ทำการประมวลผลข้อมูล ภาพรวมเขตสุขภาพ เรียบร้อยแล้ว</H2></center>";
}
else{
	echo "Error";
}

//kpi_cal = 1 ร้อยละ
$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
SUM(dp_data)/SUM(dp_pop)*100 AS s
FROM
data_kpi_province
WHERE
dp_kpi IN (SELECT kpi_id from kpi WHERE kpi_cal = 1)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

//kpi_cal = 2 อัตราส่วนต่อพันประชากร
$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
SUM(dp_data)/SUM(dp_pop)*1000 AS s
FROM
data_kpi_province
WHERE
dp_kpi IN (SELECT kpi_id from kpi WHERE kpi_cal = 2)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

//kpi_cal = 3 อัตราส่วนต่อแสนประชากร
$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
SUM(dp_data)/SUM(dp_pop)*100000 AS s
FROM
data_kpi_province
WHERE
dp_kpi IN (SELECT kpi_id from kpi WHERE kpi_cal = 3)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

//kpi_cal = 5 คำนวณค่าเฉลี่ย
$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
SUM(dp_data)/SUM(dp_pop) AS s
FROM
data_kpi_province
WHERE
dp_kpi IN (SELECT kpi_id from kpi WHERE kpi_cal = 5)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

/*$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
SUM(dp_data)/Sum(dp_pop) AS s
FROM
data_kpi_province
WHERE
dp_kpi IN (SELECT kpi_id from kpi WHERE kpi_cal = 4)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);
session_start();
unset($_SESSION['username']);
unset($_SESSION['office']);
unset($_SESSION['level']);
unset($_SESSION['namesur']);
unset($_SESSION['post']);
echo "<meta http-equiv='refresh' content='2;URL=index.php'>";*/
/*$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
AVG(dp_rate) as d
FROM
data_kpi_province
WHERE
dp_kpi IN (301003,301004)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
SUM(dp_data) as d
FROM
data_kpi_province
WHERE
dp_kpi IN (101008,201007)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
AVG(dp_rate) as d
FROM
data_kpi_province
WHERE
dp_kpi IN (301005)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);*/

/*
//คิดรหารเฉลี่ยจากรวมตรงๆ
$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
SUM(dp_data)/SUM(dp_pop)*100 AS s
FROM
data_kpi_province
WHERE
dp_kpi IN (SELECT kpi_id from kpi WHERE kpi_cal = 1)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

$sql = "Update kpi SET kpi_update = NOW() WHERE kpi_id IN (SELECT kpi_id from kpi WHERE kpi_cal = 1)";
$resultusr=mysql_query($sql,$link);

//คิดร้อยละรวมตรงๆ
$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
SUM(dp_data)/SUM(dp_pop)*100 AS s
FROM
data_kpi_province
WHERE
dp_kpi IN (0)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

$sql = "Update kpi SET kpi_update = NOW() WHERE kpi_id IN (0)";
$resultusr=mysql_query($sql,$link);

//คิดรวมอัตราต่อ 1000
$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
SUM(dp_data)/SUM(dp_pop)*1000 AS s
FROM
data_kpi_province
WHERE
dp_kpi IN (SELECT kpi_id from kpi WHERE kpi_cal = 2)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

$sql = "Update kpi SET kpi_update = NOW() WHERE kpi_id IN (SELECT kpi_id from kpi WHERE kpi_cal = 2)";
$resultusr=mysql_query($sql,$link);

//คิดรวมอัตราต่อ 100000
$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
SUM(dp_data)/SUM(dp_pop)*100000 AS s
FROM
data_kpi_province
WHERE
dp_kpi IN (SELECT kpi_id from kpi WHERE kpi_cal = 3)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

$sql = "Update kpi SET kpi_update = NOW() WHERE kpi_id IN (SELECT kpi_id from kpi WHERE kpi_cal = 3)";
$resultusr=mysql_query($sql,$link);


//รวม คิดวันนอน
$df = floor((strtotime(date('Y-m-d')) - strtotime("2013-10-01"))/(60 * 60 * 24));
$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
SUM(dp_data)/(SUM(dp_pop)*$df)*100 AS s
FROM
data_kpi_province
WHERE
dp_kpi IN (0)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

$sql = "Update kpi SET kpi_update = NOW() WHERE kpi_id IN (0)";
$resultusr=mysql_query($sql,$link);

//คิดตัวชี้วัดrefer อัตราลดลง
$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
(((SUM(dp_data)*100)/183)-100) AS s
FROM
data_kpi_province
WHERE
dp_kpi IN (SELECT kpi_id from kpi WHERE kpi_cal = 1) and dp_kpi = 404001
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

$sql = "Update kpi SET kpi_update = NOW() WHERE kpi_id IN (SELECT kpi_id from kpi WHERE kpi_cal = 1) and kpi_id = 404001";
$resultusr=mysql_query($sql,$link);

//คิดตัวชี้วัดrefer=จำนวน999
$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
SUM(dp_data) as d
FROM
data_kpi_province
WHERE
dp_kpi IN (SELECT kpi_id from kpi WHERE kpi_cal = 9)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

$sql = "Update kpi SET kpi_update = NOW() WHERE kpi_id IN (SELECT kpi_id from kpi WHERE kpi_cal = 9)";
$resultusr=mysql_query($sql,$link);

//สติปัญญาเด็กไทย
$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
AVG(dp_rate) as d
FROM
data_kpi_province
WHERE
dp_kpi IN (301005)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

$sql = "Update kpi SET kpi_update = NOW() WHERE kpi_id IN (301005)";
$resultusr=mysql_query($sql,$link);

//ส่วนสูงเด็กไทย
$sql = "REPLACE INTO data_kpi_region
SELECT
10 AS r,
dp_kpi AS kpi,
SUM(dp_pop) AS p,
SUM(dp_data) AS d,
AVG(dp_rate) as d
FROM
data_kpi_province
WHERE
dp_kpi IN (301003,301004)
GROUP BY dp_kpi";
$resultusr=mysql_query($sql,$link);

$sql = "Update kpi SET kpi_update = NOW() WHERE kpi_id IN (301003,301004)";
$resultusr=mysql_query($sql,$link);*/
?>