<?php
session_start();
if(isset($_SESSION['uname']))
header("Location:home.php");	
?>
<!doctype html>
<html>
	<head>
		<title>Login | IIITD&M </title>
		<link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet" />
		<script src="assets/js/jquery.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript">
//  Developed by Amit Sarwara
//  Visit http://www.tricktodesign.com for this script and more.
$(document).ready(function()
{
	$("#login_form").submit(function()
	{
		//remove all the class add the messagebox classes and start fading
		$("#msgbox").removeClass().addClass('messagebox').text('Validating....').fadeIn(1000);
		//check the username exists or not from ajax
		$.get("ajax_login.php",{ user_name:$('#username').val(),password:$('#password').val() } ,function(data)
        {
		  if(data=='yes') //if correct login detail
		  {
		  	$("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Logging in.....').addClass('messageboxok').fadeTo(900,1,
              function()
			  { 
			  	 //redirect to secure page
				 document.location='home.php';
			  });
			  
			});
		  }
		  else 
		  {
		  	$("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Check your details !').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
				
        });
 		return false; //not to post the  form physically
	});
	//now call the ajax also focus move from 
	$("#password").blur(function()
	{
		$("#login_form").trigger('submit');
	});
});
</script>
<style type="text/css">
body {
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
}
.top {
margin-bottom: 15px;
}
.buttondiv {
margin-top: 10px;
}
.messagebox{
	position:absolute;
	width:100px;
	right:49%;
	top:70px;
	border:1px solid #c93;
	background:#ffc;
	padding:5px;
	-webkit-border-radius: 8px;
	border-radius: 8px;-webkit-box-shadow: 1px 1px 12px 4px rgba(0, 0, 0, .4);
	box-shadow: 1px 1px 12px 4px rgba(0, 0, 0, .4);
}
.messageboxok{
	position:absolute;
	width:auto;
	right:49%;
	top:70px;
	border:1px solid #349534;
	background:#C9FFCA;
	padding:5px;
	font-weight:bold;
	color:#008000;
	-webkit-border-radius: 8px;
	border-radius: 8px;
	-webkit-box-shadow: 1px 1px 12px 4px rgba(0, 0, 0, .4);
	box-shadow: 1px 1px 12px 4px rgba(0, 0, 0, .4);
}
.messageboxerror{
	position:absolute;
	width:auto;
	right:44%;
	top:70px;
	border:1px solid #CC0000;
	background:#F7CBCA;
	padding:5px;
	font-weight:bold;
	color:#CC0000;
	-webkit-border-radius: 8px;
	border-radius: 8px;
	-webkit-box-shadow: 1px 1px 12px 4px rgba(0, 0, 0, .4);
	box-shadow: 1px 1px 12px 4px rgba(0, 0, 0, .4);
}

</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
			<span id="msgbox" style="display:none"></span>
			<center><h2> Log into your IIITD&M Account</h2></center>
					<form class="form-horizontal" method="post" action="" id="login_form" style="border:1px solid #eee;padding-left: 200px;padding-top:50px;margin-top:15px">
					  <div class="control-group">
						<label class="control-label" for="username">Username</label>
						<div class="controls">
						  <input type="text" id="username" placeholder="Username">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="password">Password</label>
						<div class="controls">
						  <input type="password" id="password" placeholder="Password">
						</div>
					  </div>
					  <div class="control-group">
						<div class="controls">
						  <input name="Submit" type="submit" id="submit" value="Login" class="btn btn-success"/>
						  <input type="reset" name="Reset" value="Reset" class="btn"/>
						</div>
					  </div>
					</form>
			</div>
		</div>
	</body>
</html>