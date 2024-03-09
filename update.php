<?php 
include("adminheader.php");
include("config.php");
include("style.php");
?>	

<?php
error_reporting(0);

if(isset($_GET['select'])){

$query2 = "select * from plan where id='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}
}
?>

<body>
<?php
if($_SESSION['admin']){

 }
else{
header("Location: adminlogin.php");
}
?>

<style>
body {
  background-image: url('aa.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

<br>
<br>
<br>
<br>
<br>
<br>
<br>


<form action="" method="post" >


<h2 style="color:red;">Update Plan Details</h2>
<br>
<br>
	<table >
<tr>
		<td class="col"><font color=white size=2>Plan ID:</font></td>
		<td><input type="text" name="id" value="<?php echo $row['id']; ?>" class="textbox" readonly /></td>
	</tr>

	<tr>
		<td class="col"><font color=white size=2>Plan Name:</font></td>
		<td><input type="text" name="name" value="<?php echo $row['name']; ?>" class="textbox" required/></td>
	</tr>
	<tr>
		<td class="col"><font color=white size=2>Cost:</font></td>
		<td><input type="text" name="cost" value="<?php echo $row['cost']; ?>" class="textbox"  required/></td>
	</tr>
	<tr>
		<td class="col"><font color=white size=2>Description:</font></td>
		<td><input type="text" name="dess" value="<?php echo $row['dess']; ?>" class="textbox" required /></td>
	</tr>
		
	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Update" />
		    
		</td>
	</tr>

	
		
	
	</table>

<br>
<br>
<br>
<br>
	</form>
</div>
    </div>
</div>


<?php
 
 
if(isset($_POST['register'])){

	$query = "update plan set name='".$_POST['name']."', cost='".$_POST['cost']."', dess='".$_POST['dess']."' where id= '".$_POST['id']."'";
	   if(mysql_query($query)){
		   //echo 'UPDATE SUCCESSFULLY';}
	   }
	else{
		echo 'NOT UPDATE';
	}
	header("location:viewplan.php");
	exit;
 }

?>


<?php
include('footer.php');
?>
 