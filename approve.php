<?PHP
session_start();
 
if(isset($_SESSION['whole'])=="")
{
	header("location:wholeseller_login.php?msg=stop");
	exit(0);
}
 
include("connect.php");
$a=$_REQUEST['a'];
$p=$_REQUEST['p'];
$w=$_REQUEST['w'];
$qty=$_REQUEST['qty'];

//for product name
$qp=mysqli_query($dhy,"select m_name,sub_cate_nm from products where pid=$p and wid=$w")or die ("QF21");
$datap=mysqli_fetch_array($qp);
$mn=$datap['m_name'];
$sm=$datap['sub_cate_nm'];

//for check stock
$qs=mysqli_query($dhy,"select s_qty from stock where m_name='$mn' and sub_cate_nm='$sm' and wid=$w")or die ("QF2");
$datas=mysqli_fetch_array($qs);
$old_qty=$datas['s_qty']; 
if($old_qty>=$qty)
{
	//stock update
	$n_qty=$old_qty-$qty;
	mysqli_query($dhy,"update stock set s_qty=$n_qty where  m_name='$mn' and sub_cate_nm='$sm' and wid=$w")or die ("QF Stock Update");
mysqli_query($dhy,"update invoice set flag=1 where iid=$a")or die ("QF");
header("location:orders.php");

}
else
{
	//no stock
	header("location:orders.php?msg=nostock");
}

?>