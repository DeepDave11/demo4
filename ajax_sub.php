

<?php 
  $country=$_GET['country'];
 
 include("connect.php");

$query="SELECT sub_cate_nm FROM  sub_cat WHERE main_cate_nm='$country'";

$result=mysqli_query($dhy,$query);

?>
<select name="snm" id="snm"  >
<option>Select Sub Category</option>
<?php
while($row=mysqli_fetch_array($result)) 
{ 
 	?>
	<option value=<?php echo $row['sub_cate_nm']; ?>>
	<?php echo $row['sub_cate_nm']; ?>
	</option>
	<?php 
} ?>
</select>
