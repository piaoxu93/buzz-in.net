<?php
$q=$_GET["q"];

$con = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("canada", $con);
mysql_query("SET NAMES 'UTF8'");
if($q == 'alltime')
{
$sql="SELECT * FROM newest order by vote desc limit 7";
echo "<div id='most_voted' style='background-image:url(image/most_voted.png);'>
    <p><strong>&nbspMost voted <span style='color:#DC143C; font-size:16px;'>»</span>&nbsp&nbsp&nbsp </strong><a onclick=\"showMostVoted('lastmonth')\">Last month</a><span>&nbsp&nbsp&nbsp </span><a style='color:#b00;' onclick=\"showMostVoted('alltime')\">All time</a></p>
	  </div>
	  <ul id='most_voted_list'>";
}
else if($q == 'lastmonth')
{
$sql="SELECT * FROM newest WHERE time >= DATE_SUB( NOW( ) , INTERVAL 1 MONTH ) order by vote desc limit 7";
echo "<div id='most_voted' style='background-image:url(image/most_voted.png);'>
    <p><strong>&nbspMost voted <span style='color:#DC143C; font-size:16px;'>»</span>&nbsp&nbsp&nbsp </strong><a style='color:#b00;' onclick=\"showMostVoted('lastmonth')\">Last month</a><span>&nbsp&nbsp&nbsp </span><a onclick=\"showMostVoted('alltime')\">All time</a></p>
	  </div>
	  <ul id='most_voted_list'>";
}


$result = mysql_query($sql);

while($row = mysql_fetch_object($result))
 {
$ID = $row->ID;
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

$temp1 = "SELECT * FROM ";
$sql = $temp1.$temp." WHERE ID=$ID";
$result1 = mysql_query($sql);
$row1=mysql_fetch_object($result1); 
$tag1 = str_replace(' ', '-', $row1->tag1);
 echo "<li style=\"background:transparent url(image/dot.gif) 0 7px no-repeat;\"><a href=\"question.php?ID=$row1->ID&$tag1\">";echo $row1->question; echo "</a></li>";
 }
echo "</ul>";
echo "</div>";

mysql_close($con);

?>


	  