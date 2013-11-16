<?php session_start();
if(empty($_SESSION['uname']))
header("Location:index.php");	
if(isset($_GET['logout']))
{
	session_destroy();
	header("Location:index.php");
}
$arr=array("src","dst","jdate","ltrains","pname0","pname1","pname2","gen0","gen1","gen2","age0","age1","age2","pref0","pref1","pref2","pref3","ctype","ccard","cmonth","cyear","cpass","cname");

?>
<body>


</body>
</html>