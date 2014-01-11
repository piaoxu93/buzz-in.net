<?php
function display_question1($type, $num)
{
$con = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
mysql_query("SET NAMES 'UTF8'");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("america", $con);

$temp = "SELECT * FROM ";
$sql = $temp.$type;
$result = mysql_query($sql);
$rownum = mysql_num_rows($result) + 1 - $num;
mysql_data_seek($result,$rownum-1);
$row = mysql_fetch_object($result);
echo"<div id='subsection_poll'>";
$tag1 = str_replace(' ', '-', $row->tag1);
echo"<h1><a href=\"question.php?ID=$row->ID&$tag1\">"; echo $row->question; echo "</a></h1>";
echo"<a>"; echo"<img src=\"display_picture.php?ID=$row->ID\" >"; echo"</a>
				<div class='choose'>
				<form style='width:300px;' action=\"voteadd.php?ID=$row->ID\" method='POST'>";
				
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
				echo"<input id='vote' type='submit' value='Vote >>' onmouseover='mOver(this)' onmouseout='mOut(this)' style=\"background-image:url('image/vote_button.png');\"/>
				<a href='results.php?ID=$row->ID&$tag1' style='color:#000;text-decoration:none;'><p onmouseover='mOver(this)' onmouseout='mOut(this)' style=\"background-image:url('image/results_button.png');\">Results and comments >></p></a>";
				}
				echo"
                </form>
				</div>		
			 </div>";
}

function display_question2($type, $num)
{
$con = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
mysql_query("SET NAMES 'UTF8'");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("america", $con);

$temp = "SELECT * FROM ";
$sql = $temp.$type;
$result = mysql_query($sql);
$rownum = mysql_num_rows($result) + 1 - $num;
mysql_data_seek($result,$rownum-1);
$row = mysql_fetch_object($result);
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
				echo"<input id='vote' type='submit' value='Vote >>' onmouseover='mOver(this)' onmouseout='mOut(this)' style=\"background-image:url('image/vote_button.png');\"/>
				<a href='results.php?ID=$row->ID&$tag1' style='color:#000;text-decoration:none;'><p onmouseover='mOver(this)' onmouseout='mOut(this)' style=\"background-image:url('image/results_button.png');\">Results and comments >></p></a>";
				}
				echo"
                </form>
				</div>		
			 </div>";
}

function display_question3($ID)
{
$con = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
mysql_query("SET NAMES 'UTF8'");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("america", $con);

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
$str = $row->question;
if(strlen($str) > 61)
{$str=substr($str,0,61)."...";}
echo $str;
}


function display_newest_question($num)
{
$con = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
mysql_query("SET NAMES 'UTF8'");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("america", $con);

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
				echo"<input id='vote' type='submit' value='Vote >>' onmouseover='mOver(this)' onmouseout='mOut(this)' style=\"background-image:url('image/vote_button.png');\"/>
				<a href='results.php?ID=$row->ID&$tag1' style='color:#000;text-decoration:none;'><p onmouseover='mOver(this)' onmouseout='mOut(this)' style=\"background-image:url('image/results_button.png');\">Results and comments >></p></a>";
				}
				echo"
                </form>
				</div>		
			 </div>";
}
?>