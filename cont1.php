<html>
<head>
<title>InfoSystem</title>
</head>
<body bgcolor="#880000">
<form name="login" action="acknowledge.php" method="post">
<div align="center">
<table border=0 width=94% cellpadding=0 cellspacing=0>
<tr><td><img src="logo.jpg" height="100" width="100"></td>
<td><font color="white" face="chiller" size="6">
<h1>WelcomeShopping<sub>.com</sub></h1></td>
<td><div align="right"><font color="black" face="calibri" size="4">
<b>User Name</b> 
<input type="text" size="14" name="username">
<br>
<b>Password</b>
<input type="password" size=14 name="password">
<br>
<input type="submit" value="LogIn">
<br>
</table></div>
<table border=0 width=40% cellpadding=0 cellspacing=0 bgcolor="white">
<tr>
<td>&nbsp; &nbsp; &nbsp;<a href="proj.html">HOME</a></td>
<td><a href="devl.html">ABOUT THE DEVELOPERS</a></td>
<td><a href="conta.html">CONTACT US</a></td>
</tr>
</table>
<br><br><br>
<?php
$n=$_POST['na'];
$e=$_POST['eid'];
$c=$_POST['cn'];
$qn=$_POST['qn'];
$com=$_POST['comments'];
if(preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9]{5,7}.[a-zA-z]+$/",$e))
{
if(preg_match('/^(0|(\+)?91)?[7-9]\d{9}$/',$c)){
$con = mysql_connect("a.db.shared.orchestra.io","user_1766b6b1","ShU3Ys;DCFzMto");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db_1766b6b1", $con);

mysql_query("INSERT INTO contactinfo values ('$n','$e', '$c', '$qn', '$com')");
echo "<div align=center>";
echo "<b>";
echo "<font color=white face=chiller size=6>";
echo "The Querry Has Been Logged";
}
else{
echo "<div align=center>";
echo "<b>";
echo "<font color=white face=chiller size=6>";
echo "The Querry Has Not Been Validated Please Process Again";
}
}
else{
echo "<div align=center>";
echo "<b>";
echo "<font color=white face=chiller size=6>";
echo "The Querry Has Not Been Validated Please Process Again";
}
?>
</body>
</html>