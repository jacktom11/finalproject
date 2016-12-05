<html>
<head><link rel="stylesheet" href="../includes/style.css"></head>
<body>
<center>
<img src="../includes/tree.gif" alt="Tree" title="Tree" width="125" height="150"/>
<br>
<h1>440 Final Project</h1> <br>
<Table width="700" cellpadding="10"><tr><td align="right">

<?
if (!isset($_SESSION['email'])){
	echo ("<a href=../Home/login.php>Login</a> | ");
	echo ("<a href=../Home/register.php>Register</a> | "); 
	echo ("<a href=../Home/forgot.php>Forgot Password?</a>");  
} else {
	echo ("<a href=../Home/logout.php>Logout</a>"); 
} 
?>

<p></td></tr></table>

<table width="700" cellpadding="10"><td width="100" valign="top">

<?
if (!isset($_SESSION['email'])){
	echo ("<a href=../Home/index.php>Home</a><p>");
	echo ("<a href=../Home/link.php>Links</a>");  
}else {
	echo ("<a href=../Home/index.php>Home</a><p>");
	echo ("<a href=../bookmark/index.php>My Wishlist</a><p>"); 
	echo ("<a href=../contact/contact.php>Contact us</a><p>"); 
	echo ("<a href=../newpage/newpage.php>New Page</a><p>"); 
} 
?>

</td><td valign="top">
