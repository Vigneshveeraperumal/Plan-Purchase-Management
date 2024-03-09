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

<form name="manager" method="post">

<h1 style="color:red" align="center">Add New Plans</h1>
<br>
<br>
<table align="center">
<tr><td style="color:white"><b>Plan Name<b></td><td><input type="text" name="name" value="" required></td></tr>
<tr><td style="color:white"><b>Cost<b></td><td><input type="text" name="cost" value="" required></td></tr>
<tr><td style="color:white"><b>Description<b></td><td><input type="text" name="dess" value="" required></td></tr>
<tr><td></td><td><input type="submit" name="submit" Value="ADD" > <input type="reset" name="clear" Value="Clear" ></td></tr>
<tr><td></td><td><b><a href="adminhome.php" style="color:red">Back</a><b></td></tr>
</table>

</form>

<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>

<?php
if(isset($_POST['submit']))
{
	
	$query="insert into plan values (null, '".$_POST['name']."', '".$_POST['cost']."', '".$_POST['dess']."')";
	if(mysql_query($query)){
		echo "registered Successfully";
	}
	else{
		echo 'NOT REGISTERED';
	}
	header("location:viewplan.php");
	}
?>


 <?php
include("footer.php");
?>