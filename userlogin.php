<?php
include("style.php");
include("config.php");
include("header.php");
?>

<body>


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
<form name="manager" method="post">

<h1 style="color:red" align="center">User Login Here!</h1>
<br>
<br>
<table align="center">
<tr><td style="color:white"><b>User Mail<b></td><td><input type="text" name="umail" required></td></tr>
<tr><td style="color:white"><b>Password<b></td><td><input type="password" name="pwd" required></td></tr>
<tr><td></td><td><input type="submit" name="submit" Value="Login" > <input type="reset" name="clear" Value="Clear" ></td></tr>
<tr><td></td><td><b><a href="index.php" style="color:white">Back</a><b></td></tr>
<tr><td colspan="2" align="center"><b><a href="register.php" style="color:white">Register? New User?</a><b></td></tr>
</table>

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
<br>
<br>
<?php
if(isset($_POST['submit']))
 {
	$query="select * from user where mail='".$_POST['umail']."' and pwd='".$_POST['pwd']."' ";
	$result = mysql_query($query);
	if(mysql_num_rows($result))
	 {
		$row= mysql_fetch_assoc($result);
		$_SESSION['umail']= $row['mail'];
		$_SESSION['uname']= $row['name'];
		echo '<script> alert("Login success"); window.location.href = "userhome.php" </script>';
	 }
	 else
	 {
	 	 	echo '<script> alert("Login Failed");</script>';
	 }
 }
?>


 <?php
include("footer.php");
?>