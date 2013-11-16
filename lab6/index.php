<?php
include_once("try.php");
$arr=$mm;
$arr[]="List";
$ent=array();
foreach($m as $key=>$val)
{
//print_r($val);
foreach($val as $k=>$v)
$ent[]=$v;
}


//print_r($ent);
//$arr=array("Home","About Us","Products","Technologies","Plans","References","List");
//$ent=array();
//for($i=0;$i<40;$i++)
//$ent[]="Check ".$i;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Lab6 | Dynamic Menu Creation</title>
  <link rel="stylesheet" href="css/jquery-ui.css" type="text/css" />
  <link rel="stylesheet" href="css/jMenu.jquery.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />

  <script src="js/jquery-1.8.3.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script type="text/javascript" src="js/jMenu.jquery.js"></script>
  <style>
<?php
for($i=0;$i<count($arr)-1;$i++) echo "#s$i,";  $m=count($arr)-1; echo "#s$m";
?> { list-style-type: none; padding: 0 0 2.5em; float:left; margin-right: 5px; }
<?php
//$m=count($arr)-1; echo "#s$m";?> 
<!--{margin-left:50px; float:left;}-->
<?php
for($i=0;$i<count($arr)-1;$i++) echo "#s$i li,"; $m=count($arr)-1; echo "#s$m li";
?> { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; width: 120px; }
.locked{font-weight:bold}
  </style>
  <script>
  $(function() {
    $( "<?php for($i=0;$i<count($arr)-1;$i++) echo "#s$i,"; $m=count($arr)-1; echo "#s$m";?>").sortable({
	  items:":not(.locked)",
      connectWith: ".connectedSortable",
	  update : function () 
        { 
		var order = <?php for($i=0;$i<count($arr)-1;$i++) {$val=str_replace(" ","-",$arr[$i]);echo "'a[]=Menu|$val'+'&'+$('#s$i').sortable('serialize')+'&'+"; 
		}
		$m=count($arr)-1; $val=str_replace(" ","-",$arr[$m]); echo "'a[]=Menu|$val'+'&'+$('#s$m').sortable('serialize')"; 
		?>
		//$('#s1').sortable('serialize')+"&"+$('#s2').sortable('serialize'); 
		//console.log(order);
              $("#menulist").load("getdata.php?"+order); 
			  $(".locked").css({'font-weight':'bold'});
			 // $("#jMenu").jMenu();
        } 
	  
	  
    });
  });
  </script>
</head>
<body>

<div id="menulist" style="width:1400px; margin:0 auto;"></div>


<div id=options style="width:1400px; margin:0 auto; margin-top:100px">
<?php
for($i=0;$i<count($arr);$i++) 
{
echo "<ul id=s$i class=connectedSortable>";
$val=str_replace(" ","|",$arr[$i]);
$dis=$arr[$i];
echo "<li class=\"ui-state-default locked\" id=a_$val>$dis</li>";
if($i==count($arr)-1)
{
for($j=0;$j<count($ent);$j++)
{
$val=str_replace(" ","|",$ent[$j]);
$dis=$ent[$j];
echo "<li class=ui-state-default  id=a_$val>$dis</li>";
}
}
echo "</ul>";
}
?> 
</div>
</body>
</html>