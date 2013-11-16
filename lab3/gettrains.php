<?php
require_once("connect.php");
if(isset($_GET["id"]) && $_GET["id"]=="gettrains")
{
if(isset($_GET["src"]) && isset($_GET["dst"]) && $_GET["src"]!="" && $_GET["dst"]!="")
{
$src=$_GET["src"];
$dst=$_GET["dst"];
echo "Source : $src  | Destination : $dst<br/><br/>";
$r=mysql_query("select t.tno from trains t join trains s on t.tno=s.tno where t.sc='$src' and s.sc='$dst'");

if(mysql_num_rows($r))
{
echo "<table><tr><th>Train Number</th><th>2A</th><th>2S</th><th>3A<th>SL</th></tr>";

while($rw=mysql_fetch_array($r))
{
echo "<tr><td>".$rw["tno"]."</td>";
$ch=mysql_query("select * from available where tno=$rw[tno] order by class");
if(mysql_num_rows($ch)==0)
{
$tot=mysql_query("select * from total where tno=$rw[tno]");
for($j=0;$j<mysql_num_rows($tot);$j++)
{
$tno=mysql_result($tot,$j,"tno"); $class=mysql_result($tot,$j,"class");
$no=mysql_result($tot,$j,"no");
mysql_query("insert into available (tno,date,cl,no) values($tno,'01/02/2013','$class',$no)");
}
$ch=mysql_query("select * from available where tno=$rw[tno] order by class");
}
for($j=0;$j<mysql_num_rows($ch);$j++)
{
if(mysql_result($ch,$j,"no")>=5)
echo '<td style="background-color:#ededed">';
else if(mysql_result($ch,$j,"no")<=0)
echo '<td style="background-color:#56785d">';
else
echo '<td style="background-color:#dedede">';
echo "<input name=ltrains class=ltrains type=radio value=".mysql_result($ch,$j,"tno").",".mysql_result($ch,$j,"cl")." />".mysql_result($ch,$j,"no")."</td>";
}
echo "</tr>";
}
echo "</table>";
//echo "</form>";
}
else
echo "Sorry !! No trains available between these stations !!";
}
else
echo " ";
}
else if(isset($_GET["id"]) && $_GET["id"]=="availt")
{
echo "<table>";
echo "<tr><th>Name</th><th>Gender</th><th>Age</th><th>Preference</th></tr>";
for($i=0;$i<3;$i++)
echo "<tr><td><input type=pname$i /></td><td><select name=gen$i><option value=M>Male</option><option value=F>Female</option></select></td><td><input type=text name=age$i size=5 /></td><td><select name=pref$i><option value=L>Lower</option><option value=M>Middle</option><option value=U>Upper</option></select></td></tr>";
echo "</table>";
echo "<input type=submit id=cp name=cp value=\"Continue to Payment\" />";
//echo $_GET["tr"];
$arr=split(",",$_GET["tr"]);
}
else if(isset($_GET["id"]) && $_GET["id"]=="pay")
{
echo "<div id=paybank>";
echo "<div id=cose>Card Type - <select name=ctype><option value=C>Credit Card</option><option value=D>Debit Card</option><option value=P>Paypal Account</option></select></div>";
echo "<table>";
echo "<tr><td>Card Number :</td><td><input type=text name=ccard /></td></tr>";
echo "<tr><td>Date of Expiry :</td><td><select name=cmonth width=10>";
for($i=01;$i<=12;$i++)
echo "<option value=$i>$i</option>";
echo "</select>";

echo "&nbsp;&nbsp;<select name=cyear>";
for($i=13;$i<=20;$i++)
echo "<option value=$i>$i</option>";
echo "</select></td></tr>";
echo "<tr><td>CVV :</td><td><input type=password name=cpass /></td></tr>";
echo "<tr><td>Name :</td><td><input type=text name=cname /></td></tr>";
echo "</table>";
echo "<input type=submit name=paynow value=\"Pay Now\"/>";
}
?>

