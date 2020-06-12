<?php

function conV($C)
{
    return iconv("tis-620","utf-8", $C);
}
if(isset($_POST["acn_id"])){
$acn_id=$_POST["acn_id"];
$subacn_id=$_POST["subacn_id"];
}
include("connect_mysql.php");
set_time_limit(90);
try {
 $query0 = "SELECT
id_contracttranfer
,contractdescdetail  
,id_product
,productdesc
,amt
,lots
,create_date
,update_date 
,priceunit
,time_amt
,time_unit
,due_date

from contracttranfer WHERE id_product  ='".$_POST["acn_id"]."'"."and contractdescdetail  ='".$_POST["subacn_id"]."'";
//var_dump($query0);
$result = mysql_query($query0);
$i=1;

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {

    $data[] = array(
        'itemcon' => $i,
        'productdesc' => $row[3],
        'amt' => $row[4],
        'lots' => $row[5],
        'time_amt' => $row[9],
        'time_unit' => $row[10],
        'due_date' => $row[11]);


    $i++;
}




} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
//echo $query1;

echo json_encode($data);



?>