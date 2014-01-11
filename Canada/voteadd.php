<?php
mysql_query("SET NAMES 'UTF8'");
if (empty($_POST['options'])){
        echo "<script>alert(\"You have not selected any options!\");history.back();</script>";
        exit(0);
    }//判断是否选择了返岗票的选项
	else
	{  
$ID=$_GET['ID'];

//cookie防止重复投票
  if(isset($_COOKIE["$ID"]))
  {
    echo "<script>location.href='results.php?ID=$ID&ifsuccess=2';</script>";
    exit(0);
  }


$options = $_POST['options'];
//赋值ID变量为上一页传递过来的ID值
$conn = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
//建立数据库连接
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
//如果数据库连接出错，显示错误 
mysql_select_db("canada", $conn);
//查询数据
$temp = '';
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

$sql = "update ".$temp." set ".$options."_vote = ".$options."_vote + 1 where ID=$ID";
mysql_query($sql);
$sql = "update newest set vote = vote + 1 where ID=$ID";
mysql_query($sql);
mysql_close($conn);
//设置cookie,10天后过期
setcookie("$ID",'1',time()+864000);
echo "<script>location.href='results.php?ID=$ID&ifsuccess=1';</script>";
//header("location:voteok.php");
  //转到voteok.php
}

?>