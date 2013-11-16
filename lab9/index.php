<html>
<head>
<title>Mob Keypad </title>
<script src="jquery.js"></script>
<script>
var chars=[[],[".",",","!"],["a","b","c"],["d","e","f"],["g","h","i"],["j","k","l"],["m","n","o"],["p","q","r","s"],["t","u","v"],["w","x","y","z"],[" "]];
var click=0,ct=0;
$(document).ready(function() {
jQuery("button").click(function() {
    var id = jQuery(this).attr("id");
	if(id==11)
	{
	click=0;
	$('#typed').val(($('#typed').val().substring(0,$('#typed').val().length - 1)));	
	}
    else 
	{
	if(click==0 || click!=id)
	{
	click=id;ct=-1;
	if(ct==chars[click].length-1) ct=0;
	else ct++;
	$("#typed").val($("#typed").val()+chars[click][ct]);
	}
	else
	{
	if(ct==chars[click].length-1) ct=0;
	else ct++;
	$('#typed').val(($('#typed').val().substring(0,$('#typed').val().length - 1))+chars[click][ct]);
	}
	var m=ct;
	var id1=id;
	setTimeout(function() {	
	if(id1==id && ct==m)
	click=0;
	
}, 1000);
	}
});
});
</script>
<style>
</style>
</head>
<body>
<input type=text name=typed id=typed />
<br/><br/>
<?php
$arr=array("",".","abc"," def","ghi","jkl","mno","pqrs","tuv","wxyz"," _  ");
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type=button id=11 style=\"style=height:50px;width:50px;\">Bksp<br/>.</button><br/>"; 
for($i=1;$i<=9;$i++)
{
echo "<button type=button id=$i style=\"style=height:50px;width:50px;\">$i<br/>$arr[$i] </button>"; 
if($i%3==0)
echo "<br/>";
}
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type=button id=10 style=\"style=height:50px;width:50px;\">0<br/>_</button>";
?>
<br/><br/><br/>
</body>
</html>
