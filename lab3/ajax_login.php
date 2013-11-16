<?php 
require_once("connect.php");
session_start();
$user_name=htmlspecialchars($_GET['user_name'],ENT_QUOTES);
$pass=md5($_GET['password']);
$r=mysql_query("select uid from users where uid='$user_name' and pass='$pass'");
if(mysql_num_rows($r)>0)
	{
		echo "yes";
		$_SESSION["uname"]=mysql_result($r,0,"uid");
	}
	else
		echo "no"; 		
?>