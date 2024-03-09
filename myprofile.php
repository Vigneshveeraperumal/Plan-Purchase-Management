<?php
include("style.php");
include("config.php");
include("userheader.php");
?>

<body>
<?php
if($_SESSION['uname']){

 }
else{
header("Location: userlogin.php");
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

<h1 style="color:black;">My Details</h1>
<br>

<br>
	<table border="2" cellspacing="6" class="displaycontent"  width="1200" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    <th bgcolor=orange><font color=blue size=2>User ID</font></th>
			<th bgcolor=orange><font color=blue size=2>Name</font></th>
			<th bgcolor=orange><font color=blue size=2>Mobile</font></th>
			<th bgcolor=orange><font color=blue size=2>Mail</font></th>
			<th bgcolor=orange><font color=blue size=2>Address</font></th>
	</tr>
	
	<?php
	
	$query = "select * from user where mail= '".$_SESSION['umail']."'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       <td bgcolor=orange><b><font color=white size=2><?php echo $row['id']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['name']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['mobile']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['mail']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['address']; ?></font><b></td>
		
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
include("footer.php");
?>