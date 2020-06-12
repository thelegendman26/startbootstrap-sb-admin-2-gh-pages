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

 $query1 = "SELECT
   id_contract  
  ,contractdesc   
  ,contractdate       
  ,contracteffec  
  ,create_date      
  ,update_date        
from contract ";
//var_dump($query1);
//var_dump($conn);


//$result = mysqli_query($connection, $query);
//while($row = mysqli_fetch_assoc($result))
//{
 //$data[] = $row;
//}


try {


                    $result = mysql_query($query1);
					 $i=0;

                             while ($row = mysql_fetch_array($result, MYSQL_NUM)) {

											 $data[] = array(
                                                 'id_contract' => $row[0],
                                                 'contractdesc' => conV($row[1]),
                                                 'contractdate' => $row[2],
                                                 'contracteffec' => $row[3],
                                                 'create_date' => $row[4],
                                                 'update_date' => $row[5]);

										$i++;
					 }
					 
	//var_dump($data);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
//echo $query1;
echo json_encode($data);



?>