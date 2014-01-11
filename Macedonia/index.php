<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
      <title>Buzz-in.net-Macedonia</title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <style type="text/css">
      </style>
	  <link href="css/default.css" type="text/css" rel="stylesheet">
	  <script src="js/mostvoted.js"></script>
	  <style type="text/css">
      ul{margin:0;padding:0;}
      .demo{float:left; width: 340px;margin: 5px auto 0px 18px;clear: both;position: relative;}
      .bx_wrap {}
      .bx_wrap ul img { border: 2px solid #ddd;}
      .bx_wrap ul li{text-align:center}
      .bx_wrap ul li a:hover{text-decoration:none; color:#f30}
      .bx_wrap a.prev {width:20px;height:24px;line-height:24px;outline-style:none;outline-width: 0;position:absolute; top:90px; left:-21px; text-indent:-999em; background: url(image/arr_left.gif) no-repeat;}
      .bx_wrap a.next {width:20px;height:24px;line-height:24px; left:303px;position: absolute;top:90px; text-indent:-999em; background:url(image/arr_right.gif) no-repeat;}
	  .bx_wrap a.next:hover{background:url(image/arr_right_yellow.gif) no-repeat;}
	  .bx_wrap a.prev:hover{background:url(image/arr_left_yellow.gif) no-repeat;}
      </style>
	  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <script type="text/javascript" src="js/bxCarousel.js"></script>
      <script type="text/javascript">
	  //图片滚动
      $(function(){
	     $('#demo1').bxCarousel({
		     display_num: 1, 
		     move: 1, 
		     auto: true, 
		     auto_interval: 4000,
		     margin: 10,
		     auto_hover: true
	      });
       });
       </script>

	  <?php include 'display_question.php'; ?>
	  
</head>

<body>
      <div id="site" class="main">
	  <a name="top"></a>
	    <div id="top" style="background-image:url('image/top.png');">                   
          <div id="topBar">
               
            <div id="leftBar">           
			  <div id="icon_facebook">
			    <a href="http://www.facebook.com/BuzzInnetmk" target="_blank">
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
			    <a href="widget.php" target="_blank">
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
			  <a href="marketing.php">Маркетинг</a>
			  </div>
			  <div id="about">
			  <a href="about.php">За нас</a>
			  </div>
			  <div id="contact">
			  <a href="contact.php">Контакт</a>
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
				  <input type="hidden" name="sitesearch" value="buzz-in.net/Macedonia">
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
		    <div id="button" style="width:97px; height:33px; background-image:url('image/homebutton.png'); margin-top:-3px;"><a href="index.php" style="color:#15c;padding:8px 0 0 14px;">Насловна</a></div>
			<div id="button" style="width:61px;"><a id="link" href="people.php">Луѓе</a></div>
			<div id="button" style="width:72px;"><a id="link" href="life.php">Живот</a></div>
			<div id="button" style="width:94px;"><a id="link" href="politics.php">Политика</a></div>
			<div id="button" style="width:85px;"><a id="link" href="events.php">Настани</a></div>
			<div id="button" style="width:77px;"><a id="link" href="entertainment.php">Сцена</a></div>
			<div id="button" style="width:85px;"><a id="link" href="culture.php">Култура</a></div>
			<div id="button" style="width:175px;"><a id="link" href="science_tech.php">Наука и технологија</a></div>
			<div id="button" style="width:73px;"><a id="link" href="sports.php">Спорт</a></div>
			<div id="button" style="width:76px;"><a id="link" href="fun.php">Забава</a></div>
			<div id="button" style="width:74px; border-right:0;"><a id="link" href="articles.php">Статии</a></div>
		  </div>
        </div>	
                       
		  <div class="content">
		    <div class="container_1_left">
			 <div id="updates">
			   <div id="title" style="width:336px;border-top:0;">
			    <a>Последни теми</a>
			   </div>
               	<div id="window">
                </div>				
			    <div class="demo" style="margin: 5px auto 0px 21px;">
					
                  <div class="bx_wrap" style="margin-left:-5px;" >
                    <div class="bx_container">
                     <ul id="demo1" >
					 <?php
					  $con = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
                      mysql_query("SET NAMES 'UTF8'");
                      if (!$con)
                       {
                         die('Could not connect: ' . mysql_error());
                       }

                      mysql_select_db("macedonia", $con);
					  $sql = "select * from newest order by PID";
					  $result = mysql_query($sql);
					  $row = mysql_fetch_object($result);
					  $rownum = mysql_num_rows($result);
					  mysql_data_seek($result,$rownum-1);
					  $row = mysql_fetch_object($result);
					  $i = 1;
					  while($i <= 10)
					  {
					    mysql_data_seek($result,$rownum-$i);
					    $row = mysql_fetch_object($result);
						$id= $row->ID;
						
						mysql_select_db("macedonia", $con);
                        $temp;
                        if($id >= 1000000 && $id < 2000000)
                        {$temp = 'people';}
                        else if($id >= 2000000 && $id < 3000000)
                        {$temp = 'life';}
                        else if($id >= 3000000 && $id < 4000000)
                        {$temp = 'politics';}
                        else if($id >= 4000000 && $id < 5000000)
                        {$temp = 'events';}
                        else if($id >= 5000000 && $id < 6000000)
                        {$temp = 'entertainment';}
                        else if($id >= 6000000 && $id < 7000000)
                        {$temp = 'culture';}
                        else if($id >= 7000000 && $id < 8000000)
                        {$temp = 'science_tech';}
                        else if($id >= 8000000 && $id < 9000000)
                        {$temp = 'sports';}
                        else if($id >= 9000000 && $id < 10000000)
                        {$temp = 'fun';}
                        else if($id >= 10000000 && $id < 11000000)
                        {$temp = 'articles';}

                        $temp1 = "SELECT * FROM ";
                        $sql_2 = $temp1.$temp." WHERE ID=$id";
                        $result_2 = mysql_query($sql_2);
                        $row_2=mysql_fetch_object($result_2); 
                        $tag1 = str_replace(' ', '-', $row_2->tag1);
						
                        echo "<li ><a style='text-decoration:none;' href=\"question.php?ID=$row->ID&$tag1\"><img alt=\"#\" width='300' height='186' src=\"display_picture_large_index.php?ID=$row->ID\"><br/><p>";display_question3($id); echo "</p><span style='float:left;margin:12px 0 0 8px;font-size:25px;font-weight:bold;color:#DC143C;'>»</span></a></li>";
                        $i++;
					  }
					 ?>
                     </ul>
                    </div>
                   </div>
                </div>
				
			 </div>
			 <div id="editors">
			   <div id="title" style="width:305px;border-top:0;">
			    <a>Избор на уредникот</a>
			   </div>
			   <div id="editors_choice">
			    <?php
			   $con_1 = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
               if (!$con_1)
               {
                 die('Could not connect: ' . mysql_error());
               }
               mysql_select_db("macedonia", $con_1);
			   $sql_1 = "SELECT * FROM editor_choice WHERE 1";
			   $result_1=mysql_query($sql_1) or die("Can't perform Query"); 
			   $row_1=mysql_fetch_object($result_1); 
			   $id_1=$row_1->ID;
			    
				mysql_select_db("macedonia", $con_1);
                        $temp;
                        if($id_1 >= 1000000 && $id_1 < 2000000)
                        {$temp = 'people';}
                        else if($id_1 >= 2000000 && $id_1 < 3000000)
                        {$temp = 'life';}
                        else if($id_1 >= 3000000 && $id_1 < 4000000)
                        {$temp = 'politics';}
                        else if($id_1 >= 4000000 && $id_1 < 5000000)
                        {$temp = 'events';}
                        else if($id_1 >= 5000000 && $id_1 < 6000000)
                        {$temp = 'entertainment';}
                        else if($id_1 >= 6000000 && $id_1 < 7000000)
                        {$temp = 'culture';}
                        else if($id_1 >= 7000000 && $id_1 < 8000000)
                        {$temp = 'science_tech';}
                        else if($id_1 >= 8000000 && $id_1 < 9000000)
                        {$temp = 'sports';}
                        else if($id_1 >= 9000000 && $id_1 < 10000000)
                        {$temp = 'fun';}
                        else if($id_1 >= 10000000 && $id_1 < 11000000)
                        {$temp = 'articles';}

                        $temp1 = "SELECT * FROM ";
                        $sql_3 = $temp1.$temp." WHERE ID=$id_1";
                        $result_3 = mysql_query($sql_3);
                        $row_3=mysql_fetch_object($result_3); 
                        $tag1 = str_replace(' ', '-', $row_3->tag1);
						
						
			    echo "<a style='text-decoration:none;' href=\"question.php?ID=$row_1->ID&$tag1\"> <img width='300' height='186' style=\"border:0;margin:7px 0 5px 3px;\" src=\"display_picture_large_index.php?ID=$id_1\" ><br/><p>"; display_question3($id_1);  echo "</p><span style='float:left;margin:12px 0 0 8px;font-size:25px;font-weight:bold;color:#DC143C;'>»</span></a></li>";
				?>
			   </div>
			   
			 </div>
			 
			 
			  <div id="title">
			    <a href="newest.php">Најнови &nbsp&nbsp<span>»</span></a>
			  </div>
			  <?php display_newest_question(1); ?>
			  <?php display_newest_question(2); ?>
			  <?php display_newest_question(3); ?>
			</div>
			
		   <div class="container_1_right">
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
			   <p><strong>&nbspНај многy гласови <span style="color:#DC143C; font-size:16px;">»</span>&nbsp&nbsp&nbsp </strong><a onclick="showMostVoted('lastmonth')">Овој месец</a><span>&nbsp&nbsp&nbsp </span><a onclick="showMostVoted('alltime')" >Вкyлно</a></p>
			  </div>
			  <ul id="most_voted_list">
			    <script> showMostVoted('lastmonth');</script>
			</div>
		   </div>	
		   
		   
			<div class="container_5">
			<img src="image/Macedonia1.png" style="margin-left:126px;">
			</div>
		  
			
			<div style="width:980px; height:4px; background-color:#000; float:left;margin-top:8px;"></div>
			
			<div id="container_subsection" style="background:url(image/split.png) repeat-y scroll 490px 5px;">
			<div class="container_left">
			  <div id="title_left">
			    <a href="people.php">Луѓе &nbsp&nbsp<span>»</span></a>
			  </div>
			  
			  <?php display_question1("people",1); ?>
			  
			  <?php display_question1("people",2); ?>
			  
			  <?php display_question1("people",3); ?>
			</div>
			
			<div class="container_right">
			  <div id="title_right">
			    <a href="life.php">Живот &nbsp&nbsp<span>»</span></a>
			  </div>
			  
			  <?php display_question1("life",1); ?>
			  
			  <?php display_question1("life",2); ?>
			  
			  <?php display_question1("life",3); ?>
			  
			</div>
			</div>
			
			<div id="container_subsection" style="background:url(image/split.png) repeat-y scroll 490px 5px;">
			<div class="container_left">
			  <div id="title_left">
			    <a href="politics.php">Политика &nbsp&nbsp<span>»</span></a>
			  </div>
			  
			  <?php display_question1("politics",1); ?>
			  
			  <?php display_question1("politics",2); ?>
			  
			  <?php display_question1("politics",3); ?>
			 
			</div>
			<div class="container_right">
			  <div id="title_right">
			    <a href="events.php">Настани &nbsp&nbsp<span>»</span></a>
			  </div>
			  
			  <?php display_question1("events",1); ?>
			  
			  <?php display_question1("events",2); ?>
			  
			  <?php display_question1("events",3); ?>
			  
			</div>
			</div>
			
			<div id="container_subsection" style="background:url(image/split.png) repeat-y scroll 490px 5px;">
			<div class="container_left">
			  <div id="title_left">
			    <a href="entertainment.php">Сцена &nbsp&nbsp<span>»</span></a>
			  </div>
			  
			  <?php display_question1("entertainment",1); ?>
			  
			  <?php display_question1("entertainment",2); ?>
			  
			  <?php display_question1("entertainment",3); ?>
			  
			</div>
			<div class="container_right">
			  <div id="title_right">
			    <a href="culture.php">Култура &nbsp&nbsp<span>»</span></a>
			  </div>
			  
			  <?php display_question1("culture",1); ?>
			  
			  <?php display_question1("culture",2); ?>
			  
			  <?php display_question1("culture",3); ?>
			  			
			  </div>
			</div>
			
			
			<div id="container_subsection" style="background:url(image/split.png) repeat-y scroll 490px 5px;">
			<div class="container_left">
			  <div id="title_left">
			    <a href="science_tech.php">Наука и технологија &nbsp&nbsp<span>»</span></a>
			  </div>
			  
			  <?php display_question1("science_tech",1); ?>
			  
			  <?php display_question1("science_tech",2); ?>
			  
			  <?php display_question1("science_tech",3); ?>
			 
			</div>
			<div class="container_right">
			  <div id="title_right">
			    <a href="sports.php">Спорт &nbsp&nbsp<span>»</span></a>
			  </div>
			  
			  <?php display_question1("sports",1); ?>
			  
			  <?php display_question1("sports",2); ?>
			  
			  <?php display_question1("sports",3); ?>
			  			
			  </div>
			</div>
			
			
			<div id="container_subsection" style="background:url(image/split.png) repeat-y scroll 490px 5px;">
			<div class="container_left" style="margin-bottom:10px;">
			  <div id="title_left">
			    <a href="fun.php">Забава &nbsp&nbsp<span>»</span></a>
			  </div>
			  
			  <?php display_question1("fun",1); ?>
			  
			  <?php display_question1("fun",2); ?>
			  
			  <?php display_question1("fun",3); ?>
			  
			</div>
			<div class="container_right" style="margin-bottom:10px;">
			  <div id="title_right">
			    <a href="articles.php">Статии &nbsp&nbsp<span>»</span></a>
			  </div>
			  
			  <?php display_question1("articles",1); ?>
			  
			  <?php display_question1("articles",2); ?>
			  
			  <?php display_question1("articles",3); ?>
			  
			</div>
			</div>
		   </div>	
		  
		  
		  <div id="backToTop">
		  <p style="background-image:url('image/backtotop.png')">
		  <a href="#top"><strong>Оди горе</strong></a>
		  </p>
		  </div>
		  
		  <div id="bottom_advertisement">
		    <img src="image/Macedonia1.png" style="margin-left:126px;">
		  </div>
		 	
			
		  <div id="bottom" style="background-image:url('image/top.png');">                   
          <div id="topBar">
               
            <div id="leftBar">           
			  <div id="icon_facebook">
			    <a href="http://www.facebook.com/BuzzInnetmk" target="_blank">
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
			    <a href="widget.php" target="_blank">
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
			  <a href="marketing.php">Маркетинг</a>
			  </div>
			  <div id="about">
			  <a href="about.php">За нас</a>
			  </div>
			  <div id="contact">
			  <a href="contact.php">Контакт</a>
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

</body>
</html>