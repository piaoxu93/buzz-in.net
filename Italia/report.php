<?php
//举报
$con = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("comment", $con);

$PID = $_POST["PID"];
$sql="UPDATE comment_italia SET report=report+1 WHERE pid=$PID";
mysql_query($sql);
?>