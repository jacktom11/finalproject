<?php # index.php
session_start();
//check session first
if (!isset($_SESSION['email'])){
include ('../includes/header.php');
}else
{
include ('header.php');
}
?>
<div id=h2>
This is the final project for the 440 course. The purpose of the project is to create a web
site for a business. Users will be allowed to register at first. Once they are registered,
they can login and visit the site at any time.

</div>
<?php
include ('../includes/footer.php');
?>
