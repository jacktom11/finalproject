<?
session_start();
//check session first
if (!isset($_SESSION['email'])){
	echo "You are not logged in!";
	exit();
}else{

	include ("../includes/header.php");
?>
	<p>Nounee Yang</p>
	<p>School of Information Studies</p>
	<p>Uinversity of Wisconsin - Milwaukee</p>
	<p>Milwaukee, WI 53211</p>
	<p>123-456-7890</p>
	<p>nounee.uwmsois.com</p>
<?
	include ("../includes/footer.php");
}
?>
