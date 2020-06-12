<?php

function conV($C)
{
    return iconv("tis-620","utf-8", $C);
}
if(isset($_POST["acn_id"])){
$acn_id=$_POST["acn_id"];
$boo_id=$_POST["boo_id"];
}
include("connect_mysql.php");
set_time_limit(90);

$query1 = "select 
CustomerID,
Name,
Email,
CountryCode,
Budget,
Used,
Flag from customer";
//var_dump($query1);
//var_dump($conn);

try {


                    $result = mysql_query($query1);
                              $i=0;

                             while ($row = mysql_fetch_array($result, MYSQL_NUM)) {

                                 $data[] = conV($row[0]."-".$row[1]);
					 }

	//var_dump($data);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
//echo $query1;
echo json_encode($data);



?>