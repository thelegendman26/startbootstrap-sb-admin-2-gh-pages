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

    echo $query0 = "select * from contract WHERE contractdesc  ='".$test["contractno"]."'";

    $result = mysql_query($query0);
    $k=0;
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {


        $k=$k+1;
    }
  if($k<1){
$contractno         	    = $test["contractno"];
$mainproduct          	    = conV($test["mainproduct"]);
$subproduct           	    = conV($test["subproduct"]);
$contractdate       	    = $test["contractdate"];
$contracteffec               = $test["contracteffec"];


$query1 = "insert into contract 
   (
  contractdesc        
  ,mainproduct
  ,subproduct          
  ,contractdate
  ,contracteffec           
 )VALUES
  ('"
  .$contractno."','"
  .$mainproduct."','"
  .$subproduct."','"
  .$contractdate."','"
  .$contracteffec."')";
//var_dump($query);
$result = mysql_query($query1);
$outresult="+++complete";
      echo $query1.$outresult."+++";
  }
    $outresult="+++incomplete";
    echo $query1.$outresult;
}
?>
