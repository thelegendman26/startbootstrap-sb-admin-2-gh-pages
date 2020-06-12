<?php

function conV($C)
{
    return iconv("tis-620","utf-8", $C);
}
if(isset($_POST["days"])){
$days_id=$_POST["days"];
    $mons_id=$_POST["mons"];
    $years_id=$_POST["years"];
    $endays_id=$days_id+10;
    $startdate=$years_id.'-'.$mons_id.'-'.$days_id;
    $enddate=$years_id.'-'.$mons_id.'-'.$endays_id;

}
include("connect_mysql.php");
set_time_limit(90);
try {
 $query0 = "SELECT
id
,title  
,start
,end
from tbl_events WHERE DATE(start) BETWEEN '".$startdate."' AND  '".$enddate."'";
 //var_dump($query0);
$result = mysql_query($query0);
$i=1;

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {

    $data[] = array(
        'id' => $row[0],
        'title' => $row[1],
        'start' => $row[2],
        'end' => $row[3]);


    $i++;
}




} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
//echo $query1;

echo json_encode($data);



?>