<?php session_start();
if(empty($_SESSION['uname']))
header("Location:index.php");	
if(isset($_GET['logout']))
{
	session_destroy();
	header("Location:index.php");
}	
echo "<br/><center><h4><a href='home.php?logout'><b>Logout</b></a></h4></center>";
?>
<!doctype html>
<html>
	<head>
		<title>You Have Successfully Logged In To your Account </title>
		<link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet" />
		<script src="js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.js" type="text/javascript" language="javascript"></script>
		<script>
	
		
		$(document).ready(function() {
			
			$('#trainsform').submit(function() {
			var url = $(this).attr('action');   
			$('#availd').html('');	
			$('#trains').html('').load(url+'?id=gettrains&src='+ $('#src').val()+'&dst='+$('#dst').val(),function(){
					$(".ltrains").change(function(e){
								var url = 'gettrains.php';       
					$('#availd').html('Loading Availability ... ').load(url+'?id=availt&src='+ $('#src').val()+'&dst='+$('#dst').val()+'&tr='+$("input[name='ltrains']:checked").val());
					return false;
					});
					});
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
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Lab3 Demo</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">Booked Tickets</a></li>
              <li><a href="#contact">Contact</a></li>
              <!--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>-->
            </ul>
            <form class="navbar-form pull-right" action="home1.php?logout=true " > 
              <!--<input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>-->
			  Welcome Back <?php echo $_SESSION["uname"]; ?> !!
			  <button type=submit class=btn >Logout</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->
	</body>
</html>