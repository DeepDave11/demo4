<?PHP
session_start();
if(isset($_SESSION['whole'])=="")
{
	header("location:wholeseller_login.php?msg=stop");
	exit(0);
}

include("connect.php");
$d=$_REQUEST['d'];
mysqli_query($dhy,"update invoice set flag=2 where iid=$d")or die ("QF");
header("location:orders.php");
?>