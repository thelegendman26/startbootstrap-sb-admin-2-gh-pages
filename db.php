<?php
$conn = mysqli_connect("localhost","jack","1234","test") ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>