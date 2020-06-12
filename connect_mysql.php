<?
		$servername="localhost";
		$user="jack";
		$password="1234";
		$databasename="test";
		
		
		$conn=mysql_connect($servername,$user,$password) or die(mysql_error());
		mysql_query("SET NAMES TIS620");
		
		//$conn2=mysql_connect($servername,$user,$password) or die(mysql_error());
		
		mysql_select_db($databasename,$conn) or die(mysql_error());
		//mysql_select_db($databasename,$conn2) or die(mysql_error());
?>