<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
      <title>About</title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <style type="text/css">
      </style>
	  <link href="css/default.css" type="text/css" rel="stylesheet">
	  <script src="js/mostvoted.js"></script>
	  <?php include 'advertisement.php'; ?>
</head>

<body>
      <div id="site" class="main">
	  <a name="top"></a>
	    <div id="top" style="background-image:url('image/top.png');">                   
          <div id="topBar">
               
            <div id="leftBar">           
			  <div id="icon_facebook">
			    <a href="http://www.facebook.com/BuzzInnetInd" target="_blank">
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
			  <a href="marketing.php">Marketing</a>
			  </div>
			  <div id="about">
			  <a href="about.php">About</a>
			  </div>
			  <div id="contact">
			  <a href="contact.php">Contact</a>
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
				  <input type="hidden" name="sitesearch" value="buzz-in.net/India">
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
		    <div id="button" style="width:77px;"><a id="link" href="index.php">Home</a></div>
			<div id="button" style="width:82px;"><a id="link" href="people.php">People</a></div>
			<div id="button" style="width:67px;"><a id="link" href="life.php">Life</a></div>
			<div id="button" style="width:80px;"><a id="link" href="politics.php">Politics</a></div>
			<div id="button" style="width:80px;"><a id="link" href="events.php">Events</a></div>
			<div id="button" style="width:130px;"><a id="link" href="entertainment.php">Entertainment</a></div>
			<div id="button" style="width:84px;"><a id="link" href="culture.php">Culture</a></div>
			<div id="button" style="width:140px;"><a id="link" href="science_tech.php">Science & Tech</a></div>
			<div id="button" style="width:80px;"><a id="link" href="sports.php">Sports</a></div>
			<div id="button" style="width:61px;"><a id="link" href="fun.php">Fun</a></div>
			<div id="button" style="width:88px; border-right:0;"><a id="link" href="articles.php">Articles</a></div>
		  </div>
        </div>	
                       
		  <div class="content">
		   <div class="container_1_left">
		   <span style="font-size:18px;font-weight:bold;">About</span></br>
		   <span style="font-size:14px;">
           Buzz-in.net is a website that measures the public opinion on everyday issues and current events through polls and comment boards open to the public.
           </span>		   
           </br></br>
           <span style="font-size:18px;font-weight:bold;">Disclaimer</span></br>
		   <span style="font-size:14px;">
           In order to provide the public with a space for discussion, each question contains an open comment board. Users are kindly asked to maintain 
		   decent and dignified discussions. Due to technical difficulties, the editorial board and site owners are not able to control all the comments 
		   and posts by users, and therefore do not take responsibility for their contents. Comments posted by users do not reflect the opinions and standings 
		   of the owners and editors of the website. The types of comments that are not acceptable on this website (further referred to as Code of conduct) are:
		   </br>
           -&nbsp&nbsp&nbsp	Offensive comments targeting readers race, nationality, gender, religion, age, sexual orientation, </br> &nbsp&nbsp&nbsp&nbsp&nbspmental or physical disability. </br>
           -&nbsp&nbsp&nbsp	Calls for violence and other criminal activities;</br>
           -&nbsp&nbsp&nbsp	Treats or personal offence against other users or the website owners and/or editors; </br>
           -&nbsp&nbsp&nbsp	Comments of explicit sexual nature, links to pornography or promotion of child pornography;</br>
           -&nbsp&nbsp&nbsp	Comments or links that promote/advertise business or other web page.</br>
           -&nbsp&nbsp&nbsp	Comments unrelated to the topic of discussion.</br>
           -&nbsp&nbsp&nbsp	Abuse of the space for comment in a form of repeated posting of the same comment, writing in other </br> &nbsp&nbsp&nbsp&nbsp&nbsplanguage then one the question was posed in,
		   writing in CAPITAL LETTERS ONLY etc.</br></br>
           Users who do not follow the Code of conduct will have their comments removed and in cases of repeated or severe abuse will be banned from using 
		   the site. We kindly ask the users to report any abuse of the Code by clicking the “Report” button next to the offensive comment.
		   </span>
		   </br>
		   </br>
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
			   <p><strong>&nbspMost voted <span style="color:#DC143C; font-size:16px;">»</span>&nbsp&nbsp&nbsp </strong><a onclick="showMostVoted('lastmonth')">Last month</a><span>&nbsp&nbsp&nbsp </span><a onclick="showMostVoted('alltime')" >All time</a></p>
			  </div>
			  <ul id="most_voted_list">
			    <script> showMostVoted('lastmonth');</script>
			</div>
			
			
			<?php advertisement_1(); ?>
		   </div>
			
		
			
			
			
			
			
			
			
			
			
			
			
		   </div>	
		  
		  
		  <div id="backToTop">
		  <p style="background-image:url('image/backtotop.png')">
		  <a href="#top"><strong>Go to the top</strong></a>
		  </p>
		  </div>
		  
		  <div id="bottom_advertisement">
		    <img src="image/Macedonia1.png" style="margin-left:126px;">
		  </div>
		 	
			
		  <div id="bottom" style="background-image:url('image/top.png');">                   
          <div id="topBar">
               
            <div id="leftBar">           
			  <div id="icon_facebook">
			    <a href="http://www.facebook.com/BuzzInnetInd" target="_blank">
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
			  <a href="marketing.php">Marketing</a>
			  </div>
			  <div id="about">
			  <a href="about.php">About</a>
			  </div>
			  <div id="contact">
			  <a href="contact.php">Contact</a>
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