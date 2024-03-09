<?php 
include("userheader.php");
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


<h2 style="color:red;">Subscribe Plan </h2>
<br>
<br>
	<table >
<tr>
		<td class="col"><font color=white size=2>Plan ID:</font></td>
		<td><input type="text" name="id" value="<?php echo $row['id']; ?>" class="textbox" readonly /></td>
	</tr>

	<tr>
		<td class="col"><font color=white size=2>Plan Name:</font></td>
		<td><input type="text" name="name" value="<?php echo $row['name']; ?>" class="textbox" readonly/></td>
	</tr>
	<tr>
		<td class="col"><font color=white size=2>Cost:</font></td>
		<td><input type="text" name="plan" id="plan" value="<?php echo $row['cost']; ?>" class="textbox"  readonly/></td>
	</tr>
	<tr>
		<td class="col"><font color=white size=2>No. of Months:</font></td>
		<td><input type="text" name="month" id="month" class="textbox" placeholder="Enter no.of Month" required onkeyup="calculateTotalCost()"/></td>
    </tr>
	<tr>
		<td class="col"><font color=white size=2>User Name:</font></td>
		<td><input type="text" name="uname" value="<?php echo $_SESSION['uname']; ?>" class="textbox" readonly /></td>
	</tr>
	<tr>
		<td class="col"><font color=white size=2>User Mail:</font></td>
		<td><input type="text" name="umail" value="<?php echo $_SESSION['umail']; ?>" class="textbox" readonly /></td>
	</tr>
	<tr>
		<td class="col"><font color=white size=2>Total Cost:</font></td>
		<td><input type="text" name="tcost" id="tcost" value="" class="textbox" placeholder="Total Cost" readonly /></td>
	</tr>
	<tr>
		<td class="col"><font color=white size=2>Card Number:</font></td>
		<td><input type="text" name="cnum" pattern=[0-9]{12} placeholder="Enter Card Number" value="" class="textbox" required /></td>
	</tr>
		<tr>
		<td class="col"><font color=white size=2>Enter CVV:</font></td>
		<td><input type="text" name="cvv" pattern=[0-9]{3} placeholder="Enter CVV" value="" class="textbox" required /></td>
	</tr>
		<tr>
		<td class="col"><font color=white size=2>Expiry Date:</font></td>
		<td><input type="text" name="exdat" pattern="[0-9]{2}/[0-9]{2}" placeholder="Expiry Date" value="" class="textbox" required /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Purchase" />
		    
		</td>
	</tr>

<script type="text/javascript">
function calculateTotalCost() {
    var costPerMonthString = document.getElementById("plan").value;
    // Remove dollar sign and whitespace from the string
    var costPerMonth = parseFloat(costPerMonthString.replace(/\$|\s/g, ''));
    var numberOfMonths = document.getElementById("month").value;
    var totalCost = costPerMonth * numberOfMonths;
    document.getElementById("tcost").value = totalCost;
}
</script>
		
	
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
	 $refno_prefix = "ref";
    $refno_numeric = rand(0, 9999999999); 
    $refno = $refno_prefix . str_pad($refno_numeric, 10, '0', STR_PAD_LEFT);

    $query = "INSERT INTO purchase VALUES (null, '".$_POST['name']."', '".$_POST['plan']."', '".$_POST['month']."', '".$_POST['umail']."', '".$_POST['uname']."', '".$_POST['tcost']."', CURDATE(), '".$_POST['cnum']."','$refno')";
    if(mysql_query($query)){
        echo 'Purchase Successful';
    } else {
        echo 'Purchase Failed';
    }
	echo '<script> alert("Purchase successfull"); window.location.href = "viewtransaction1.php" </script>';
    exit;
}
?>


<?php
include('footer.php');
?>
 