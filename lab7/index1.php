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
echo "<div id=c$i$j >sfdf</div>";
echo "</div>";
}
?> 
<div>
<table id=vals border=1px style="top:50px;left:250px"><tr><th>S.No</th><th>Time</th></tr></table>
</div>
</body>
</html>
