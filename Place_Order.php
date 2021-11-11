<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Place Order</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="a1.js">
</script>
<style>
.table1 {
	border-collapse: collapse;
	width: 70%;
	margin-left:200px;
}

.th1, .td1 {
	text-align: center;
	padding: 8px;
}

.tr1:nth-child(even) {background-color:
#f2f2f2}

	.th1 {
		background-color:
#4CAF50;
		color: white;}

	button[name=vieworder] {
		background-color:
#E25822;
		border: none;
		color: white;
		padding: 7px 10px;
		text-decoration: none;
		border-radius: 4px;

		cursor: pointer;}

	button[name=vieworder]:hover {
		background-color: orange;}

	button[type=submit] {
		background-color:
#4CAF50;
		border: none;
		color: white;
		padding: 7px 10px;
		text-decoration: none;
		border-radius: 4px;

		cursor: pointer;}

	button[type=submit]:hover {
		background-color:
#45a049;}

		</style>
		</head>

		<body onload="buttonact()">

		<!--Header Background Part Starts -->

		<div id="header-bg">

		<!--Header Content Part Starts -->

		<div id="header">

		<a href="index.html"><img src="images/logo.gif" alt="Package" width="205" height="62" border="0" class="logo" title="Package" /></a>

		<div>
		<h1> Courier Services And <br> Shipping</h1>
		</div>

		<br class="spacer" />
		</div>

		<!--Header Content Part Ends -->

		</div>

		<!--Header Background Part Ends -->

		<!--Navigation Background Part Starts -->

		<div id="navigation-bg">

		<!--Navigation Part Starts -->

		<div id="navigation">

		<ul class="mainMenu">
		<li><a href="index.html" title="Home">Home</a></li>
		<li><a href="about.html" title="About">About</a></li>
		<li><a href="services.html" title="Services">Services</a></li>
		<li><a href="support.html" title="Support">Support</a></li>
		
		<li ><a href="contact.html" title="Contact">Contact</a></li>
		<li class="noBg"><a href="index.html" title="LogOut">LogOut</a></li>
		</ul>


		<br class="spacer" />
		<ul class="subNav">

		<li><a href="Cancel_Order.php" title="Cancel Order">Cancel Order</a></li>
		<li><a href="ViewOrderHistory.php" title="Order History">Order History</a></li>

		</ul>

		<br class="spacer" />
		</div>

		<!--Navigation Part Ends -->
		</div>

		<!--Navigation Background Part Ends -->

		<!--Our Company Bacground Part Starts -->

		<div id="ourCompany-bg">

		<!--Our Company Part Starts -->

		<div id="ourCompany-part">

		<h2 class="ourCompany-hdr">Place Your Order</h2><br>
		<form name = "PlaceOrder" action = "Place_Order.php" method="post">
		<h3>Sender's Details</h3><br>
		<div>
		<table>
		<tr>
		<td>
		Name &nbsp:
		</td>

		<td>
		<input type="text" name="Name" id="commentName" onkeyup="buttonact()"><label id="commentNamePrompt"></label>
		</td>
		</tr>
		<tr>

		<td>
		Contact No &nbsp:
		</td>

		<td>
		<input type="text" name="Contactno" id="commentMobile" onkeyup="buttonact()"><label id="commentMobilePrompt"></label>
		</td>
		</tr>
		<tr>

		<td>
		Address &nbsp:
		</td>

		<td>
		<input type="text" name="Address1" maxlimit=50 >
		</td>
		</tr>
		<tr>

		<td>
		Address(optional) &nbsp:&nbsp
		</td>

		<td>
		<input type="text" name="Address2" maxlimit=50 >
		</td>
		</tr>
		<tr>

		<td>
		Pincode &nbsp:
		</td>

		<td>
		<input type="text" name="SPincode" id="spin" onkeyup="buttonact()"><label id="commentSPinPrompt"></label>
		</td>
		</tr>
		<tr>

		<td colspan="2">
		City &nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<select name="city1">
		<option value="Pune"> Pune</option>
		</select>
		</td>
		</tr>
		</table>
		</div>
		<br>
		<div>
		<h3>Receiver's Details</h3><br>
		<table>
		<tr>

		<td>
		Name &nbsp:
		</td>

		<td>
		<input type="text" name="Name1" id="commentName1" onkeyup="buttonact()"><label id="commentNamePrompt1"></label>
		</td>
		</tr>
		<tr>

		<td>
		Address &nbsp:
		</td>

		<td>
		<input type="text" name="Address3" maxlimit=50>
		</td>
		</tr>
		<tr>

		<td>
		Address(optional) &nbsp:
		</td>

		<td>
		<input type="text" name="Address4" maxlimit=50 >
		</td>
		</tr>
		<tr>

		<td>
		Pincode &nbsp:
		</td>

		<td>
		<input type="text" name="RPCode" id="rpin" onkeyup="buttonact()"><label id="commentRPinPrompt"></label>
		</td>
		</tr>
		<tr>

		<td colspan="2">
		City &nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<select name="city2">
		<option value="Pune"> Pune</option>
		</select>
		</td>
		</tr>
		</table>
		</div><br>
		<div>
		<h3>Package Details </h3><br>
		<table>
		<tr>
		<td colspan="2">
		Weight &nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<select name="Weight">
		<option value="10"> Less than 10</option>
		<option value="20"> Between 10 and 20</option>
		<option value="30"> Greater than 20 Less than 30</option>
		</select>
		</td>
		
		<tr>
		<td colspan="2"><br> <div> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<button type="submit" name = "save" id="Button">Submit</button>

		</td>
		</tr>
		</table></div></div>
		</form>

		<?php include ("dbConfig.php");

		if (isset($_POST['save'])) {
			$SenderName = $_POST['Name'];
			$ContactNo = $_POST['Contactno'];
			$SenderAddress1 = $_POST['Address1'];
			$SenderAddress2 = $_POST['Address2'];
			$SenderPincode = $_POST['SPincode'];
			$SenderCity = $_POST['city1'];
			$ReceiverName = $_POST['Name1'];
			$ReceiverAddress1 = $_POST['Address3'];
			$ReceiverAddress2 = $_POST['Address4'];
			$ReceiverPincode = $_POST['RPCode'];
			$ReceiverCity = $_POST['city2'];
			$WeightPkg = $_POST['Weight'];

			$sql1 = "INSERT INTO customer (cust_name, cust_contact,receiver_name)
			VALUES('$SenderName','$ContactNo','$ReceiverName')";
					mysqli_query($conn, $sql1);

					if (mysqli_affected_rows($conn) > 0)
					echo "<br><table class='table1'><tr class='tr1'><th class='th1'><h2>Your Order Has Been Placed !</h2></th></tr></table>";
					else
					echo "<br><table class='table1'><tr class='tr1'><th class='th1'><h2>Your Order Has Not Been Placed !</h2></th></tr></table>";

					$sql2 = "INSERT INTO package (cust_address1, cust_address2, cust_city, cust_pincode, weight, order_date, receiver_add1, receiver_add2, receiver_city, receiver_pincode, delivery_date)
					VALUES('$SenderAddress1', '$SenderAddress2', '$SenderCity', '$SenderPincode', '$WeightPkg', curdate(), '$ReceiverAddress1', '$ReceiverAddress2', '$ReceiverCity', '$ReceiverPincode', curdate() + 5)";
					mysqli_query($conn, $sql2);

					if (mysqli_affected_rows($conn) > 0)
					echo "<table class='table1'><tr class='tr1'><th class='th1'><h2>To View OR Cancel your Order go to, <a href='Cancel_Order.php'><button name='vieworder'>View Order</button></a></h2></th></tr></table>";
					else
					echo "<br><table class='table1'><tr class='tr1'><th class='th1'><h2>Data Not Added To Package</h2></th></tr></table>";

				}
				?>

				<br class="spacer" />
				</div>

				<!--Our Company Part Ends -->

				</div>

				<!--Our Company Bacground Part Ends -->

				</div>

				</body>
				</html>


