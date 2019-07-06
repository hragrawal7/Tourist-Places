<html>
<title> my programme </title>
<body background="p3 (2).jpg" style="background-repeat: no-repeat; background-size: 100% ;"/><center>
<center>
<form action="booking.php" >
<center>
<table style="width:40%;height:60%;background-color:white;border-radius:10px;border-style:solid;" > 
<img src="AHD.jpg" height="20%" width="55%" style="border-radius:20px;"/>
<br><br>
<h1 style="color:black;font-size:20px;"><i>BOOKING FORM</i></h1>

<tr>
<td> <label >
Name : </label> </td> <td>
<input type="text"required name="yourname" size="24px" />
</td>
</tr>
<tr><td> <label> E-mail id:</label></td><td>
<input type="text"required name="email" size="24px" /></td></tr>
<tr>
<td> <label >
Identity type:</label></td>
<td >
<select name="identype" >
<option value="adhar" > adhar card </option>
<option value="adhar"> pin card</option>
<option value="adhar"> voter id </option>
<option value="adhar"> identity card </option>
</select>
 </td></tr>
<tr><td>
<label> Identity No:
</label></td>
<td>
<input type="text" required name="ident" size="24px">
<tr>
<td><label >
Room type:</label></td>
<td>
<select name="roomtype">
<option value="Ac"> Ac </option>
<option value="Non-ac"> Non-ac </option>
</SELECT></td></tr>
<tr><td>
<label>
Comment</label></td>
<td>
<textarea cols="25%" rows="5%" name="com"/></textarea>
</td></tr>

<tr>
<td COLSPAN="2"> <CENTER>
<input type="submit"  name="sub" value="OK" style="border-radius:10px;border-style:solid;" />&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" required name="Cancel" value="RESET" style="border-radius:10px;border-style:solid;" /></CENTER></td></tr>
</table> 
</center>
</table>
</fieldset>
</form>
</div>
</body>
</html>

<?php
error_reporting(1);
include_once 'config.php';
$ins=$_POST['sub'];
if($ins){
    if($_POST['c1']==$_POST['c2']){
        
        $a=$_POST['yourname'];
    echo $a;
    $em=$_POST['email'];
    $iden=$_POST['identype'];
    $ident=$_POST['ident'];
    $rm=$_POST['roomtype'];
    $cm=$_POST['com'];
    
   $qry="insert into detail (id,name,email,identity,identityno,roomty,comment)values('','$a','$em','$iden','$ident','$rm','$cm')";
    
   mysql_query($qry);
    }
}
/*
if($_POST['sub']){
    
    $a=$_POST['yourname'];
    echo $a;
    $em=$_POST['email'];
    $iden=$_POST['identype'];
    $ident=$_POST['ident'];
    $rm=$_POST['roomtype'];
    $cm=$_POST['com'];
    
   $qry="insert into detail (id,name,email,identity,identityno,roomty,comment)values('','$a','$em','$iden','$ident','$rm','$cm')";
    
    if(mysql_query($qry)){
        
        echo "data is save";
    }
    else
    {
        echo"data is not save";
    }
    echo "afxdgchf";
}
*/

?>