<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
      <title>Scriveteci</title>
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
			    <a href="http://www.facebook.com/BuzzInnetit" target="_blank">
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
			  <a href="marketing.php">Pubblicità</a>
			  </div>
			  <div id="about">
			  <a href="about.php">Chi siamo</a>
			  </div>
			  <div id="contact">
			  <a href="contact.php">Scriveteci</a>
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
				  <input type="hidden" name="sitesearch" value="buzz-in.net/Italia">
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
		    <div id="button" style="width:70px;"><a id="link" href="index.php">Home</a></div>
			<div id="button" style="width:83px;"><a id="link" href="people.php">Persone</a></div>
			<div id="button" style="width:59px;"><a id="link" href="life.php">Vita</a></div>
			<div id="button" style="width:79px;"><a id="link" href="politics.php">Politica</a></div>
			<div id="button" style="width:75px;"><a id="link" href="events.php">Eventi</a></div>
			<div id="button" style="width:97px;"><a id="link" href="entertainment.php">Spettacoli</a></div>
			<div id="button" style="width:82px;"><a id="link" href="culture.php">Cultura</a></div>
			<div id="button" style="width:162px;"><a id="link" href="science_tech.php">Scienza e tecnologia</a></div>
			<div id="button" style="width:67px;"><a id="link" href="sports.php">Sport</a></div>
			<div id="button" style="width:117px;"><a id="link" href="fun.php">Divertimento</a></div>
			<div id="button" style="width:79px; border-right:0;"><a id="link" href="articles.php">Articoli</a></div>
		  </div>
        </div>	
                       
		  <div class="content">
		   <div class="container_1_left">
		   <span style="font-size:15px;">
           You can contact the administrators on separate country sub-domain e-mails
           </span>
           </br></br>
		   
		   <span style="font-size:14px;width:300px;display:block;float:left;">
           United States or general information
		   </span>
		   <span style="font-size:14px;display:block;float:left;">
           <a href="mailto:info@buzz-in.net">info@buzz-in.net</a>
		   </span></br></br>
		   
		   <span style="font-size:14px;width:300px;display:block;float:left;">
           United Kingdom
		   </span>
		   <span style="font-size:14px;display:block;float:left;">
           <a href="mailto:info-uk@buzz-in.net">info-uk@buzz-in.net</a>
		   </span></br></br>
		   
		   <span style="font-size:14px;width:300px;display:block;float:left;">
           Canada
		   </span>
		   <span style="font-size:14px;display:block;float:left;">
           <a href="mailto:info-ca@buzz-in.net">info-ca@buzz-in.net</a>
		   </span></br></br>
		   
		   <span style="font-size:14px;width:300px;display:block;float:left;">
           Australia
		   </span>
		   <span style="font-size:14px;display:block;float:left;">
           <a href="mailto:info-au@buzz-in.net">info-au@buzz-in.net</a>
		   </span></br></br>
		   
		   <span style="font-size:14px;width:300px;display:block;float:left;">
           India
		   </span>
		   <span style="font-size:14px;display:block;float:left;">
           <a href="mailto:info-in@buzz-in.net">info-in@buzz-in.net</a>
		   </span></br></br>
		   
		   <span style="font-size:14px;width:300px;display:block;float:left;">
           Italia
		   </span>
		   <span style="font-size:14px;display:block;float:left;">
           <a href="mailto:info-it@buzz-in.net">info-it@buzz-in.net</a>
		   </span></br></br>
		   
		   <span style="font-size:14px;width:300px;display:block;float:left;">
           China
		   </span>
		   <span style="font-size:14px;display:block;float:left;">
           <a href="mailto:info-cn@buzz-in.net">info-cn@buzz-in.net</a>
		   </span></br></br>
		   
		   <span style="font-size:14px;width:300px;display:block;float:left;">
           Macedonia
		   </span>
		   <span style="font-size:14px;display:block;float:left;">
           <a href="mailto:info-mk@buzz-in.net">info-mk@buzz-in.net</a>
		   </span></br></br>
		   
		   <span style="font-size:14px;">Please write in English, Macedonian or Italian. We will reply to e-mails in Russian with some delay. </span></br></br>
		   
		   <span style="font-size:14px;">Please include the subject of the letter in your e-mail</span></br></br>
		   <span style="font-size:14px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-	General info (for general information about the site)</span></br>
		   <span style="font-size:14px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-	Marketing (for questions regarding advertisement)</span></br>
		   <span style="font-size:14px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-	Users (technical problems using the site)</span></br>
		   <span style="font-size:14px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-	Suggestions (suggestions about the web design, topics or questions)</span></br>
		   <span style="font-size:14px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-	Report  (to report offensive topics or comments on the site)</span></br>
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
			    <a href="http://www.facebook.com/BuzzInnetit" target="_blank">
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
			  <a href="marketing.php">Pubblicità</a>
			  </div>
			  <div id="about">
			  <a href="about.php">Chi siamo</a>
			  </div>
			  <div id="contact">
			  <a href="contact.php">Scriveteci</a>
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