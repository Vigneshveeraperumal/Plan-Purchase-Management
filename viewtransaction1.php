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

<h1 style="color:black;">My Transaction Details</h1>
<br>

<br>
	<table border="2" cellspacing="6" class="displaycontent"  width="1200" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    <th bgcolor=orange><font color=blue size=2>Purchase ID</font></th>
			<th bgcolor=orange><font color=blue size=2>Plan Name</font></th>
			<th bgcolor=orange><font color=blue size=2>Cost</font></th>
			<th bgcolor=orange><font color=blue size=2>No. of Months</font></th>
			<th bgcolor=orange><font color=blue size=2>User Name</font></th>
			<th bgcolor=orange><font color=blue size=2>User Mail</font></th>
			<th bgcolor=orange><font color=blue size=2>Total Cost</font></th>
			<th bgcolor=orange><font color=blue size=2>Purchase Date</font></th>
			<th bgcolor=orange><font color=blue size=2>Card Number</font></th>
			<th bgcolor=orange><font color=blue size=2>Reference Number</font></th>
			  
	</tr>
	
	<?php
	
	$query = "select * from purchase where umail= '".$_SESSION['umail']."'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       <td bgcolor=orange><b><font color=white size=2><?php echo $row['pid']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['pname']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['plan']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['month']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['uname']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['umail']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['tcost']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['dat']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['cnum']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['refno']; ?></font><b></td>
		
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