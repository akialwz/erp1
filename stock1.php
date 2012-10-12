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
<td>&nbsp; &nbsp; &nbsp;<a href="user.php">USER</a></td>
<td>&nbsp; &nbsp; &nbsp;<a href="proj.html">LOGOUT</a></td>
<td>
</tr>
</table>
<br><br><br>
<font color="white" face="chiller" size="6">
STOCK
<br>
<br>
<?php
$con = mysql_connect("a.db.shared.orchestra.io","user_1766b6b1","ShU3Ys;DCFzMto");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("db_1766b6b1"); 
echo"<table border=0 width=55% cellpadding=5 cellspacing=0 bgcolor=black>";
echo"<tr><td><font color=white face=arial size=5>Catagory</td>
<td><font color=white face=arial size=5>Product</td>
<td><font color=white face=arial size=5>Price</td>
<td><font color=white face=arial size=5>Stock</td>
</tr>";
$result = mysql_query("select * from stock");
while($row = mysql_fetch_assoc( $result )) {
$d=$row['cata'];
$b=$row['item'];
$c=$row['price'];
$o=$row['stock'];
echo"<tr><td><font color=white face=arial size=5>";
echo $d;
echo "</td><td><font color=white face=arial size=5>";
echo $b;
echo "</td><td><font color=white face=arial size=5>";
echo $c;
echo "</td><td><font color=white face=arial size=5>";
echo $o;
echo "</td></tr>";
}
echo"<tr><td><br><br></td></tr>";
?>
</body>
</html>