<?php
session_start();
if(isset($_SESSION['whole'])=="")
{
	header("location:wholeseller_login.php?msg=stop");
	exit(0);
}
$_SESSION['whole']='';
session_destroy();
header("location:wholeseller_login.php");
?>