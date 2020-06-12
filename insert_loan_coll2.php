<?php

include("connect_mysql.php");
set_time_limit(90);

function conV($C)
{
    return iconv("utf-8", "tis-620", $C);
}


if(isset($_POST["listloanType"]))
{
  $test=$_POST["listloanType"];

    echo $query0 = "select * from product WHERE contractdesc ='".$test["id_product"]."'";

    $result = mysql_query($query0);
    $k=0;
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {


        $k=$k+1;
    }
  if($k<1){
      $contractno         	        = $test["contractno"];
      $id_product         	        = $test["id_product"];
      $productdesc          	    = conV($test["productdesc"]);
      $amt           	            = $test["amt"];
      $priceunit         	        = $test["priceunit"];
      $amttotal          	        = $test["amttotal"];
      $lots           	            = $test["lots"];


$query1 = "insert into contractdetail 
   (
contractdescdetail,
id_product,
productdesc,
amt,
priceunit,
amttotal,
lots,
create_date,
update_date           
 )VALUES
  ('"
    .$contractno."','"
  .$id_product."','"
  .$productdesc."','"
  .$amt."','"
  .$priceunit."','"
    .$amttotal."','"
    .$lots."'".",NOW(), NOW())";
//var_dump($query1);
$result = mysql_query($query1);
$outresult="+++complete";
      echo $query1.$outresult."+++";
  }
    $outresult="+++incomplete";
    echo $query1.$outresult;
}
?>
