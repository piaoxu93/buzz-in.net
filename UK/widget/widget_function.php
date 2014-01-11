<?php
function display_widget($num)
{
$con = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
mysql_query("SET NAMES 'UTF8'");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("uk", $con);

$sql = "SELECT * FROM newest order by PID";
$result = mysql_query($sql);
$rownum = mysql_num_rows($result) + 1 - $num;
mysql_data_seek($result,$rownum-1);
$row = mysql_fetch_object($result);
$ID=$row->ID;
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
$result = mysql_query($sql);
$row=mysql_fetch_object($result); 

echo "<a href=\"../question.php?ID=$row->ID\" target=\"_blank\">";
echo "<div class='article'>";
echo "<div class='articleimage'>";
echo "<img src=\"../display_picture.php?ID=$row->ID\" class='thumbnail'  width='140' height='87' style='left: 0px; top: 0px;'> ";
echo "</div>";
echo "<div class='articletext'>";
echo "<div class='title'>"; echo $row->question; echo "</div>";
echo "<div class='snipet'>Posted"; $time = $row->time; echo date(' M d, Y', strtotime($time)); echo "</div>";
echo "<div class='snipet' style='width:200px;margin:0;'>";
echo "Tags:&nbsp";
             $str="";
			 if ($row->tag1)
			 {$str .= $row->tag1;}
			 if ($row->tag2)
			 {$str .= ",&nbsp $row->tag2";}
			 if ($row->tag3)
			 {$str .= ",&nbsp $row->tag3";}
			 if ($row->tag4)
			 {$str .= ",&nbsp $row->tag4";}
			 if ($row->tag5)
			 {$str .= ",&nbsp $row->tag5";}
			 if ($row->tag6)
			 {$str .= ",&nbsp $row->tag6";}
			 if ($row->tag7)
			 {$str .= ",&nbsp $row->tag7";}
			 if ($row->tag8)
			 {$str .= ",&nbsp $row->tag8";}
			 if ($row->tag9)
			 {$str .= ",&nbsp $row->tag9";}
			 if ($row->tag10)
			 {$str .= ",&nbsp $row->tag10";}
			 if ($row->tag11)
			 {$str .= ",&nbsp $row->tag11";}
			 if ($row->tag12)
			 {$str .= ",&nbsp $row->tag12";}
			 if ($row->tag13)
			 {$str .= ",&nbsp $row->tag13";}
			 if ($row->tag14)
			 {$str .= ",&nbsp $row->tag14";}
			 if ($row->tag15)
			 {$str .= ",&nbsp $row->tag15";}
			 echo $str;
echo"</div>";
echo "</div></div></a>";
}


?>