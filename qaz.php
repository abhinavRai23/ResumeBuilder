<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';

$dbconnect = mysql_connect($dbhost, $dbuser, $dbpassword) or die("gg");
$dbselect = mysql_select_db('resume');

while($rw=mysql_fetch_array(mysql_query("SELECT filename FROM profile")))
{
	echo $rw['filename'];
echo "<br>";
	echo $rw['id'];
echo "<br>";
}// echo $rw[2];


?>