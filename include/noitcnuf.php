<?php
error_reporting(E_ERROR | E_PARSE);
$today = date("Y-m-d");
$tmp_year = explode("-", $today);
$budgetyear = $tmp_year[2];
$class_color = array('bg-danger','bg-warning','bg-primary','bg-info','bg-success','bg-secondary','bg-pink');
$class_color2 = array('bg-danger','bg-success','bg-warning');

  function check_weekend($date){
    $DayOfWeek = date("w", strtotime($date));
    $status;
      if($DayOfWeek == 0 or $DayOfWeek ==6)  // 0 = Sunday, 6 = Saturday;
      {
        return TRUE;
      }else{
        return FALSE;
      }
  }
 
function get_page($url){
    $test2= explode(".php", $url);
    $test3 = explode("/", $test2[0]);
    $page = end($test3);
  return $page;
}
function get_page2($url){
    $test2= explode(".php", $url);
    $test3 = explode("?", $test2[1]);
    $page = end($test3);
  return $page;
  }

function get_data1sql($conn,$what,$tb,$condi){
    $sql = "SELECT $what From $tb WHERE $condi";
    $res = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($res,MYSQLI_ASSOC);
    return $data[$what];
}

$ThaiMonth = array( "มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
$ThaiSubMonth = array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
/*ฟังก์ชั่นตัดสตริงแปลงวันที่เป็นไทยแบบสั้น ตัวอย่างรูปแบบสตริงนำเข้า 2001-07-16 23:53:11*/
function SortThaiDate($txt) //YYYY-MM-DD
         {
          if($txt!=''){
              global $ThaiMonth;
              $ddate = explode("-", $txt);
              $Year = (int)$ddate[0]+543;
              $Month = $ddate[1];
              $DayNo = $ddate[2];
              $Month = $Month - 1;
              // $Month = $Month - 1;
             return (int)$DayNo." ".$ThaiMonth[$Month]." ".$Year;                   
         } 
         else{
          return "-";
         }
       }

function dataThaiDate($txt)
         {
if($txt!=''){
              global $ThaiMonth;
              $ddate = explode("-", $txt);
              $Year = (int)$ddate[2]+543;
              $Month = $ddate[1];
              $DayNo = $ddate[0];
              $Month = $Month - 1;
             return (int)$DayNo." ".$ThaiMonth[$Month]." ".$Year;        
             }          
             else{
              return "-";   
             }
         } 
?>