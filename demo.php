
<html>
<head>
</head>
<body>


<center>
<img src="ahd.jpg"/>
<br><br><br><br><br><br>
<img src="l.jpg" height="12%"/>
<form method="post" action="login.php">
<table background="mm.png" style="border-style:solid;border-width:1px;border-radius:5px;height:40%;width:20%;" >

<tr><td><center><input type="text" required autofocus name="t1" placeholder="User-ID" style=" height:40px;width:210px;border-radius:8px;"  /></td></tr><tr><td></td></tr>
<tr><td ><center><input type="password"  required autofocus name="p1" placeholder="Password" style=" height:40px;width:210px;border-radius:8px;" /></td></tr>
<tr><td></td></tr>
<tr><td ><center><input type="submit" autofocus name="l1" Value="Login" style=" height:40px;width:210px;border-radius:8px;" /></td></tr>
<tr><td><center><a href="../reg2/registration.php" style="color:cyan">Create New Account</a></center></td></tr>
</table>
</form>
</body>



</html>
<?php
include_once 'config.php';
if(isset($_POST['l1']))
{
  
    
$a=$_POST['t1'];
$b=$_POST['p1'];

$qry="insert into log(name,password)values('$a','$b')";
if(mysql_query($qry)){
    
    echo"data is save";
}
else
{
    echo"data is not save";
}
}
?>