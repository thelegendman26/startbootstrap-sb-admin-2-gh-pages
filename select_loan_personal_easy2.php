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
$ka=0;
 $query0 = "select * from contract WHERE contractdesc ='".$_POST["acn_id"]."'";
//var_dump($query0);
$result = mysql_query($query0);
$k=0;
$l_condate='';
$l_coneffect='';
//var_dump("before loop");
while ($row0 = mysql_fetch_array($result, MYSQL_NUM)) {
//var_dump("Enter loop");

    $k=$k+1;
    $ka=$row0[1];
    $l_condate=$row0[2];
    $l_coneffect=$row0[3];

}
if($k>0){



 $query1 = "SELECT
   id_contractdetail
,contractdescdetail
,id_product
,productdesc
,amt
,priceunit
,amttotal
,lots
,create_date
,update_date         
from contractdetail where contractdescdetail='".$ka."'";
//var_dump($query1);
//var_dump($conn);

try {


                    $result2 = mysql_query($query1);
					 $i=1;

                             while ($row2 = mysql_fetch_array($result2, MYSQL_NUM)) {

											 $data[] = array(
                                                 'itemcon' => $i,
                                                 'id_contractdetail' => $row2[0],
                                                 'contractdescdetail' => $row2[1],
                                                 'id_product' => $row2[2],
                                                 'productdesc' => $row2[3],
                                                 'amt' => conV($row2[4]),
                                                 'priceunit' => conV($row2[5]),
                                                 'amttotal' => $row2[6],
                                                 'lots' => $row2[7],
                                                 'contractdate' => $l_condate,
                                                 'contracteffec' => $l_coneffect);

										$i++;
					 }
					 if ($i==1){
                         $data[] = array(
                             'contractdate' => $l_condate,
                             'contracteffec' => $l_coneffect);

                     }
					 
	//var_dump($data);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
//echo $query1;
}
echo json_encode($data);



?>