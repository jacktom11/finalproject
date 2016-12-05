<?php # index.php
session_start();
//check session first
if (!isset($_SESSION['email'])){
include ('../includes/header.php');
}else
{
include ('../includes/header.php');
}
?>
<div id=h2>
This is the 440 Wish List. A magical place for kids and adults alike to build their wish lists for the holiday season. You're only a click away from the best gifts (both giving and getting)! Happy Holidays!

</div>
<?php
include ('../includes/footer.php');
?>
