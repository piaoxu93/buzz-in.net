<?php
$con = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
mysql_query("SET NAMES 'UTF8'");
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
?>

<?php 
function name($row,$i)
{
 $str_1='';
 switch ($i)
 {
	case 1:
	$str_1=$row->name1;
	break;
	case 2:
	$str_1=$row->name2;
	break;
	case 3:
	$str_1=$row->name3;
	break;
	case 4:
	$str_1=$row->name4;
	break;
	case 5:
	$str_1=$row->name5;
	break;
	case 6:
	$str_1=$row->name6;
	break;
	case 7:
	$str_1=$row->name7;
	break;
	case 8:
	$str_1=$row->name8;
	break;
	case 9:
	$str_1=$row->name9;
	break;
	case 10:
	$str_1=$row->name10;
	break;
	case 11:
	$str_1=$row->name11;
	break;
	case 12:
	$str_1=$row->name12;
	break;
	case 13:
	$str_1=$row->name13;
	break;
	case 14:
	$str_1=$row->name14;
	break;
	case 15:
	$str_1=$row->name15;
	break;
 }
if(strlen($str_1) > 65)
{$str_1=substr($str_1,0,65)."...";}
echo $str_1;
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
      <title><?php echo $row->question; ?></title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <style type="text/css">
      </style>
	  <link href="css/default.css" type="text/css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="css/comment_styles.css">
	  <script src="js/mostvoted.js"></script>
	  <?php include 'page.php'; ?>
	  <style type="text/css">
      ul{margin:0;padding:0;}
      .demo{float:left; width: 323px;margin: 5px auto 0px 18px;clear: both;position: relative;}
      .bx_wrap {}
      .bx_wrap ul img { border: 2px solid #ddd;}
      .bx_wrap ul li{text-align:center}
      .bx_wrap ul li a:hover{text-decoration:none; color:#f30}
      .bx_wrap a.prev {width:20px;height:24px;line-height:24px;outline-style:none;outline-width: 0;position:absolute; top:85px; left:-16px; text-indent:-999em; background: url(image/arr_left.gif) no-repeat;}
      .bx_wrap a.next {width:20px;height:24px;line-height:24px; left:308px;position: absolute;top:85px; text-indent:-999em; background:url(image/arr_right.gif) no-repeat;}
	  .bx_wrap a.next:hover{background:url(image/arr_right_yellow.gif) no-repeat;}
	  .bx_wrap a.prev:hover{background:url(image/arr_left_yellow.gif) no-repeat;}
	  
	  .bx_wrap_1 {}
      .bx_wrap_1 ul img { border: 2px solid #ddd;}
      .bx_wrap_1 ul li{text-align:center}
      .bx_wrap_1 ul li a:hover{text-decoration:none; color:#f30}
      .bx_wrap_1 a.prev {width:20px;height:24px;line-height:24px;outline-style:none;outline-width: 0;position:absolute; top:15px; left:-23px; text-indent:-999em; background: url(image/arr_left.gif) no-repeat;}
      .bx_wrap_1 a.next {width:20px;height:24px;line-height:24px; left:55px;position: absolute;top:15px; text-indent:-999em; background:url(image/arr_right.gif) no-repeat;}
	  .bx_wrap_1 a.next:hover{background:url(image/arr_right_yellow.gif) no-repeat;}
	  .bx_wrap_1 a.prev:hover{background:url(image/arr_left_yellow.gif) no-repeat;}
      </style>
	  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <script type="text/javascript" src="js/bxCarousel.js"></script>
	  
      <script type="text/javascript">
	  //图片滚动
      $(function(){
	     $('#demo1').bxCarousel({
		     display_num: 1, 
		     move: 1, 
		     auto: false, 
		     auto_interval: 4000,
		     margin: 10,
		     auto_hover: true
	      });
       });
       </script>
	   <script type="text/javascript">
	  //图片滚动
      $(function(){
	     $('#demo2').bxCarousel({
		     display_num: 1, 
		     move: 1, 
		     auto: false, 
		     auto_interval: 4000,
		     margin: 10,
		     auto_hover: true
	      });
       });
       </script>
	   <?php include 'display_question.php'; ?>
	   <?php include 'advertisement.php'; ?>
</head>

<body>
      <div id="site" class="main">
	  <a name="top"></a>
	    <div id="top" style="background-image:url('image/top.png');">                   
          <div id="topBar">
               
            <div id="leftBar">           
			  <div id="icon_facebook">
			    <a href="http://www.facebook.com/BuzzInnetCh" target="_blank">
				  <img src="image/facebook.png">
			    </a>
			  </div>
			  <div id="icon_twitter">
			    <a href="http://www.twitter.com/buzzinnet" target="_blank">
				  <img src="image/twitter.png">
				</a>
			  </div>
			  <div id="icon_google_plus">
			    <a href="http://plus.google.com/102352953196411992804" target="_blank">
				  <img src="image/google+.png" >
				</a>
			  </div> 
              <div id="icon_linkedin">
			    <a href="http://www.linkedin.com/company/3295234?trk=tyah" target="_blank">
				  <img src="image/linkedin.png" >
				</a>
			  </div>
              <div id="icon_RSS">
			    <a href="feed.php" target="_blank">
				  <img src="image/RSS.png" >
				</a>
			  </div>
              <div id="widget">
			    <a href="\" target="_blank">
				  <img src="image/widget.jpg" >
				</a>
			  </div>			  
			  <div id="icon_America">
			    <a href="../America/" class="icon_America" target="_blank">
				<img src="image/America.jpg"></a>
			  </div>
			  <div id="icon_English">
			    <a href="../UK/" class="icon_English" target="_blank">
				<img src="image/English.jpg"></a>
			  </div>
			  <div id="icon_Canada">
			    <a href="../Canada/" class="icon_Canada" target="_blank">
				<img src="image/Canada.jpg"></a>
			  </div>
			  <div id="icon_Australia">
			    <a href="../Australia/" class="icon_Australia" target="_blank">
				<img src="image/Australia.jpg"></a>
			  </div>
			  <div id="icon_India">
			    <a href="../India/" class="icon_India" target="_blank">
				<img src="image/India.jpg"></a>
			  </div>
			  <div id="icon_Italian">
			    <a href="../Italia/" class="icon_Italian" target="_blank">
				<img src="image/Italian.jpg"></a>
			  </div>
			  <div id="icon_China">
			    <a href="../China/" class="icon_China" target="_blank">
				<img src="image/China.jpg"></a>
			  </div>
			  <div id="icon_Macedonia">
			    <a href="../Macedonia/" class="icon_Macedonia" target="_blank">
				<img src="image/Macedonia.jpg"></a>
			  </div>
			  <div id="marketing">
			  <a href="marketing.php">商业合作</a>
			  </div>
			  <div id="about">
			  <a href="about.php">关于</a>
			  </div>
			  <div id="contact">
			  <a href="contact.php">联系我们</a>
			  </div>
			  <div id="datetime">
			    <script type="text/javascript">
                 //单个数字配零
                function getDouble(number){
                  var numbers=["0","1","2","3","4","5","6","7","8","9"];
                   for(var i=0;i<numbers.length;i++){
                    if(numbers[i]==number){
                      return "0"+numbers[i];
                     }else if(i==9){
                        return number;
                        }
                     }
                  }
                 //得到当天时间
                 function getTodayTime(){
                 var days=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
                 var today=new Date();
                 var str=getDouble([today.getMonth()+1])+"/" +getDouble(today.getDate()) +"/"+(today.getYear()<1900?1900+today.getYear():today.getYear()) +"&nbsp"+ days[today.getDay()];
                 document.getElementById('datetime').innerHTML=str; 
                  }
                //每隔一秒刷新一次
                 setInterval("getTodayTime()",1000);
                </script>
			  </div>
			  
		      <form method="get" action="http://www.google.com.hk/search">
			    <div id="search">
				  <p style="margin:0;">
				  <input type="hidden" name="sitesearch" value="buzz-in.net/China">
				  </p>
		          <input type="text" name="as_q" id="searchBar" style="background:url('image/search.png') no-repeat #fff;" />
			      <input type="submit" id="search_button" value="" style="background-image:url('image/search_button.png');"/>
				</div>
			  </form>
			 </div>
		    
		  </div>
		</div>
	    <div id="header">  
		  <div id="logo">
		    <a href="index.php"><img src="image/logo.png"></a>
		  </div>
		  <div id="advertisement_1">
		  <img src="image/Macedonia1.png">
		  </div>
		  
		</div>
		
		<div id="menu" style="background-image:url('image/menu.png')">
		  <div id="menu_button">
		    <div id="button" style="width:84px;"><a id="link" href="index.php">主页</a></div>
			<div id="button" style="width:84px;"><a id="link" href="people.php">人们</a></div>
			<div id="button" style="width:84px;"><a id="link" href="life.php">生活</a></div>
			<div id="button" style="width:84px;"><a id="link" href="politics.php">政治</a></div>
			<div id="button" style="width:84px;"><a id="link" href="events.php">事件</a></div>
			<div id="button" style="width:84px;"><a id="link" href="entertainment.php">娱乐</a></div>
			<div id="button" style="width:84px;"><a id="link" href="culture.php">文化</a></div>
			<div id="button" style="width:129px;"><a id="link" href="science_tech.php" >科学与技术</a></div>
			<div id="button" style="width:84px;"><a id="link" href="sports.php">运动</a></div>
			<div id="button" style="width:84px;"><a id="link" href="fun.php">趣事</a></div>
			<div id="button" style="width:84px; border-right:0;"><a id="link" href="articles.php">文章</a></div>
		  </div>
        </div>	
                       
		  <div class="content">
		    <div class="container_1_left">
			 <h1 id="question_title">
			 <?php
			   echo $row->question;
			 ?>
			 </h1>
			 <p id="time" style="margin:2px 0 5px 0;font-size:12px;color:grey;">
			 <?php
			   echo "发布日期&nbsp";
			   $time = $row->time;
               echo date(' M d, Y', strtotime($time));
			 ?>
			 </p>
			 <p id="tags" style="margin:2px 0 0 0;font-size:12px;color:grey;">
			 <?php
			 echo "标签: ";
			 if ($row->tag1)
			 {}
			 if ($row->tag2)
			 {echo $row->tag2;}
			 if ($row->tag3)
			 {echo ", ";echo $row->tag3;}
			 if ($row->tag4)
			 {echo ", ";echo $row->tag4;}
			 if ($row->tag5)
			 {echo ", ";echo $row->tag5;}
			 if ($row->tag6)
			 {echo ", ";echo $row->tag6;}
			 if ($row->tag7)
			 {echo ", ";echo $row->tag7;}
			 if ($row->tag8)
			 {echo ", ";echo $row->tag8;}
			 if ($row->tag9)
			 {echo ", ";echo $row->tag9;}
			 if ($row->tag10)
			 {echo ", ";echo $row->tag10;}
			 if ($row->tag11)
			 {echo ", ";echo $row->tag11;}
			 if ($row->tag12)
			 {echo ", ";echo $row->tag12;}
			 if ($row->tag13)
			 {echo ", ";echo $row->tag13;}
			 if ($row->tag14)
			 {echo ", ";echo $row->tag14;}
			 if ($row->tag15)
			 {echo ", ";echo $row->tag15;}
			 ?>
			 </p>
			 <div id="roll_picture">
			 <div class="demo">
                  <div class="bx_wrap" >
                    <div class="bx_container">
                     <ul id="demo1" >
					 <?php
					  $result = mysql_query($sql);
					  $row = mysql_fetch_object($result);
					  $i = 0;
					  $n = 1;
					  while($i <= 15)
					  {
					    $i++;
						switch ($i)
						{
						   case 1:
						   if($row->large_picture1 == NULL)
						   {$n=0;}
						   break;
						   case 2:
						   if($row->large_picture2 == NULL)
						   {$n=0;}
						   break;
						   case 3:
						   if($row->large_picture3 == NULL)
						   {$n=0;}
						   break;
						   case 4:
						   if($row->large_picture4 == NULL)
						   {$n=0;}
						   break;
						   case 5:
						   if($row->large_picture5 == NULL)
						   {$n=0;}
						   break;
						   case 6:
						   if($row->large_picture6 == NULL)
						   {$n=0;}
						   break;
						   case 7:
						   if($row->large_picture7 == NULL)
						   {$n=0;}
						   break;
						   case 8:
						   if($row->large_picture8 == NULL)
						   {$n=0;}
						   break;
						   case 9:
						   if($row->large_picture9 == NULL)
						   {$n=0;}
						   break;
						   case 10:
						   if($row->large_picture10 == NULL)
						   {$n=0;}
						   break;
						   case 11:
						   if($row->large_picture11 == NULL)
						   {$n=0;}
						   break;
						   case 12:
						   if($row->large_picture12 == NULL)
						   {$n=0;}
						   break;
						   case 13:
						   if($row->large_picture13 == NULL)
						   {$n=0;}
						   break;
						   case 14:
						   if($row->large_picture14 == NULL)
						   {$n=0;}
						   break;
						   case 15:
						   if($row->large_picture15 == NULL)
						   {$n=0;}
						   break;
						}
						if($n==0)
						{break;}
					  }
					  $sum = $i;
					  $i = 0;
					  $n = 1;
					  
					  while($i <= 15)
					  {
                        echo "<li ><a style='text-decoration:none;' href=\"#\"><img alt=\"#\" width='300' height='186' src=\"display_picture_large_ques.php?ID=$row->ID&i=$i\"><br/><p style='height:20px;width:290px;margin-bottom:0px;'>";name($row,$i);echo "</p>"; {$t=$i+1;echo "<p style='clear:both;float:right;height:20px;width:70px;margin-top:0px;color:#DC143C;text-align: right;'>$t of $sum</p>";} echo "</a></li>";
                        $i++;
						switch ($i)
						{
						   case 0:
						   if($row->large_picture == NULL)
						   {$n=0;}
						   break;
						   case 1:
						   if($row->large_picture1 == NULL)
						   {$n=0;}
						   break;
						   case 2:
						   if($row->large_picture2 == NULL)
						   {$n=0;}
						   break;
						   case 3:
						   if($row->large_picture3 == NULL)
						   {$n=0;}
						   break;
						   case 4:
						   if($row->large_picture4 == NULL)
						   {$n=0;}
						   break;
						   case 5:
						   if($row->large_picture5 == NULL)
						   {$n=0;}
						   break;
						   case 6:
						   if($row->large_picture6 == NULL)
						   {$n=0;}
						   break;
						   case 7:
						   if($row->large_picture7 == NULL)
						   {$n=0;}
						   break;
						   case 8:
						   if($row->large_picture8 == NULL)
						   {$n=0;}
						   break;
						   case 9:
						   if($row->large_picture9 == NULL)
						   {$n=0;}
						   break;
						   case 10:
						   if($row->large_picture10 == NULL)
						   {$n=0;}
						   break;
						   case 11:
						   if($row->large_picture11 == NULL)
						   {$n=0;}
						   break;
						   case 12:
						   if($row->large_picture12 == NULL)
						   {$n=0;}
						   break;
						   case 13:
						   if($row->large_picture13 == NULL)
						   {$n=0;}
						   break;
						   case 14:
						   if($row->large_picture14 == NULL)
						   {$n=0;}
						   break;
						   case 15:
						   if($row->large_picture15 == NULL)
						   {$n=0;}
						   break;
						}
						if($n==0)
						{break;}
					  }
					 ?>
                     </ul>
                    </div>
                   </div>
                </div>
			 </div>
			 
			 <div id="question_page_option" style="float:none;margin-left:15px;">
			 <form id="question_page_form" action="<?php echo "voteadd.php?ID=$row->ID" ?>" method='POST'>
			  <?php
			  $n=1;
				$i=1;
				$count=0;
				while ($n != 0)
				{
				  $option = "option"."$i";
				  switch ($option)
                 {
                   case 'option1':
				     if($row->option1 != NULL)
                     {echo"<input type='radio' name='options' value='option1'/> <span id='option'>$row->option1</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option2':
                      if($row->option2 != NULL)
                     {echo"<input type='radio' name='options' value='option2'/> <span id='option'>$row->option2</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option3':
                      if($row->option3 != NULL)
                     {echo"<input type='radio' name='options' value='option3'/> <span id='option'>$row->option3</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option4':
                      if($row->option4 != NULL)
                     {echo"<input type='radio' name='options' value='option4'/> <span id='option'>$row->option4</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option5':
                      if($row->option5 != NULL)
                     {echo"<input type='radio' name='options' value='option5'/> <span id='option'>$row->option5</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option6':
                      if($row->option6 != NULL)
                     {echo"<input type='radio' name='options' value='option6'/> <span id='option'>$row->option6</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option7':
                      if($row->option7 != NULL)
                     {echo"<input type='radio' name='options' value='option7'/> <span id='option'>$row->option7</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option8':
                      if($row->option8 != NULL)
                     {echo"<input type='radio' name='options' value='option8'/> <span id='option'>$row->option8</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option9':
                      if($row->option9 != NULL)
                     {echo"<input type='radio' name='options' value='option9'/> <span id='option'>$row->option9</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option10':
                      if($row->option10 != NULL)
                     {echo"<input type='radio' name='options' value='option10'/> <span id='option'>$row->option10</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option11':
                      if($row->option11 != NULL)
                     {echo"<input type='radio' name='options' value='option11'/> <span id='option'>$row->option11</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option12':
                      if($row->option12 != NULL)
                     {echo"<input type='radio' name='options' value='option12'/> <span id='option'>$row->option12</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option13':
                      if($row->option13 != NULL)
                     {echo"<input type='radio' name='options' value='option13'/> <span id='option'>$row->option13</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option14':
                      if($row->option14 != NULL)
                     {echo"<input type='radio' name='options' value='option14'/> <span id='option'>$row->option14</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option15':
                      if($row->option15 != NULL)
                     {echo"<input type='radio' name='options' value='option15'/> <span id='option'>$row->option15</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   default:
				      $n=0;
					  break;
                 }
				   if($n==0)
				    {break;}
				   $i++;
				}		
				if($count!=0)
				{
				$tag1 = str_replace(' ', '-', $row->tag1);
				echo"<input id='vote' type='submit' value='投票 >>' onmouseover='mOver(this)' onmouseout='mOut(this)' style=\"background-image:url('image/vote_button.png');\"/>
				<a href='results.php?ID=$row->ID&$tag1' style='color:#000;text-decoration:none;'><p onmouseover='mOver(this)' onmouseout='mOut(this)' style=\"background-image:url('image/results_button.png');\">结果与评论 >></p></a>";
				}
               ?>
			  </form>
			 </div>
			 
			 <div id="question_text">
			 <p style="color:rgb(100,100,100);">
			 <?php
			   echo $row->brief_text;
			 ?>
			</p>
			 </div>
			 <div id="question_text">
			 <p>
			 <?php
			   echo $row->text;
			 ?>
			 </p>
			 </div>
			 
			 
			 <div id="comment" style="clear:both;float:left;margin:0px auto 0 65px;"> 
			  <?php
               error_reporting(E_ALL^E_NOTICE);
               include "connect.php";
               include "comment.class.php";

              ?>
			  <div style="font-size:17px;font-weight:bold;margin:50px 0 5px -70px;">留下你的评论吧</div>
			
			  <div id="addCommentContainer" style="margin-left:-70px;">
	          <form id="addCommentForm" method="post" action="">
    	      <div>
        	  <label for="name" style="font-size:12px;">昵称</label>
        	  <input type="text" name="name" id="name" />
            
              <label for="email" style="font-size:12px;">Email</label>
              <input type="text" name="email" id="email" />
            
              <label for="body" style="font-size:12px;">评论</label>
              <textarea name="body" id="body" cols="20" rows="5"></textarea>
              
			  <textarea name="question_id" id="question_id" cols="20" rows="5"  style="display:none;"><?php echo $ID; ?></textarea>
			  <textarea name="ip" id="ip" cols="20" rows="5"  style="display:none;"><?php echo $_SERVER["REMOTE_ADDR"]; ?></textarea>
			  
			  
			  <!--头像选择-->
			  <div id="select_avatar" style="position:absolute;left:220px;top:10px;width:50px;height:50px;">
			   <div class="demo" style="width:50px;height:50px;margin:0;">
					
                  <div class="bx_wrap_1" style="margin-left:-5px;" >
                    <div class="bx_container_1">
					  <textarea name="avatar" id="avatar" style="display:none;">avatar01</textarea>
                      <ul id='demo2' class='1'>
					 <?php 
					  $i=1;
					  $src='';
					  $id;
					  while($i <= 10)
					  {
					    switch($i)
						{
						  case 1:
			               $src="image/avatar/avatar01.png";$id=1;
						   break;
						  case 2:
			               $src="image/avatar/avatar02.png";$id=2;
						   break;
						  case 3:
			               $src="image/avatar/avatar03.png";$id=3;
						   break;
						  case 4:
			               $src="image/avatar/avatar04.png";$id=4;
						   break;
						  case 5:
			               $src="image/avatar/avatar05.png";$id=5;
						   break;
						  case 6:
			               $src="image/avatar/avatar06.png";$id=6;
						   break;
						  case 7:
			               $src="image/avatar/avatar07.png";$id=7;
						   break;
						  case 8:
			               $src="image/avatar/avatar08.png";$id=8;
						   break;
						  case 9:
			               $src="image/avatar/avatar09.png";$id=9;
						   break;
						  case 10:
			               $src="image/avatar/avatar10.png";$id=10;
						   break;
						 }	   
                        echo "<li id=\"$id\"><img alt=\"avatar\" width='50' height='50' src=\"$src\"></li>";
                        $i++;
					  }
					 ?>
                     </ul>
                    </div>
                   </div>
                </div>
			  </div>
			  
              <input type="submit" id="submit" value="提交" />
			  
              </div>
              </form>
              </div>
			  <div id="see_comments" style="font-size:17px;font-weight:bold;margin:20px 0 5px -70px;">看看别人的评论</div>
			   
			   <?php
              page_comment($ID);
              ?>
			 </div>
			 
			</div>
			
		   <div class="container_1_right" style="float:right;">
			<div class="container_2">
			<img src="image/Macedonia2.jpg">
			</div>
	<!--		<div style="float:left;width:300px; height:18px; margin:0 0 0 10px;">
			  <img src="image/ads not by this site.png">
			</div>  -->
			<div class="container_3">
			<img src="image/Macedonia3.jpg">
			</div>
			
			
			<div class="container_4" id="most">
			  <div id="most_voted" style="background-image:url(image/most_voted.png);">
			   <p><strong>&nbsp最多投票 <span style="color:#DC143C; font-size:16px;">»</span>&nbsp&nbsp&nbsp </strong><a onclick="showMostVoted('lastmonth')">最近一个月</a><span>&nbsp&nbsp&nbsp </span><a onclick="showMostVoted('alltime')" >所有时间</a></p>
			  </div>
			  <ul id="most_voted_list">
			    <script> showMostVoted('lastmonth');</script>
			</div>
			
			<?php advertisement_1(); ?>
		   </div>
		  </div>	
		  
		  
		  <div id="backToTop">
		  <p style="background-image:url('image/backtotop.png')">
		  <a href="#top"><strong>回到顶部</strong></a>
		  </p>
		  </div>
		  
		  <div id="bottom_advertisement">
		    <img src="image/Macedonia1.png" style="margin-left:126px;">
		  </div>
		 	
			
		  <div id="bottom" style="background-image:url('image/top.png');">                   
          <div id="topBar">
               
            <div id="leftBar">           
			  <div id="icon_facebook">
			    <a href="http://www.facebook.com/BuzzInnetCh" target="_blank">
				  <img src="image/facebook.png">
			    </a>
			  </div>
			  <div id="icon_twitter">
			    <a href="http://www.twitter.com/buzzinnet" target="_blank">
				  <img src="image/twitter.png">
				</a>
			  </div>
			  <div id="icon_google_plus">
			    <a href="http://plus.google.com/102352953196411992804" target="_blank">
				  <img src="image/google+.png" >
				</a>
			  </div> 
              <div id="icon_linkedin">
			    <a href="http://www.linkedin.com/company/3295234?trk=tyah" target="_blank">
				  <img src="image/linkedin.png" >
				</a>
			  </div>
              <div id="icon_RSS">
			    <a href="feed.php" target="_blank">
				  <img src="image/RSS.png" >
				</a>
			  </div>
              <div id="widget">
			    <a href="\" target="_blank">
				  <img src="image/widget.jpg" >
				</a>
			  </div>			  
			  <div id="icon_America">
			    <a href="../America/" class="icon_America" target="_blank">
				<img src="image/America.jpg"></a>
			  </div>
			  <div id="icon_English">
			    <a href="../UK/" class="icon_English" target="_blank">
				<img src="image/English.jpg"></a>
			  </div>
			  <div id="icon_Canada">
			    <a href="../Canada/" class="icon_Canada" target="_blank">
				<img src="image/Canada.jpg"></a>
			  </div>
			  <div id="icon_Australia">
			    <a href="../Australia/" class="icon_Australia" target="_blank">
				<img src="image/Australia.jpg"></a>
			  </div>
			  <div id="icon_India">
			    <a href="../India/" class="icon_India" target="_blank">
				<img src="image/India.jpg"></a>
			  </div>
			  <div id="icon_Italian">
			    <a href="../Italia/" class="icon_Italian" target="_blank">
				<img src="image/Italian.jpg"></a>
			  </div>
			  <div id="icon_China">
			    <a href="../China/" class="icon_China" target="_blank">
				<img src="image/China.jpg"></a>
			  </div>
			  <div id="icon_Macedonia">
			    <a href="../Macedonia/" class="icon_Macedonia" target="_blank">
				<img src="image/Macedonia.jpg"></a>
			  </div>
			  <div id="marketing">
			  <a href="marketing.php">商业合作</a>
			  </div>
			  <div id="about">
			  <a href="about.php">关于</a>
			  </div>
			  <div id="contact">
			  <a href="contact.php">联系我们</a>
			  </div>
			  
			  <div id="copyright">
			   Buzz-in.net &nbsp Copyright &#169 2013
			  </div>
			
			 </div>
		    
		  </div>
		</div>
		
	  </div>
	  
	  <script>
       function mOver(obj)
      {
        obj.style.color="#FFFF00";
      }
     function mOut(obj)
     {
       obj.style.color="#fff";
     }
	 
     </script>
	 
	 <!--举报函数-->
	 <script type="text/javascript">
       $(document).ready(function(){
        $(".report").click(function(){
		 $(this).css({"background-image":"url(image/report.png)"});
		 var pid=$(this).attr('id');
         $.post("report.php",{PID:pid});
       });
       });
     </script>
	 
	 <!--获取头像的id值-->
	 <script type="text/javascript">
      $(document).ready(function(){
       $(".bx_container_1 .prev").click(function(){
        var id=$("#demo2").children().eq(0).attr('id');
		if(id=='1')
		{
		$("#avatar").html('avatar01');
		}
		else if(id==2)
		{
		$("#avatar").html('avatar02');
		}
		else if(id==3)
		{
		$("#avatar").html('avatar03');
		}
		else if(id==4)
		{
		$("#avatar").html('avatar04');
		}
		else if(id==5)
		{
		$("#avatar").html('avatar05');
		}
		else if(id==6)
		{
		$("#avatar").html('avatar06');
		}
		else if(id==7)
		{
		$("#avatar").html('avatar07');
		}
		else if(id==8)
		{
		$("#avatar").html('avatar08');
		}
		else if(id==9)
		{
		$("#avatar").html('avatar09');
		}
		else if(id==10)
		{
		$("#avatar").html('avatar10');
		}
	   });
       });
	   
	   $(document).ready(function(){
       $(".bx_container_1 .next").click(function(){
        var id=$("#demo2").children().eq(2).attr('id');
		if(id=='1')
		{
		$("#avatar").html('avatar01');
		}
		else if(id==2)
		{
		$("#avatar").html('avatar02');
		}
		else if(id==3)
		{
		$("#avatar").html('avatar03');
		}
		else if(id==4)
		{
		$("#avatar").html('avatar04');
		}
		else if(id==5)
		{
		$("#avatar").html('avatar05');
		}
		else if(id==6)
		{
		$("#avatar").html('avatar06');
		}
		else if(id==7)
		{
		$("#avatar").html('avatar07');
		}
		else if(id==8)
		{
		$("#avatar").html('avatar08');
		}
		else if(id==9)
		{
		$("#avatar").html('avatar09');
		}
		else if(id==10)
		{
		$("#avatar").html('avatar10');
		}
	   });
       });
  
     </script>
	 
     <script type="text/javascript" src="js/comment_script.js"></script>
</body>
</html>