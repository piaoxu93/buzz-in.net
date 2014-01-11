<?php
    require_once('rss.class.php');
    $connection=mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207") or die("不能连接数据库");
mysql_select_db("australia",$connection);
mysql_query("SET NAMES 'UTF8'");
  //  function changUTF($con){
  //      $con = iconv("gb2312","utf-8",$con);
  //      return $con;
  //  }
       $myRss = new RSS("Buzz-in.net-Australia/Home","http://buzz-in.net/Australia/","has an opinion about everything");
    //$myRss->RSS();
    $sql = "select * from newest order by PID desc limit 30";
    $result = mysql_query($sql, $connection);
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	            $ID = $row['ID'];
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
				
				$sql1 = "SELECT * FROM ".$temp." WHERE ID=$ID";
                $result1=mysql_query($sql1) or die("Can't perform Query"); 
                $row1=mysql_fetch_object($result1);
				$time = $row1->time;
				$t = date(' M d, Y  h:i A', strtotime($time));
                $myRss->AddItem($row1->question,"http://buzz-in.net/Australia/question.php?ID=".$row['ID'],$temp,"<div style='margin-bottom:3px;'>$t</div><img width='140' height='87' style='clear:both;' src=\"display_picture.php?ID=$row1->ID\"/><div>".$row1->brief_text."</div>",$row['time']);
            }
    $myRss->BuildRSS();
    $myRss->SaveToFile('feed_home.xml');
	header('Location:./feed_home.xml');
?>