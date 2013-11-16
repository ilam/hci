<html>
<head>
<title>Lab7 | Hick Hyman's Law</title>
<script src="jquery.js"></script>
<script src="main.js"></script>
<style>
#c1,#c2,#c3,#c4,#c5,#vals
{
display:none;
}
#c01{position:fixed;top:150px;left:150px;background:red;width:60px;height:60px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;}

#c11{position:fixed;top:290px;left:250px;background:red;width:20px;height:20px;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;}
#c12{position:fixed;top:65px;left:350px;background:green;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c13{position:fixed;top:165px;left:550px;background:red;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c14{position:fixed;top:265px;left:10px;background:red;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c15{position:fixed;top:65px;left:50px;background:blue;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}

#c21{position:fixed;top:165px;left:350px;background:blue;width:100px;height:100px;-webkit-border-radius:50px;-moz-border-radius:50px;border-radius:50px;}
#c22{position:fixed;top:190px;left:250px;background:red;width:20px;height:20px;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;}
#c23{position:fixed;top:65px;left:350px;background:yellow;width:60px;height:60px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;}
#c24{position:fixed;top:265px;left:10px;background:blue;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c25{position:fixed;top:65px;left:50px;background:yellow;width:150px;height:150px;-webkit-border-radius:75px;-moz-border-radius:75px;border-radius:75px;}

#c31{position:fixed;top:65px;left:10px;background:orange;width:20px;height:20px;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;}
#c32{position:fixed;top:190px;left:250px;background:orange;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c33{position:fixed;top:65px;left:350px;background:blue;width:60px;height:60px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;}
#c34{position:fixed;top:265px;left:10px;background:yellow;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c35{position:fixed;top:65px;left:50px;background:yellow;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c36{position:fixed;top:95px;left:150px;background:yellow;width:90px;height:90px;-webkit-border-radius:45px;-moz-border-radius:45px;border-radius:45px;}

#c41{position:fixed;top:195px;left:150px;background:green;width:60px;height:60px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;}
#c42{position:fixed;top:190px;left:250px;background:orange;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c43{position:fixed;top:65px;left:350px;background:blue;width:60px;height:60px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;}
#c44{position:fixed;top:265px;left:10px;background:yellow;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c45{position:fixed;top:65px;left:50px;background:yellow;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c46{position:fixed;top:95px;left:150px;background:green;width:60px;height:60px;-webkit-border-radius:20px;-moz-border-radius:20px;border-radius:20px;}
#c47{position:fixed;top:65px;left:10px;background:orange;width:20px;height:20px;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;}


#c51{position:fixed;top:128px;left:88px;background:yellow;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c52{position:fixed;top:65px;left:150px;background:green;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c53{position:fixed;top:190px;left:25px;background:blue;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c54{position:fixed;top:190px;left:150px;background:grey;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}
#c55{position:fixed;top:65px;left:25px;background:red;width:50px;height:50px;-webkit-border-radius:25px;-moz-border-radius:25px;border-radius:25px;}

</style>
</head>
<body>
<?php
echo '<div id=text style="width:500px;height:30px"></div>';
$arr=array(1,5,5,6,7,5);
for($i=0;$i<6;$i++)
{
echo "
<div id=c$i >";
for($j=1;$j<=$arr[$i];$j++)
echo "<button id=c$i$j ></button>";
echo "</div>";
}
?> 
<div>
<table id=vals border=1px style="top:50px;left:250px"><tr><th>S.No</th><th>Time</th></tr></table>
</div>
</body>
</html>
