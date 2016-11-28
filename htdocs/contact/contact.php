<?
session_start();
//check session first
if (!isset($_SESSION['email'])){
	echo "You are not logged in!";
	exit();
}else{

	include ("../includes/header.php");
?>
	<p>Khaled Sabha</p>
	<p>School of Information Studies</p>
	<p>Uinversity of Wisconsin - Milwaukee</p>
	<p>Milwaukee, WI 53211</p>
	<p>414-229-3881</p>
	<p>sabha@uwm.edu</p>
<?
	include ("../includes/footer.php");
}
?>
