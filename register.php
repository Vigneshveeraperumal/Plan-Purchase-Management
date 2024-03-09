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

<h1 style="color:red" align="center">Register Here!</h1>
<br>
<br>
<table align="center">
<tr><td style="color:white"><b>User Name<b></td><td><input type="text" name="uname" placeholder="Enter Username" required></td></tr>
<tr><td style="color:white"><b>User Mail<b></td><td><input type="email" name="umail" placeholder="Enter Mail" required></td></tr>
<tr><td style="color:white"><b>Password<b></td><td><input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="pwd" placeholder="Enter Password" required></td></tr>
<tr><td style="color:white"><b>Confirm Password<b></td><td><input type="password" name="pwd1" placeholder="Re-Enter Password" required></td></tr>
<tr><td style="color:white"><b>Address<b></td><td><textarea type="text" name="address" rows="3" cols="23" placeholder="Enter Address" required></textarea></td></tr>
<tr><td style="color:white"><b>Mobile<b></td><td><input type="text" pattern=[0-9]{10} name="mobile" placeholder="Enter Mobile" required></td></tr>
<tr><td></td><td><input type="submit" name="submit" Value="Register" > <input type="reset" name="clear" Value="Clear" ></td></tr>
<tr><td></td><td><b><a href="userlogin.php" style="color:white">Back</a><b></td></tr>
</table>

</form>


<br>
<br>



<?php
if(isset($_POST['submit']))
{
$query1="select * from user where mail='".$_POST['umail']."'";
$check_result = mysql_query($query1);
if (mysql_num_rows($check_result) > 0) {
	echo '<script> alert("User Mail Already Exist, Try with different Mail ID"); </script>';
}
elseif ($_POST['pwd'] != $_POST['pwd1']) {
  echo '<script> alert("Password Mismatch"); </script>';
}
else
 {
	$query="insert into user values (null, '".$_POST['uname']."', '".$_POST['umail']."', '".$_POST['pwd']."', '".$_POST['address']."', '".$_POST['mobile']."')";
	if(mysql_query($query)){
		echo "registered Successfully";
	}
	else{
		echo 'NOT REGISTERED';
	}
	header("location:userlogin.php");
 }
}
?>

 <?php
include("footer.php");
?>