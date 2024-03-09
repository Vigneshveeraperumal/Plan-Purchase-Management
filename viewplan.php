<?php
include("style.php");
include("config.php");
include("adminheader.php");
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
<center>

<h1 style="color:black;">Plan Details</h1>
<br>

<br>
	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    <th bgcolor=orange><font color=blue size=2>ID</font></th>
			<th bgcolor=orange><font color=blue size=2>Plan Name</font></th>
			<th bgcolor=orange><font color=blue size=2>Cost</font></th>
			<th bgcolor=orange><font color=blue size=2>Description</font></th>
			<th bgcolor=orange><font color=blue size=2>Update</font></th>
<th bgcolor=orange><font color=blue size=2>Delete</font></th>
			  
	</tr>
	
	<?php
	
	$query = "select * from plan";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       <td bgcolor=orange><b><font color=white size=2><?php echo $row['id']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['name']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['cost']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['dess']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><a href="update.php?select=<?php echo $row['id'];?>" style="color:red;">Update</a></font></b></td>
		<td bgcolor=orange><b><font size=2><a href="?delete=<?php echo $row['id'];?>" style="color:red;">Delete</a></font><b></td>

		
	</tr>
	<?php }  ?>
	
	</table>

</center>
</form>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>

<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from plan where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:viewplan.php");
	exit;
	}
?>

 <?php
include("footer.php");
?>