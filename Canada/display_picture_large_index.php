<?php

$con = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("canada", $con);

$ID = $_GET['ID'];
$temp;
if($ID >= 1000000 && $ID < 2000000)
{$temp = 'people';}
else if($ID >= 2000000 && $ID < 3000000)
{$temp = 'life';}
else if($ID >= 3000000 && $ID < 4000000)
{$temp = 'politics';}
else if($ID >= 4000000 && $ID < 5000000)
{$temp = 'events';}
else if($ID >= 5000000 && $ID < 6000000)
{$temp = 'entertainment';}
else if($ID >= 6000000 && $ID < 7000000)
{$temp = 'culture';}
else if($ID >= 7000000 && $ID < 8000000)
{$temp = 'science_tech';}
else if($ID >= 8000000 && $ID < 9000000)
{$temp = 'sports';}
else if($ID >= 9000000 && $ID < 10000000)
{$temp = 'fun';}
else if($ID >= 10000000 && $ID < 11000000)
{$temp = 'articles';}


$sql = "SELECT * FROM ".$temp." WHERE ID=$ID";

$result=mysql_query($sql) or die("Can't perform Query"); 
$row=mysql_fetch_object($result); 
header("Content-type:image/jpg");
echo $row->large_picture;

?>