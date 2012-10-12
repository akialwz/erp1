<html>
<head>
<title>InfoSystem</title>
</head>
<body bgcolor="#880000">
<form action="order.php" method="post">
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
<font color="white" face="chiller" size="6">
ORDER
<br>
<?php
$con = mysql_connect("a.db.shared.orchestra.io","user_1766b6b1","ShU3Ys;DCFzMto");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("db_1766b6b1");  
mysql_query("DELETE FROM ord");
echo "Order Database Has Been Cleared";
?>
</body>
</html>