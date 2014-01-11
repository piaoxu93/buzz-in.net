<?php
//评论提交
// Error reporting:
error_reporting(E_ALL^E_NOTICE);


$con = mysql_connect("buzzinnet.ipagemysql.com","kimi","yys0207");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$voteip=strval($_POST['ip']);
mysql_select_db("ban_ip", $con);
$sql=mysql_query("select * from ban_ip where ip='".$voteip."'");
$info=mysql_fetch_array($sql);
if($info==true)//不良ip被记录
{
  exit;
}
else//若ip未进入不良记录，将评论插入数据库
{

include "connect.php";
include "comment.class.php";


/*
/	This array is going to be populated with either
/	the data that was sent to the script, or the
/	error messages.
/*/

$arr = array();
$validates = Comment::validate($arr);

if($validates)
{
	/* Everything is OK, insert to database: */
	
	mysql_query("	INSERT INTO comment_uk(name,email,body,ID,ip,avatar)
					VALUES (
						'".$arr['name']."',
						'".$arr['email']."',
						'".$arr['body']."',
						'".$arr['question_id']."',
						'".$arr['ip']."',
						'".$arr['avatar']."'
					)");
	
	$arr['dt'] = date('r',time());
	$arr['pid'] = mysql_insert_id();
	
	/*
	/	The data in $arr is escaped for the mysql query,
	/	but we need the unescaped variables, so we apply,
	/	stripslashes to all the elements in the array:
	/*/
	
	$arr = array_map('stripslashes',$arr);
	
	$insertedComment = new Comment($arr);

	/* Outputting the markup of the just-inserted comment: */

	echo json_encode(array('status'=>1,'html'=>$insertedComment->markup()));

}
else
{
	/* Outputtng the error messages */
	echo '{"status":0,"errors":'.json_encode($arr).'}';
}

}
?>