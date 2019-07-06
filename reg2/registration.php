
<html>
<head>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<style>
.reg
{
width:100px;
align:center;
}
</style>
</head>
<!--
<script language="javascript">
function uname()
{
if(document.myform.txt1.value=="")
{
	alert("please enter  name");
}
else if(document.myform.txt2.value=="")
{
	alert("please enter user name");
}
else if(document.myform.pass1.value!=document.myform.pass2.value)
{
alert("Password not match,please enter valid passwod");

}
else if(document.myform.mono.value.length<=11)
{
	alert("mobile   number is not valid,please 11 digit ");

}
}
</script>
-->
<body background="back.jpg">
<table width="100%">
<td>
<H1 style="margin-left:150px;"><i>Registration form</i></h1>
<form action="registration.php" name="myform"  method="post">
<table style="margin-left:150px;">
<tr><td>
Name:
</td>
<td>
<input type="text" required name="txt1" style="border-color:blue;border-radius:10px;border-style:solid;"/></td></tr>
<tr><td>
Username:</td>
<td>
<input type="text"  required name="txt2" style="border-color:blue;border-radius:10px;border-style:solid;"/></td></tr>
<tr><td>
Password:</td>
<td>
<input type="password" required name="pass1" style="border-color:blue;border-radius:10px;border-style:solid;"/></td></tr>
<tr><td>
Re-password:</td>
<td>
<input type="password" required name="pass2" style="border-color:blue;border-radius:10px;border-style:solid;"/></td></tr>
<tr><td>
Mobile No.:</td>
<td>
<input type="text" required name="mono" style="border-color:blue;border-radius:10px;border-style:solid;"/></td></tr>
<tr><td>
<input type="submit" required value="submit" name="submitbtn"/></td></tr>
</table>

</form></td>
<td ><!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/36268185registrationpuzzle3drenderillustrationwithwordonbluebackground.jpg" alt="Registration here" title="Registration here" id="wows1_0"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/registrationrenderconceptbluearrowsbluegreybackground49026238.jpg" alt="wowslider.com" title="registrartion here" id="wows1_1"/></a></li>
		<li><img src="data1/images/asd.jpg" alt="registrartion here" title="registrartion here" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Registration here"><span><img src="data1/tooltips/36268185registrationpuzzle3drenderillustrationwithwordonbluebackground.jpg" alt="Registration here"/>1</span></a>
		<a href="#" title="registrartion here"><span><img src="data1/tooltips/registrationrenderconceptbluearrowsbluegreybackground49026238.jpg" alt="registrartion here"/>2</span></a>
		<a href="#" title="registrartion here"><span><img src="data1/tooltips/asd.jpg" alt="registrartion here"/>3</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">bootstrap carousel</a> by WOWSlider.com v8.6</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section --></td></table>
</body>
</html>

<?php
include_once 'config.php';
//mysql_connect("localhost","root","");
//mysql_select_db("pkdb");
IF(ISSET($_POST['submitbtn']))
{

$name=$_POST['txt1'];
$uname=$_POST['txt2'];
$pass=$_POST['pass1'];
//$pas2=$_post['pass2'];
$contact=$_POST['mono'];
/*$ppass=md5($pass);*/



$qry="insert into regist(name,uname,pass,contact)values('$name','$uname','$pass','$contact')";
if(mysql_query($qry))
{
    echo "<script> alert ('Welcome  $name , Thanks For Register Here.')</script>";
   
         
        header("Location:../home.php");
}
else
{
   echo "<script> alert ('Hi,  $name , I am sorry,Please read Given Instration')</script>";
}

}

?>
