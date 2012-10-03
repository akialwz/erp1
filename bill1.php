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
BILLING<br>
<?php
$c1=$_POST['c1'];
$i1=$_POST['i1'];
$p1=$_POST['p1'];
$c2=$_POST['c2'];
$i2=$_POST['i2'];
$p2=$_POST['p2'];
$c3=$_POST['c3'];
$i3=$_POST['i3'];
$p3=$_POST['p3'];
$c4=$_POST['c4'];
$i4=$_POST['i4'];
$p4=$_POST['p4'];
$c5=$_POST['c5'];
$i5=$_POST['i5'];
$p5=$_POST['p5'];
$c6=$_POST['c6'];
$i6=$_POST['i6'];
$p6=$_POST['p6'];
$c7=$_POST['c7'];
$i7=$_POST['i7'];
$p7=$_POST['p7'];
$c8=$_POST['c8'];
$i8=$_POST['i8'];
$p8=$_POST['p8'];
$c9=$_POST['c9'];
$i9=$_POST['i9'];
$p9=$_POST['p9'];
$c10=$_POST['c10'];
$i10=$_POST['i10'];
$p10=$_POST['p10'];
echo"<table border=0 width=50% cellpadding=0 cellspacing=0 bgcolor=black>";
echo"<tr><td><font color=white face=arial size=5>Item No</td>
<td><font color=white face=arial size=5>Product Category</td>
<td><font color=white face=arial size=5>Product</td>
<td><font color=white face=arial size=5>Price</td>
</tr>";
if($p1!="" && $p1!="Rs.")
{
echo"<tr><td><font color=white face=arial size=5>1</td>
<td><font color=white face=arial size=5>$c1</td>
<td><font color=white face=arial size=5>$i1</td>
<td><font color=white face=arial size=5>$p1</td>
</tr>";
}
if($p2!="" && $p2!="Rs.")
{
echo"<tr><td><font color=white face=arial size=5>2</td>
<td><font color=white face=arial size=5>$c2</td>
<td><font color=white face=arial size=5>$i2</td>
<td><font color=white face=arial size=5>$p2</td>
</tr>";
}
if($p3!="" && $p3!="Rs.")
{
echo"<tr><td><font color=white face=arial size=5>3</td>
<td><font color=white face=arial size=5>$c3</td>
<td><font color=white face=arial size=5>$i3</td>
<td><font color=white face=arial size=5>$p3</td>
</tr>";
}
if($p4!="" && $p4!="Rs.")
{
echo"<tr><td><font color=white face=arial size=5>4</td>
<td><font color=white face=arial size=5>$c4</td>
<td><font color=white face=arial size=5>$i4</td>
<td><font color=white face=arial size=5>$p4</td>
</tr>";
}
if($p5!="" && $p5!="Rs.")
{
echo"<tr><td><font color=white face=arial size=5>5</td>
<td><font color=white face=arial size=5>$c5</td>
<td><font color=white face=arial size=5>$i5</td>
<td><font color=white face=arial size=5>$p5</td>
</tr>";
}
if($p6!="" && $p6!="Rs.")
{
echo"<tr><td><font color=white face=arial size=5>6</td>
<td><font color=white face=arial size=5>$c6</td>
<td><font color=white face=arial size=5>$i6</td>
<td><font color=white face=arial size=5>$p6</td>
</tr>";
}
if($p7!="" && $p7!="Rs.")
{
echo"<tr><td><font color=white face=arial size=5>7</td>
<td><font color=white face=arial size=5>$c7</td>
<td><font color=white face=arial size=5>$i7</td>
<td><font color=white face=arial size=5>$p7</td>
</tr>";
}
if($p8!="" && $p8!="Rs.")
{
echo"<tr><td><font color=white face=arial size=5>8</td>
<td><font color=white face=arial size=5>$c8</td>
<td><font color=white face=arial size=5>$i8</td>
<td><font color=white face=arial size=5>$p8</td>
</tr>";
}
if($p9!="" && $p9!="Rs.")
{
echo"<tr><td><font color=white face=arial size=5>9</td>
<td><font color=white face=arial size=5>$c9</td>
<td><font color=white face=arial size=5>$i9</td>
<td><font color=white face=arial size=5>$p9</td>
</tr>";
}
if($p10!="" && $p10!="Rs.")
{
echo"<tr><td><font color=white face=arial size=5>10</td>
<td><font color=white face=arial size=5>$c10</td>
<td><font color=white face=arial size=5>$i10</td>
<td><font color=white face=arial size=5>$p10</td>
</tr>";
}
echo "<tr><td colspan=4><div align=center><font color=white face=arial size=5>Thank You For The Perchase</td></tr>";
echo "<tr><td colspan=2><font color=white face=arial size=5>TOTAL</td>";
$t=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10;
echo "<td colspan=2><font color=white face=arial size=5>$t</tr>";
?>
</body>
</html>