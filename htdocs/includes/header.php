<html><body><center>
<img src="UWMLogo.jpg" alt="UWM Logo" title="UWM Logo" /><br>
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
	echo ("<a href=../bookmark/index.php>My Bookmarks</a><p>"); 
	echo ("<a href=../contact/contact.php>Contact us</a><p>"); 
} 
?>

</td><td valign="top">
