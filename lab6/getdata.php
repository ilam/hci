<?php
echo '
<head><link rel="stylesheet" href="css/jquery-ui.css" />
  <link rel="stylesheet" href="css/jMenu.jquery.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" /></head><body>
  ';
$menu=array();
foreach ($_GET['a'] as $position => $item)
{
if(substr($item,0,4)=="Menu"){
$current=substr(str_replace("-"," ",$item),5);
//echo $current;
$menu[$current]=array();
}
else
{
$menu[$current][]=str_replace("|"," ",$item);
}
}

echo "<ul id=jMenu>";
foreach($menu as $key=>$value)
{
if($key!="List")
{
$tab='&nbsp;&nbsp;&nbsp;&nbsp;';
echo "<li><a class=fNiv >$key</a>";
if(sizeof($value)!=0)
{
echo "<ul><li class=arrow></li>";
foreach($value as $k=>$v)
{
echo "<li><a>$v</a></li>";
}
echo "</ul>";

}
echo "</li>";
}
}
echo "</ul></body>
<script type=\"text/javascript\">
            $(document).ready(function() {
                $(\"#jMenu\").jMenu();
            });
        </script>

";

?>