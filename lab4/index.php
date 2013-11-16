<?php
if(!isset($_GET["ans"]) && !isset($_POST["submit"]))
echo '<meta http-equiv="REFRESH" content="7;url=http://localhost/hci/lab4/index.php?ans=check">';
?>
<html>
<head>
<title>Lab4 | Serial Positioning</title>
<script src="jquery.js"></script>
<script src="main.js"></script>
</head>
<body>
<?php
if(isset($_GET["ans"]))
{

$arr1=array("#c88bfe","#9900ff","#660066","#cfcfcf","#c0c0c0","#8c8c8c","#ffccff","#ff79ff","#ff00cc","#cef0ec","#92f4ea","#11dac7","#ffff99","#ffff33","#ffcc00","#66ff00","#009900","#076202","#ff6a6a","#ff2f2f","#ff0000","#ed9367","#ad5c45","#660000","#d2d2bc","#adad84","#7a7a50","#6699ff","#0000ff","#000099","#fbe1bf","#f7be73","#e8a54b","#ccedf7","#a3e0f2","#89d8ef");
echo "<div id=container>";
echo "<div style=\"float:left;padding-left:100px;padding-right:100px;\"><h3>Serial Postitioning Effect</h3><br/><br/>
<table id=toselect>";
for($i=0;$i<36;$i=$i+3)
{
$m=($i/3)+1;
echo "<tr id=".$m.">";
for($j=0;$j<3;$j++)
echo "<td style=\"border:thin solid black;background-color:".$arr1[$i+$j].";width:100px;height:40px\"></td>";
}
echo "</tr>";
echo "</table></div>";
echo "<div style=\"float:left\"><h3>Selected Rows</h3><br/><br/><table id=scolors>";
echo "</table><form method=post action=index.php><input type=hidden name=val id=val><input type=submit name=submit value=Check></form></div>";
echo "</div>";
}
else if(isset($_POST["submit"]))
{
//echo $_POST["val"];
$arr=array("#6699ff","#0000ff","#000099","#66ff00","#009900","#076202","#ffff99","#ffff33","#ffcc00","#ff6a6a","#ff2f2f","#ff0000","#ffccff","#ff79ff","#ff00cc","#c88bfe","#9900ff","#660066","#ed9367","#ad5c45","#660000");
echo "<center><h4>The Selected Columns are shown - Serial Positioning Effect</h4><br/><br/><table>";
$val=substr($_POST["val"],0,-1);
$c=explode(",",$val);
$as=array(1=>10,2=>6,3=>5,4=>7,5=>3,6=>1,7=>8);
for($i=0;$i<21;$i=$i+3)
{
echo "<tr>";
for($j=0;$j<3;$j++)
if(in_array($as[($i/3)+1],$c))
echo "<td style=\"border:thin solid black;background-color:".$arr[$i+$j].";width:100px;height:40px\"></td>";
else
echo "<td style=\"border:thin solid black;background-color:#000000;width:100px;height:40px\"><font color=white>NOT CHOSEN</font></td>";
}
echo "</tr>";
echo "</table></div>";
}
else
{
$arr=array("#6699ff","#0000ff","#000099","#66ff00","#009900","#076202","#ffff99","#ffff33","#ffcc00","#ff6a6a","#ff2f2f","#ff0000","#ffccff","#ff79ff","#ff00cc","#c88bfe","#9900ff","#660066","#ed9367","#ad5c45","#660000");
echo "<center><h3>Serial Postitioning Effect<br/><span id=timer></span></h3><br/><br/><table>";
for($i=0;$i<21;$i=$i+3)
{
echo "<tr>";
for($j=0;$j<3;$j++)
echo "<td style=\"border:thin solid black;background-color:".$arr[$i+$j].";width:100px;height:40px\"></td>";
}
echo "</tr>";
echo "</table></div>";
}
?>
</body>
</html>
