<?php session_start();
if(empty($_SESSION['uname']))
header("Location:index.php");	
if(isset($_GET['logout']))
{
	session_destroy();
	header("Location:index.php");
}	
$displogout=true;
//echo "<br/><center><h4><a href='home.php?logout'><b>Logout</b></a></h4></center>";
?>
<!doctype html>
<html>
	<head>
		<title>You Have Successfully Logged In To your Account </title>
		<!--<link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet" />
		<script src="assets/js/bootstrap.min.js"></script>-->
		<script src="assets/js/jquery.js" type="text/javascript" language="javascript"></script>
		<script>
	
		
		$(document).ready(function() {
			
			$('#trainsform').submit(function(check) {
			var url = 'gettrains.php';   
			$('#availd').html('');	
			$('#pay').html('');
			$('#trains').html('').load(url+'?id=gettrains&src='+ $('#src').val()+'&dst='+$('#dst').val(),function(){
					$(".ltrains").change(function(e){
					var url = 'gettrains.php';       
					$('#availd').html('Loading Availability ... ').load(url+'?id=availt&src='+ $('#src').val()+'&dst='+$('#dst').val()+'&tr='+$("input[name='ltrains']:checked").val(),function(){
					var url='gettrains.php'
					$('#cp').click(function(){
					$('#pay').html('Loading Payment Gateway ....').load(url+'?id=pay',function(){
					
					
					
					});
					return false;
					});					
					});
					return false;
					});
					});
			if(check=='1')
			return true;
			else
			return false;
			});
			//Source-Destination change - Show Trains
 		    $("#src").blur(function(){$("#trainsform").trigger('submit');});
			$("#dst").blur(function(){$("#trainsform").trigger('submit');});
			$("#jdate").blur(function(){$("#trainsform").trigger('submit');});
			});
		</script>
	</head>
	<body>
	<center>
	<br/>
		Welcome Back <?php echo $_SESSION["uname"]; ?> !!

<form id=trainsform action=abc.php method=post>
<input type="text" id=src name=src />
<input type="text" id=dst name=dst />
<input type="date" id=jdate name=jdate />

<div id=trains></div><br/><br/>
<div id=availd></div><br/><br/>
<div id=pay></div>
</form>
	</center>
	</body>
</html>