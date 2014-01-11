<?php 

/* 
* Created on 2013-4-13 
* 
* by piaoxu
*/
function page($type)
{
$link=MySQL_connect("buzzinnet.ipagemysql.com","kimi","yys0207"); 
mysql_select_db('italia'); 
mysql_query("SET NAMES 'UTF8'");

$Page_size=10; 
$sql = "select * from ".$type;
$result=mysql_query($sql); 
$count = mysql_num_rows($result); 
$page_count = ceil($count/$Page_size); 

$init=1; 
$page_len=7; 
$max_p=$page_count; 
$pages=$page_count; 

//判断当前页码 
if(empty($_GET['page'])||$_GET['page']<0){ 
$page=1; 
}else { 
$page=$_GET['page']; 
} 

$offset=$Page_size*($page-1); 
$sql="select * from ".$type." order by ID desc limit $offset,$Page_size"; 
$result=mysql_query($sql,$link); 
while ($row=mysql_fetch_object($result)) { 

echo"<div id='poll'>";
$tag1 = str_replace(' ', '-', $row->tag1);
echo"<h1><a href=\"question.php?ID=$row->ID&$tag1\">"; echo $row->question; echo "</a></h1>";
echo"<a>"; echo"<img src=\"display_picture.php?ID=$row->ID\" >"; echo"</a>
				<div class='choose'>
				<form action=\"voteadd.php?ID=$row->ID\" method='POST'>";
				
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
				echo"<input id='vote' type='submit' value='Vota >>' onmouseover='mOver(this)' onmouseout='mOut(this)' style=\"background-image:url('image/vote_button.png');\"/>
				<a href='results.php?ID=$row->ID&$tag1' style='color:#000;text-decoration:none;'><p onmouseover='mOver(this)' onmouseout='mOut(this)' style=\"background-image:url('image/results_button.png');\">Risultati e commenti >></p></a>";
				}
				echo"
                </form>
				</div>		
			 </div>";

	} 
$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数 
$pageoffset = ($page_len-1)/2;//页码个数左右偏移量 

$key="<div class=\"pages\">"; 
if($page!=1){ 
$key.="<a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?page=1\"><span>«</span>Prima</a> "; //第一页 
$key.="<a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?page=".($page-1)."\"> Prec</a>"; //上一页 
}else { 
$key.="<a class=\"page\"><span>«</span>Prima</a> ";//第一页 
$key.="<a class=\"page\"> Prec</a>"; //上一页 
} 
if($pages>$page_len){ 
//如果当前页小于等于左偏移 
if($page<=$pageoffset){ 
$init=1; 
$max_p = $page_len; 
}else{//如果当前页大于左偏移 
//如果当前页码右偏移超出最大分页数 
if($page+$pageoffset>=$pages+1){ 
$init = $pages-$page_len+1; 
}else{ 
//左右偏移都存在时的计算 
$init = $page-$pageoffset; 
$max_p = $page+$pageoffset; 
} 
} 
} 
for($i=$init;$i<=$max_p;$i++){ 
if($i==$page){ 
$key.="<span class=\"current_page\">".$i."</span>"; 
} else { 
$key.=" <a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?page=".$i."\">".$i."</a>"; 
} 
} 
if($page!=$pages){ 
$key.="<a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?page=".($page+1)."\"> Pross</a> ";//下一页 
$key.="<a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?page={$pages}\"> Ulti<span>»</span></a>"; //最后一页 
}else { 
$key.="<a class=\"page\"> Pross</a> ";//下一页 
$key.="<a class=\"page\"> Ulti<span>»</span></a>"; //最后一页 
}
$key.='</div>'; 

echo "<div  style='clear:both; float:right; text-align:center; margin:30px 185px 100px 0;'>";echo $key; echo"</div>";
}


function page_newest()
{
$link=MySQL_connect("buzzinnet.ipagemysql.com","kimi","yys0207"); 
mysql_select_db('italia'); 
mysql_query("SET NAMES 'UTF8'");

$Page_size=10; 
$sql = "select * from newest";
$result=mysql_query($sql); 
$count = mysql_num_rows($result); 
$page_count = ceil($count/$Page_size); 

$init=1; 
$page_len=7; 
$max_p=$page_count; 
$pages=$page_count; 

//判断当前页码 
if(empty($_GET['page'])||$_GET['page']<0){ 
$page=1; 
}else { 
$page=$_GET['page']; 
} 

$offset=$Page_size*($page-1); 
$sql="select * from newest order by PID desc limit $offset,$Page_size"; 
$result=mysql_query($sql,$link); 
while ($row=mysql_fetch_object($result)) { 
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

echo"<div id='poll'>";
$tag1 = str_replace(' ', '-', $row1->tag1);
echo"<h1><a href=\"question.php?ID=$row1->ID&$tag1\">"; echo $row1->question; echo "</a></h1>";
echo"<a>"; echo"<img src=\"display_picture.php?ID=$row1->ID\" >"; echo"</a>
				<div class='choose'>
				<form action=\"voteadd.php?ID=$row->ID\" method='POST'>";
				
				$n=1;
				$i=1;
				$count=0;
				while ($n != 0)
				{
				  $option = "option"."$i";
				  switch ($option)
                 {
                   case 'option1':
				     if($row1->option1 != NULL)
                     {echo"<input type='radio' name='options' value='option1'/> <span id='option'>$row1->option1</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option2':
                      if($row1->option2 != NULL)
                     {echo"<input type='radio' name='options' value='option2'/> <span id='option'>$row1->option2</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option3':
                      if($row1->option3 != NULL)
                     {echo"<input type='radio' name='options' value='option3'/> <span id='option'>$row1->option3</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option4':
                      if($row1->option4 != NULL)
                     {echo"<input type='radio' name='options' value='option4'/> <span id='option'>$row1->option4</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option5':
                      if($row1->option5 != NULL)
                     {echo"<input type='radio' name='options' value='option5'/> <span id='option'>$row1->option5</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option6':
                      if($row1->option6 != NULL)
                     {echo"<input type='radio' name='options' value='option6'/> <span id='option'>$row1->option6</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option7':
                      if($row1->option7 != NULL)
                     {echo"<input type='radio' name='options' value='option7'/> <span id='option'>$row1->option7</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option8':
                      if($row1->option8 != NULL)
                     {echo"<input type='radio' name='options' value='option8'/> <span id='option'>$row1->option8</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option9':
                      if($row1->option9 != NULL)
                     {echo"<input type='radio' name='options' value='option9'/> <span id='option'>$row1->option9</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option10':
                      if($row1->option10 != NULL)
                     {echo"<input type='radio' name='options' value='option10'/> <span id='option'>$row1->option10</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option11':
                      if($row1->option11 != NULL)
                     {echo"<input type='radio' name='options' value='option11'/> <span id='option'>$row1->option11</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option12':
                      if($row1->option12 != NULL)
                     {echo"<input type='radio' name='options' value='option12'/> <span id='option'>$row1->option12</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option13':
                      if($row1->option13 != NULL)
                     {echo"<input type='radio' name='options' value='option13'/> <span id='option'>$row1->option13</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option14':
                      if($row1->option14 != NULL)
                     {echo"<input type='radio' name='options' value='option14'/> <span id='option'>$row1->option14</span>
                      <br />"; $count++;}
					 else
					 {$n=0;}
                      break;
				   case 'option15':
                      if($row1->option15 != NULL)
                     {echo"<input type='radio' name='options' value='option15'/> <span id='option'>$row1->option15</span>
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
				echo"<input id='vote' type='submit' value='Vota >>' onmouseover='mOver(this)' onmouseout='mOut(this)' style=\"background-image:url('image/vote_button.png');\"/>
				<a href='results.php?ID=$row->ID&$tag1' style='color:#000;text-decoration:none;'><p onmouseover='mOver(this)' onmouseout='mOut(this)' style=\"background-image:url('image/results_button.png');\">Risultati e commenti >></p></a>";
				}
				echo"
                </form>
				</div>		
			 </div>";

	} 
	
$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数 
$pageoffset = ($page_len-1)/2;//页码个数左右偏移量 

$key="<div class=\"pages\">"; 
if($page!=1){ 
$key.="<a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?page=1\"><span>«</span>Prima</a> "; //第一页 
$key.="<a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?page=".($page-1)."\"> Prec</a>"; //上一页 
}else { 
$key.="<a class=\"page\"><span>«</span>Prima</a> ";//第一页 
$key.="<a class=\"page\"> Prec</a>"; //上一页 
} 
if($pages>$page_len){ 
//如果当前页小于等于左偏移 
if($page<=$pageoffset){ 
$init=1; 
$max_p = $page_len; 
}else{//如果当前页大于左偏移 
//如果当前页码右偏移超出最大分页数 
if($page+$pageoffset>=$pages+1){ 
$init = $pages-$page_len+1; 
}else{ 
//左右偏移都存在时的计算 
$init = $page-$pageoffset; 
$max_p = $page+$pageoffset; 
} 
} 
} 
for($i=$init;$i<=$max_p;$i++){ 
if($i==$page){ 
$key.="<span class=\"current_page\">".$i."</span>"; 
} else { 
$key.=" <a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?page=".$i."\">".$i."</a>"; 
} 
} 
if($page!=$pages){ 
$key.="<a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?page=".($page+1)."\"> Pross</a> ";//下一页 
$key.="<a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?page={$pages}\"> Ulti<span>»</span></a>"; //最后一页 
}else { 
$key.="<a class=\"page\"> Pross</a> ";//下一页 
$key.="<a class=\"page\"> Ulti<span>»</span></a>"; //最后一页 
}
$key.='</div>'; 

echo "<div  style='clear:both; float:right; text-align:center; margin:30px 185px 100px 0;'>";echo $key; echo"</div>";
}




function page_comment($ID)
{
$link=MySQL_connect("buzzinnet.ipagemysql.com","kimi","yys0207"); 
mysql_select_db('comment'); 
mysql_query("SET NAMES 'UTF8'");

$Page_size=10; 
$comments = array();
$result2 = mysql_query("SELECT * FROM comment_india where ID=$ID ORDER BY pid desc");
$count = mysql_num_rows($result2); 
$page_count = ceil($count/$Page_size);

$init=1; 
$page_len=7; 
$max_p=$page_count; 
$pages=$page_count; 

//判断当前页码 
if(empty($_GET['page'])||$_GET['page']<0){ 
$page=1; 
}else { 
$page=$_GET['page']; 
} 

$offset=$Page_size*($page-1); 
$comments = array();
$sql="select * from comment_italia where ID=$ID order by pid desc limit $offset,$Page_size"; 
$result=mysql_query($sql,$link); 
while($row1 = mysql_fetch_assoc($result))
{
    $comments[] = new Comment($row1);
}
foreach($comments as $c){
	echo $c->markup1($ID);
}

$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数 
$pageoffset = ($page_len-1)/2;//页码个数左右偏移量 

$key="<div class=\"pages\">"; 
if($page!=1){ 
$key.="<a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?ID=$ID&page=1\"><span>«</span>Prima</a> "; //第一页 
$key.="<a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?ID=$ID&page=".($page-1)."\"> Prec</a>"; //上一页 
}else { 
$key.="<a class=\"page\"><span>«</span>Prima</a> ";//第一页 
$key.="<a class=\"page\"> Prec</a>"; //上一页 
} 
if($pages>$page_len){ 
//如果当前页小于等于左偏移 
if($page<=$pageoffset){ 
$init=1; 
$max_p = $page_len; 
}else{//如果当前页大于左偏移 
//如果当前页码右偏移超出最大分页数 
if($page+$pageoffset>=$pages+1){ 
$init = $pages-$page_len+1; 
}else{ 
//左右偏移都存在时的计算 
$init = $page-$pageoffset; 
$max_p = $page+$pageoffset; 
} 
} 
} 
for($i=$init;$i<=$max_p;$i++){ 
if($i==$page){ 
$key.="<span class=\"current_page\">".$i."</span>"; 
} else { 
$key.=" <a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?ID=$ID&page=".$i."\">".$i."</a>"; 
} 
} 
if($page!=$pages){ 
$key.="<a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?ID=$ID&page=".($page+1)."\"> Pross</a> ";//下一页 
$key.="<a class=\"page\" href=\"".$_SERVER['PHP_SELF']."?ID=$ID&page={$pages}\"> Ulti<span>»</span></a>"; //最后一页 
}else { 
$key.="<a class=\"page\"> Pross</a> ";//下一页 
$key.="<a class=\"page\"> Ulti<span>»</span></a>"; //最后一页 
}
$key.='</div>'; 

echo "<div  style='clear:both; float:right; text-align:center; margin:30px 120px 100px 0px;'>";echo $key; echo"</div>";
}




?>


