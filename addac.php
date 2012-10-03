<html>
<head>
<title>InfoSystem</title>
</head>
<body bgcolor="#880000">
<div align="center">
<table border=0 width=94% cellpadding=0 cellspacing=0>
<tr><td><img src="logo.jpg" height="100" width="100"></td>
<td><font color="white" face="chiller" size="6">
<h1>WelcomeShopping<sub>.com</sub></h1></td><br>
</div>
<table border=0 width=15% cellpadding=0 cellspacing=0 bgcolor="white">
<tr>
<td>&nbsp; &nbsp; &nbsp;<a href="admin.php">ADMIN</a></td>
<td>&nbsp; &nbsp; &nbsp;<a href="proj.html">LOGOUT</a></td>
<td>
</tr>
</table>
<br><br><br>
<?php
$u = $_POST['username'];
$p = $_POST['password'];
if($u=="admin")
{
echo "<div align=center>";
echo "<font color=white face=calibri size=5>";
echo "Admin Account Can't Be Recreated<br>";
}
if(strlen($u)>=3 && strlen($p)>=6){
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("valid", $con);
mysql_query("INSERT INTO signinfo values ('$u','$p')");
echo "<div align=center>";
echo "<b>";
echo "<font color=white face=chiller size=6>";
echo "User Has Been Created";
}
else
{
echo "<div align=center>";
echo "<b>";
echo "<font color=white face=chiller size=6>";
echo "User Account Details Are Not Valid";
}
?>
</body>
</html>