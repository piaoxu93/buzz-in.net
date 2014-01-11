<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
      <title>За нас</title>
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
		    <div id="button" style="width:97px;"><a id="link" href="index.php">Насловна</a></div>
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
		   <span style="font-size:18px;font-weight:bold;">За нас</span></br>
		   <span style="font-size:14px;">
           Buzz-in.net е web страна која го испитува јавното мислење по различни теми од секојдневниот живот или тековните настани, преку анкети и форуми достапни на јавноста.
           </span>		   
           </br></br>
           <span style="font-size:18px;font-weight:bold;">Правила на користење</span></br>
		   <span style="font-size:14px;">
           Со цел на јавноста да ѝ се обезбеди неограничен простор за дискусија, секое прашање на страната содржи отворен простор за коментари. 
		   Од технички причини уредништвото и сопствениците на страната не се во можност да ги контролираат сите коментари на корисниците, 
		   и од тие причини не можат да преземат одговорност за нивната содржина. Коментарите испратени од корисниците не ги отсликуваат мислењата 
		   и ставовите на сопствениците и уредниците на страната. Се молат љубезно корисниците да водат пристојна и достоинствена дискусија. 
		   Типови на коментари кои не се прифатливи на оваа страна (понатака Кодекс на однесување) се:
		   </br>
           -&nbsp&nbsp&nbsp	Коментари кои навредуваат лица на оснава на раса, националност, пол, религија, возраст, </br> &nbsp&nbsp&nbsp&nbsp&nbspсексуална ориентација, ментална или физичка попреченост и тн. </br>
           -&nbsp&nbsp&nbsp	Повици за насилство или други криминални активности;</br>
           -&nbsp&nbsp&nbsp	Лични закани кон другите корисници, уредниците или сопствениците на страната;</br>
           -&nbsp&nbsp&nbsp	Коментари од експлицитна сексуална природа, линкови до порнографски страни или било </br> &nbsp&nbsp&nbsp&nbsp&nbspкој вид промоција на детска порнографија;</br>
           -&nbsp&nbsp&nbsp	Коментари и линкови со кои се промовира или рекламира бизнис или друга web страна;</br>
           -&nbsp&nbsp&nbsp	Коментари неповрзани со темата на дискусијата ;</br>
           -&nbsp&nbsp&nbsp	Злоупотреба на просторот за коментар во вид на повторени објавувања на истиот коментар,</br> &nbsp&nbsp&nbsp&nbsp пишување на јазик кој не е официјален на страната, пишување со САМО ГОЛЕМИ БУКВИ и тн.</br></br>
           Корисниците кои не го следат Кодексот на однесување ќе се соочат со отстранување на нивните коментари, а во случај на потворени или потешки 
		   злоупотреби трајно ќе им биде одземено правото на објавување коментари. Се молат корисниците да пријавуваат било каква злоупотреба на Кодексот 
		   со кликнување на копчето “Report” до навредливиот коментар. 
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
			   <p><strong>&nbspНај гласани <span style="color:#DC143C; font-size:16px;">»</span>&nbsp&nbsp&nbsp </strong><a onclick="showMostVoted('lastmonth')">Овој месец</a><span>&nbsp&nbsp&nbsp </span><a onclick="showMostVoted('alltime')" >Вкyлно</a></p>
			  </div>
			  <ul id="most_voted_list">
			    <script> showMostVoted('lastmonth');</script>
			</div>
			
			
			<?php advertisement_1(); ?>
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