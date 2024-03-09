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
<br>
<br>

<h1 style="color:white" align="left">Welcome <?php echo $_SESSION['uname'] ?></h1>


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
<br>
<br>

 <?php
include("footer.php");
?>