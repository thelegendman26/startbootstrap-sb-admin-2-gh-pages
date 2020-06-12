<?php
//fetch.php
//
function conV($C)
{
    return iconv("tis-620","utf-8", $C);
}
include("connection.php");
$db = new dbObj();
$connection =  $db->getConnstring();
$query = '';
$data = array();
$records_per_page = 10;
$start_from = 0;
$current_page_number = 0;
if(isset($_POST["rowCount"]))
{
 $records_per_page = $_POST["rowCount"];
}
else
{
 $records_per_page = 10;
}
if(isset($_POST["current"]))
{
 $current_page_number = $_POST["current"];
}
else
{
 $current_page_number = 1;
}
$start_from = ($current_page_number - 1) * $records_per_page;
$query .= "
 SELECT id_contract
,contractdesc
,contractdate
,contracteffec
,mainproduct
,subproduct
,create_date
,update_date FROM `contract`";
if(!empty($_POST["searchPhrase"]))
{ 
 $query .= 'WHERE (ORDER_NO LIKE "%'.$_POST["searchPhrase"].'%" ';
 $query .= 'OR  CUSTOMER_ID "%'.$_POST["searchPhrase"].'%" ) ';
}
$order_by = '';
if(isset($_POST["sort"]) && is_array($_POST["sort"]))
{
 foreach($_POST["sort"] as $key => $value)
 {
  $order_by .= " $key $value, ";
 }
}
else
{
 $query .= 'ORDER BY id_contract DESC ';
}
if($order_by != '')
{
 $query .= ' ORDER BY ' . substr($order_by, 0, -2);
}

if($records_per_page != -1)
{
 $query .= " LIMIT " . $start_from . ", " . $records_per_page;
}
//echo $query;
//var_dump($query);
//$mysqli->set_charset("utf8");



$result = mysqli_query($connection, $query);

$i=1;

while($row = mysqli_fetch_assoc($result))
{
    $data[] = array(
        'itemcon' => $i,
        'id_contract' => $row["id_contract"],
        'contractdesc' => $row["contractdesc"],
        'contracteffec' => $row["contracteffec"],
        'mainproduct' => $row["mainproduct"],
        'subproduct' =>  $row["subproduct"],
        'create_date' => $row["create_date"],
        'update_date' => $row["update_date"]);
    $i++;
}
//var_dump($data);
$query1 = "SELECT id_contract
,contractdesc
,contractdate
,contracteffec
,mainproduct
,subproduct
,create_date
,update_date FROM `contract` ";
$result1 = mysqli_query($connection, $query1);

$total_records = mysqli_num_rows($result1);

$output = array(
 'current'  => intval($_POST["current"]),
 'rowCount'  => 10,
 'total'   => intval($total_records),
 'rows'   => $data
);

echo json_encode($output);

?>