<?php
include_once("simple_html_dom.php");
$html = file_get_html('espn.htm');

$mm=array();
foreach($html->find('a[class=popNavLink]') as $element)
$mm[]=$element->plaintext;

$i=0;
$m=array();
while($i<sizeof($mm))
{
foreach($html->find('div[id=m'.$i.']') as $element)
{
$cur=$mm[$i];
$m[$cur]=array();
foreach($element->find('a[class=PopupLinks]') as $el)
if($el->plaintext!="")
$m[$cur][]=$el->plaintext;
}
$i++;
}
//print_r($m);
?>
