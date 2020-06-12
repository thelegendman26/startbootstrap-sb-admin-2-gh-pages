<?php
Class dbObj{
 /* Database connection start PRODUCTION*/
 /*
 var $servername = "localhost";
 var $username = "id2068267_thelegendman";
 var $password = "12341234";
 var $dbname = "id2068267_uat";
*/
  /* Database connection start UAT*/

 var $servername = "localhost";
 var $username = "jack";
 var $password = "1234";
 var $dbname = "test";

 var $conn;
 function getConnstring() {
 $con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());
 mysqli_set_charset($con,"utf8");
 /* check connection */
 if (mysqli_connect_errno()) {
 printf("Connect failed: %s\n", mysqli_connect_error());
 exit();
 } else {
 $this->conn = $con;
 }
 return $this->conn;
 }
}
 
?>