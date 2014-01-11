<?php
//评论模块的连接
/* Database config */
$db_host		= 'buzzinnet.ipagemysql.com';
$db_user		= 'kimi';
$db_pass		= 'yys0207';
$db_database	= 'comment'; 

/* End config */


$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);

?>