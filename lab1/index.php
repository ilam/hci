<html>
<head>
<title>CAPTCHA Check for Login</title>
</head>
<body>
<center>
<br/><br/>IIITD&M Account Login (Correct Username - ilam, Pass - 12345)<br/><br/>
<?php
//error_reporting(E_ERROR);
if(isset($_GET["t"]))
$type=$_GET["t"];
else
$type="text";
if($type=="rec")
{
require_once('recaptchalib.php');
//Linked with ilambharathik@gmail.com
$publickey = "6Le-ANsSAAAAAMWIVmjETzZ8ZFMylQ9te2fZfo0C";
$privatekey = "6Le-ANsSAAAAAM0RDNdpQwv3maKrrP1xDfYpHBK6";
$resp=null;
$error=null;
}
else if($type=="tc")
{
define("CAPTCHA_INVERSE", 1);    
define("CAPTCHA_NEW_URLS", 0);   
include("captcha.php");
}
$disp=true;
$disperr="";
if(isset($_POST["submit"]))
{
if($type=="rec")
{
if ($_POST["recaptcha_response_field"])
{
$resp = recaptcha_check_answer ($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);
if ($resp->is_valid) 
{
if(isset($_POST["uname"]) && isset($_POST["upass"]) && $_POST["uname"]!="" && $_POST["upass"]!="") {
	if($_POST["uname"]=="ilam" && $_POST["upass"]=="12345") 
	$disp=false; 
	else 
	$disperr="Your Username and Password do not match";
}
else
$disperr="Username and/or Password Field is empty";
}
else
$disperr="You failed the CAPTCHA Test";
}
else
$disperr="No response given in the CAPTCHA field";
}
else if($type=="text")
{
if($_POST["ans"])
{
$ans = $_POST['uans'];
$ans = strtolower(trim($ans));
$ans = md5($ans);
$arr=split(" ",$_POST["ans"]);
//foreach ($arr as $v)
//echo "<br/>$v<br/>";
if (in_array($ans,split(" ",$_POST["ans"]))) 
{
if(isset($_POST["uname"]) && isset($_POST["upass"]) && $_POST["uname"]!="" && $_POST["upass"]!="") {
	if($_POST["uname"]=="ilam" && $_POST["upass"]=="12345") 
	$disp=false; 
	else 
	$disperr="Your Username and Password do not match";
}
else 
$disperr="Username and/or Password Field is empty";
}
else
$disperr= "Wrong Answer for TextCAPTCHA";
}
}
else if($type=="tc")
{
//echo "Check1";
if (captcha::solved())
  {
  if(isset($_POST["uname"]) && isset($_POST["upass"]) && $_POST["uname"]!="" && $_POST["upass"]!="") {
	if($_POST["uname"]=="ilam" && $_POST["upass"]=="12345") 
	$disp=false; 
	else 
	$disperr="Your Username and Password do not match";
  }
  else 
  $disperr="Username and/or Password Field is empty";
  }
  else
  {
  $disperr="You failed the CAPTCHA test. Try again !!";
  }
}
}
if($disp)
{
echo "<font color=red>$disperr</font><br/>
<form action=\"?t=$type\" method=post x-enctype=multipart/form-data accept-encoding=UTF-8>
<table>
<tr><td>Username</td><td><input type=text name=uname /></td></tr>
<tr><td>Password</td><td><input type=password name=upass /></td></tr>
</table><br/>";
if($type=="rec")
echo recaptcha_get_html($publickey, $error);
else if($type=="text")
{
$url = 'http://api.textcaptcha.com/dctjedn8nrwwsw0ccgkks0ssseyux5c3';
try {
  $xml = @new SimpleXMLElement($url,null,true);
} catch (Exception $e) {
  // if there is a problem, use static fallback..
  $fallback = '<captcha>'.
      '<question>Is ice hot or cold?</question>'.
      '<answer>'.md5('cold').'</answer></captcha>';
  $xml = new SimpleXMLElement($fallback);
}
$question = (string) $xml->question;
$ans="";
foreach ($xml->answer as $hash)
  $ans = $ans.(string) $hash." ";
$ans=trim($ans);
echo $question."<br/>";
echo "<input type=text name=uans />";
echo "<input type=hidden name=ans value=\"$ans\" />";
}
else if($type=="tc")
{
  echo captcha::form("&rarr;&nbsp;");
}
echo "<br/>
<input type=submit name=submit />
</form>";
}
else
echo "<font color=green>The Login was successful. You passed the CAPTCHA. Username : ilam</font><br/><br/><a href=?t=text>Try Again (TextCAPTCHA)</a><br/><a href=?t=rec>Try Again (ReCAPTCHA)</a><br/><a href=?t=tc>Try Again (Text Image CAPTCHA)"; 
?>
</center>
</body>
</html>
