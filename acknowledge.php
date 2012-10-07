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
<table border=0 width=40% cellpadding=0 cellspacing=0 bgcolor="white">
<tr>
<td>&nbsp; &nbsp; &nbsp;<a href="proj.html">HOME</a></td>
<td><a href="devl.html">ABOUT THE DEVELOPERS</a></td>
<td><a href="conta.html">CONTACT US</a></td>
</tr>
</table>
<br><br><br>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
if($username=="admin" && $password=="admin123")
{
echo "<form action=admin.php>";
echo "<div align=center>";
echo "<font color=black face=calibri size=5>";
echo "You have Been Successfully Logged In. Welcome Admin<br>";
echo "<input type=submit value=Click To Proceed To Admin Page>";
echo "</form>";
}
$p="slq$zdnzskM_im";
$con = mysql_connect("a.db.shared.orchestra.io","user_54bd84ff",$p);
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("db_54bd84ff");  
$result = mysql_query("select * from signinfo where id= '".$username."'"); 
while($row = mysql_fetch_assoc( $result )) {
$pass=$row['password'] ;
if(strcmp($pass,$password)==0)
{
echo "<form action=user.php>";
echo "<div align=center>";
echo "<font color=black face=calibri size=5>";
echo "You have Been Successfully Logged In. Welcome User<br>";
echo "<input type=submit>";
echo "</form>";
}
else
{
echo "Invalid Please Try Again!!!!!!";
}
}
echo"<br><br><br><br><br><br><br><br><br><br><br>";
echo "<div align=center><h2>The Processing has been completed. If there is no result please try again.</h2></div>";
?>
</body>
</html>