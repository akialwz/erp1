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
<br><br>
<font color="white" face="chiller" size="6">
ORDER
<br>
<div align="right">
Each Order Is Limited To A maximum of 10 items
<div align="center">
<table border=0 width=55% cellpadding=0 cellspacing=0 bgcolor="black">
<tr>
<td><font color="white" face="arial" size="5">Item No</td>
<td><font color="white" face="arial" size="5">Product Category</td>
<td><font color="white" face="arial" size="5">Product</td>
<td><font color="white" face="arial" size="5">Price</td>
<td><font color="white" face="arial" size="5">Quantity</td>
</tr>
<tr>
<td><font color="white" face="arial" size="5">1</td>
<td><select name="c1">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("item");  
$query = mysql_query("SELECT * FROM cat");
while ($row = mysql_fetch_assoc($query)) {
$cat = $row['id'];
echo "<option value='$cat'>$cat</option>\n";
}
?>
</select>
</td>
<td>
<select name="i1">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{echo "Error";}
$db = mysql_select_db("item");
$query = mysql_query("SELECT * FROM det");
while ($row = mysql_fetch_assoc($query)) {
$catId = $row['id'];
$catName = $row['item'];
echo "<option value='$catName'>$catName</option>\n";
}
?>
</td>
<td><font color="white" face="arial" size="5">Rs.<input type="text" name="p1" size="7"></td>
<td><select name="q1"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
</tr>
<tr>
<font color="white" face="arial" size="5">
<td><font color="white" face="arial" size="5">2</td>
<td><select name="c2">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("item");  
$query = mysql_query("SELECT * FROM cat");
while ($row = mysql_fetch_assoc($query)) {
$cat = $row['id'];
echo "<option value='$cat'>$cat</option>\n";
}
?>
</select>
</td>
<td>
<select name="i2">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{echo "Error";}
$db = mysql_select_db("item");
$query = mysql_query("SELECT * FROM det");
while ($row = mysql_fetch_assoc($query)) {
$catId = $row['id'];
$catName = $row['item'];
echo "<option value='$catName'>$catName</option>\n";
}
?>
</td>
<td><font color="white" face="arial" size="5">Rs.<input type="text" name="p2" size="7"></td>
<td><select name="q2"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
</tr>
<tr>
<td><font color="white" face="arial" size="5">3</td>
<td><select name="c3">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("item");  
$query = mysql_query("SELECT * FROM cat");
while ($row = mysql_fetch_assoc($query)) {
$cat = $row['id'];
echo "<option value='$cat'>$cat</option>\n";
}
?>
</select>
</td>
<td>
<select name="i3">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{echo "Error";}
$db = mysql_select_db("item");
$query = mysql_query("SELECT * FROM det");
while ($row = mysql_fetch_assoc($query)) {
$catId = $row['id'];
$catName = $row['item'];
echo "<option value='$catName'>$catName</option>\n";
}
?>
</td>
<td><font color="white" face="arial" size="5">Rs.<input type="text" name="p3" size="7"></td>
<td><select name="q3"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
</tr>
<tr>
<td><font color="white" face="arial" size="5">4</td>
<td><select name="c4">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("item");  
$query = mysql_query("SELECT * FROM cat");
while ($row = mysql_fetch_assoc($query)) {
$cat = $row['id'];
echo "<option value='$cat'>$cat</option>\n";
}
?>
</select>
</td>
<td>
<select name="i4">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{echo "Error";}
$db = mysql_select_db("item");
$query = mysql_query("SELECT * FROM det");
while ($row = mysql_fetch_assoc($query)) {
$catId = $row['id'];
$catName = $row['item'];
echo "<option value='$catName'>$catName</option>\n";
}
?>
</td>
<td><font color="white" face="arial" size="5">Rs.<input type="text" name="p4" size="7"></td>
<td><select name="q4"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
</tr>
<tr>
<td><font color="white" face="arial" size="5">5</td>
<td><select name="c5">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("item");  
$query = mysql_query("SELECT * FROM cat");
while ($row = mysql_fetch_assoc($query)) {
$cat = $row['id'];
echo "<option value='$cat'>$cat</option>\n";
}
?>
</select>
</td>
<td>
<select name="i5">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{echo "Error";}
$db = mysql_select_db("item");
$query = mysql_query("SELECT * FROM det");
while ($row = mysql_fetch_assoc($query)) {
$catId = $row['id'];
$catName = $row['item'];
echo "<option value='$catName'>$catName</option>\n";
}
?>
</td>
<td><font color="white" face="arial" size="5">Rs.<input type="text" name="p5" size="7"></td>
<td><select name="q5"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
</tr>
<tr>
<td><font color="white" face="arial" size="5">6</td>
<td><select name="c6">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("item");  
$query = mysql_query("SELECT * FROM cat");
while ($row = mysql_fetch_assoc($query)) {
$cat = $row['id'];
echo "<option value='$cat'>$cat</option>\n";
}
?>
</select>
</td>
<td>
<select name="i6">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{echo "Error";}
$db = mysql_select_db("item");
$query = mysql_query("SELECT * FROM det");
while ($row = mysql_fetch_assoc($query)) {
$catId = $row['id'];
$catName = $row['item'];
echo "<option value='$catName'>$catName</option>\n";
}
?>
</td>
<td><font color="white" face="arial" size="5">Rs.<input type="text" name="p6" size="7"></td>
<td><select name="q6"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
</tr>
<tr>
<td><font color="white" face="arial" size="5">7</td>
<td><select name="c7">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("item");  
$query = mysql_query("SELECT * FROM cat");
while ($row = mysql_fetch_assoc($query)) {
$cat = $row['id'];
echo "<option value='$cat'>$cat</option>\n";
}
?>
</select>
</td>
<td>
<select name="i7">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{echo "Error";}
$db = mysql_select_db("item");
$query = mysql_query("SELECT * FROM det");
while ($row = mysql_fetch_assoc($query)) {
$catId = $row['id'];
$catName = $row['item'];
echo "<option value='$catName'>$catName</option>\n";
}
?>
</td>
<td><font color="white" face="arial" size="5">Rs.<input type="text" name="p7" size="7"></td>
<td><select name="q7"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
</tr>
<tr>
<td><font color="white" face="arial" size="5">8</td>
<td><select name="c8">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("item");  
$query = mysql_query("SELECT * FROM cat");
while ($row = mysql_fetch_assoc($query)) {
$cat = $row['id'];
echo "<option value='$cat'>$cat</option>\n";
}
?>
</select>
</td>
<td>
<select name="i8">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{echo "Error";}
$db = mysql_select_db("item");
$query = mysql_query("SELECT * FROM det");
while ($row = mysql_fetch_assoc($query)) {
$catId = $row['id'];
$catName = $row['item'];
echo "<option value='$catName'>$catName</option>\n";
}
?>
</td>
<td><font color="white" face="arial" size="5">Rs.<input type="text" name="p8" size="7"></td>
<td><select name="q8"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
</tr>
<tr>
<td><font color="white" face="arial" size="5">9</td>
<td><select name="c9">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("item");  
$query = mysql_query("SELECT * FROM cat");
while ($row = mysql_fetch_assoc($query)) {
$cat = $row['id'];
echo "<option value='$cat'>$cat</option>\n";
}
?>
</select>
</td>
<td>
<select name="i9">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{echo "Error";}
$db = mysql_select_db("item");
$query = mysql_query("SELECT * FROM det");
while ($row = mysql_fetch_assoc($query)) {
$catId = $row['id'];
$catName = $row['item'];
echo "<option value='$catName'>$catName</option>\n";
}
?>
</td>
<td><font color="white" face="arial" size="5">Rs.<input type="text" name="p9" size="7"></td>
<td><select name="q9"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
</tr>
<tr>
<td><font color="white" face="arial" size="5">10</td>
<td><select name="c10">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("item");  
$query = mysql_query("SELECT * FROM cat");
while ($row = mysql_fetch_assoc($query)) {
$cat = $row['id'];
echo "<option value='$cat'>$cat</option>\n";
}
?>
</select>
</td>
<td>
<select name="i10">
            <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{echo "Error";}
$db = mysql_select_db("item");
$query = mysql_query("SELECT * FROM det");
while ($row = mysql_fetch_assoc($query)) {
$catId = $row['id'];
$catName = $row['item'];
echo "<option value='$catName'>$catName</option>\n";
}
?>
</td>
<td><font color="white" face="arial" size="5">Rs.<input type="text" name="p10" size="7"></td>
<td><select name="q10"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
</tr>
<tr>
<td colspan=5><div align="center"><input type="Submit" value="Process Order"></td></tr>
</table>
</form>
<font color="white" face="chiller" size="6">
<form action="clear.php" method="post">
If the Order Has Been Processed Please Cleare the Request
<input type="submit" value="Clear Orders">
</form>
</body>
</html>