<?php
$host_server = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'test';
$connection = mysqli_connect($host_server,$user_name,$password,$db_name);
$sql = "select * from test";
$result = mysqli_query($connection,$sql);
while($res = mysqli_fetch_array($result))
{
	echo $res['name'];die;
}

?>