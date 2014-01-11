<?php
    require_once('rss.class.php');
    $connection=mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207") or die("不能连接数据库");
mysql_select_db("america",$connection);
mysql_query("SET NAMES 'UTF8'");
  //  function changUTF($con){
  //      $con = iconv("gb2312","utf-8",$con);
  //      return $con;
  //  }
       $myRss = new RSS("Buzz-in.net-America/People","http://buzz-in.net/America/people.php","has an opinion about everything");
    //$myRss->RSS();
    $sql = "select * from people order by ID desc limit 30";
    $result = mysql_query($sql, $connection);
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	            $ID = $row['ID'];
				
				
				$sql1 = "SELECT * FROM people WHERE ID=$ID";
                $result1=mysql_query($sql1) or die("Can't perform Query"); 
                $row1=mysql_fetch_object($result1);
				$time = $row1->time;
				$t = date(' M d, Y  h:i A', strtotime($time));
                $myRss->AddItem($row1->question,"http://buzz-in.net/America/question.php?ID=".$row['ID'],'people',"<div style='margin-bottom:3px;'>$t</div><img width='140' height='87' style='clear:both;' src=\"display_picture.php?ID=$row1->ID\"/><div>".$row1->brief_text."</div>",$row['time']);
            }
    $myRss->BuildRSS();
    $myRss->SaveToFile('feed_people.xml');
	header('Location:./feed_people.xml');
?>