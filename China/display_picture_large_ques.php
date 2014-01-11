<?php

$con = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("china", $con);

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

$i = $_GET['i'];
switch ($i)
{
case 0:
echo $row->large_picture; break;
case 1:
echo $row->large_picture1; break;
case 2:
echo $row->large_picture2; break;
case 3:
echo $row->large_picture3; break;
case 4:
echo $row->large_picture4; break;
case 5:
echo $row->large_picture5; break;
case 6:
echo $row->large_picture6; break;
case 7:
echo $row->large_picture7; break;
case 8:
echo $row->large_picture8; break;
case 9:
echo $row->large_picture9; break;
case 10:
echo $row->large_picture10; break;
case 11:
echo $row->large_picture11; break;
case 12:
echo $row->large_picture12; break;
case 13:
echo $row->large_picture13; break;
case 14:
echo $row->large_picture14; break;
case 15:
echo $row->large_picture15; break;
}
?>