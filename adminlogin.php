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

<h1 style="color:red" align="center">Admin Login Here!</h1>
<br>
<br>
<table align="center">
<tr><td style="color:white"><b>User Name<b></td><td><input type="text" name="uname" required></td></tr>
<tr><td style="color:white"><b>Password<b></td><td><input type="password" name="pwd" required></td></tr>
<tr><td></td><td><input type="submit" name="submit" Value="Login" > <input type="reset" name="clear" Value="Clear" ></td></tr>
<tr><td></td><td><b><a href="index.php" style="color:white">Back</a><b></td></tr>
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

<?php
if(isset($_POST['submit']))
 {
if($_POST['uname'] == 'admin' && $_POST['pwd'] == 'admin' )
 {
	$_SESSION['admin']= "admin";
		echo '<script> alert("Login success"); window.location.href = "adminhome.php" </script>';
	 }
	 else
	 {
	 	 	echo '<script> alert("Login Failed");</script>';
	 }
 }
?>
<br>

 <?php
include("footer.php");
?>