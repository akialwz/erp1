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
<font color="white" face="chiller" size="6">
PAYROLL
<br>
<br>
<?php
$val = $_POST['id'];
$con = mysql_connect("a.db.shared.orchestra.io","user_1766b6b1","ShU3Ys;DCFzMto");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("db_1766b6b1");  
$result = mysql_query("select * from empdat where id='".$val."'");
while($row = mysql_fetch_assoc( $result )) {
$d=$row['days'];
$b=$row['basic'];
$c=$row['claims'];
$o=$row['others'];
echo "<div align=center>";
echo "Days:   "; 
echo $row['days'];
echo "<br>";
echo "Basic Pay:   "; 
echo $row['basic'];
echo "<br>";
echo "Claims:   "; 
echo $row['claims'];
echo "<br>";
echo "Extra Allowances:   ";
echo $row['others'];
echo "<br><br>";
$cal=$d*$b;
echo "Calculated Pay Per Days:   ";
echo $cal;
echo "<br>";
echo "<br>";
echo "<b>Tota Pay:   ";
echo $cal+$c+$o;
echo "<br>";
echo "<br>";
}
$numrows = mysql_num_rows($result); 
if($numrows == 0) { 
echo "<div align=center>";
echo "<h2>Wrong Entery</h2>";
} 
else { 
echo "OUTPUT";}
?>