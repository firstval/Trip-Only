
<center>
<body background="high-definition-christmas-wallpaper.jpg">
<font color="greenyellow"><font size=20><font face="Cooper Black"> <u> REGISTRATION </u></font></font></font></center><br><br><center>
<table border=3 bgcolor=black><form action=scripting.php method=get><font color=blue>
<tr><td><b><font color=greenyellow>E-MAIL<td><input name=email><font color=greenyellow> *<tr><td><b><font color=greenyellow>DESIRED PASSWORD <td><input type=password name=password><font color=greenyellow> *
<tr><td> &nbsp <b><font color=greenyellow>NAME<td><input type="name" name="lastname" size=15> <input name="firstname" size=15> <input name="middlename" size=1> &nbsp <font color=greenyellow>*<br>
<font size=2> &nbsp &nbsp &nbsp &nbsp &nbsp <font color=greenyellow>SURNAME &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <font color=greenyellow>GIVEN NAME &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<font color=greenyellow> M.I.</font>
<tr><td>&nbsp <b><font color=greenyellow>ADDRESS<td><input type="address" name="street" size=10> <input type="address" name="barangay" size=15> <input type="address" name="city" size=15> &nbsp <font color=greenyellow>*<br>
<font size=2><font color=greenyellow> NO. & STREET &nbsp &nbsp &nbsp &nbsp &nbsp <font color=greenyellow>BARANGAY &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <font color=greenyellow>CITY</font> <br><br>
<tr><td>&nbsp <b><font color=greenyellow>GENDER<td><select name=gender>
<option value=Option selected>Choose your Gender
<option value=male>Male
<option value=female>Female
</select><font color=greenyellow> * 
&nbsp &nbsp 
<tr><td>&nbsp <b><font color=greenyellow> STATUS<td><select name=status> 
<option value=Option selected>Choose your Status
<option value=Single>Single
<option value=Married>Married
<option value=Divorce>Divorce
<option value=relationship>In a relationship
</select><font color=greenyellow> *
<tr><td>&nbsp <b><font color=greenyellow>BIRTHDATE &nbsp &nbsp <td>
<script language=javascript> 
var x=1;
document.write("<select name=month><option value selected>MONTH");
while(x<=12)
{
document.write("<option value="+x+">"+x);
x=x+1;
}
document.write("</select><select name=days><option value selected>DAY");
var x=1;
while(x<=31)
{
document.write("<option value="+x+">"+x);
x=x+1;
}
document.write("</select><select name=year><option value selected>YEAR");
x=1950;
while(x<=2012)
{
document.write("<option value="+x+">"+x);
x=x+1;
}
document.write("</select>");
</script><font color=greenyellow> *

<tr><td>&nbsp <b><font color=greenyellow>BIRTHPLACE &nbsp &nbsp<td><input type="birthpace" name="bt" size=19><font color=greenyellow> *
<tr><td>&nbsp <b><font color=greenyellow>RELIGION <td>
<input type=radio name=religion value=catholic/><font color=greenyellow>ROMAN CATHOLIC<br/>
<input type=radio name=religion value=christian/><font color=greenyellow>CHRISTIAN<br/>	
<input type=radio name=religion value=inc/><font color=greenyellow>IGLESIA NI KRISTO<br/>	
<input type=radio name=religion value=other/><font color=greenyellow>others:pls specify &nbsp <input type=text name=others><font color=greenyellow> *
	
<tr><td colspan=2 bgcolor=yellow><center> <input type=submit name=save value=SUBMIT> &nbsp &nbsp <input type=reset value=CLEAR>
<?php
if(isset($_GET['save']))
{
include("dbconnect.php");
$a=$_GET['email'];
$b=$_GET['password'];
$c=$_GET['lastname'];
$d=$_GET['firstname'];
$e=$_GET['middlename'];
 
// search the email if it already active
$query="select * from profile where (email='$a')";
$result=mysql_query($query) or die ("Error in query");
$bilang=mysql_num_rows($result);
if ($bilang==0)
{
// insert record
$insert="insert into profile values('$a','$b', '$c', '$d', '$e')";
mysql_query($insert);
print "<p align=center><font color=red><b>Record Saved</b></font>";
}
else
print "<center> SORRY <font color=red> $d </font> BUT EMAIL ALREADY EXISTS!!!</font>";
}
?>


</form>
</table>
</body>