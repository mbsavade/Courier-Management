<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Package Statistics</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="a1.js">
</script>
<style>

.table1 {
	border-collapse: collapse;
	width: 35%;
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

	.table {
		border-collapse: collapse;
		width: 100%;
	}

	.th, .td {
		text-align: center;
		padding: 8px;
	}

	.tr:nth-child(even) {background-color:
#f2f2f2}

		.th {
			background-color:
#4CAF50;
			color: white;}

		button[type=submit] {
			background-color:
#4CAF50;
			border: none;
			color: white;
			padding: 7px 10px;
			text-decoration: none;
			border-radius: 4px;
			margin: 8px 0;
			cursor: pointer;}

		button[type=submit]:hover {
			background-color:
#45a049;}

			</style>
			</head>

			<body>

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
			<li class="noBg"><a href="contact.html" title="Contact">Contact</a></li>
			</ul>

			<br class="spacer" />
			<ul class="subNav">
			<<li class="noBg"><a href="Place_Order.php" title="Place Order">Place Order</a></li>

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
			<h2 class="ourCompany-hdr">Package Stats </h2><br>

			<form name = "SentFrom" action = "Package_Stats.php" method="post">
			<table>
			<tr>
			<td>
			<b>Packages Sent from Pincode</b>
			</td>
			</tr>
			<tr>
			<td colspan="2">
			<input type="text" name="Spin"><br><br>
			<button type="submit" name = "searchspin">Search</button>

			</td>
			</tr>
			</table>
			</form>

			<br>
			<form name = "ReceivedAt" action = "Package_Stats.php" method="post">
			<table>
			<tr>
			<td>
			<b>Packages Deliverd at Pincode</b>
			</td>
			</tr>
			<tr>
			<td colspan="2">
			<input type="text" name="Rpin"><br><br>
			<button type="submit" name ="searchrpin">Search</button>
			</td>
			</tr>
			</table>
			</form>
			
			<br>
			<form name = "DeliverdOn" action = "Package_Stats.php" method="post">
			<table>
			<tr>
			<td>
			<b>Packages Deliverd On</b>
			</td>
			</tr>
			<tr>
			<td colspan="2">
			<input type="date" name="del_date"><br><br>
			<button type="submit" name ="searchdel_date">Search</button>
			</td>
			</tr>
			</table>
			</form>
			
			<br>
			<form name = "DeliverdBet" action = "Package_Stats.php" method="post">
			<table>
			<tr>
			<td>
			<b>Packages Deliverd Between</b>
			</td>
			</tr>
			<tr>
			<td colspan="2">
			<input type="date" name="del_date1"><br><br>
			<input type="date" name="del_date2"><br><br>
			<button type="submit" name ="searchdel_datebet">Search</button>
			</td>
			</tr>
			</table>
			</form>
			<div id="ourCompany-bg">
			<?php include ("dbConfig.php");

			if (isset($_POST['searchspin']))
			{
				$SenderPin = $_POST['Spin'];
				$sql1 = "SELECT * from package, customer WHERE cus_pin='$SenderPin' and package.PCK_ID = customer.PCK_ID";
				$records=mysqli_query($conn, $sql1);

				if(mysqli_num_rows($records)>0)
				{	echo"<h2>Details of Package &nbsp : </h2><br>";
					echo"<table align='left' class='table' border='0'>";
					echo"<tr class='tr'>";
					echo"<th class='th'>Package ID</th>";
					echo"<th class='th'>Customer's Name</th>";
					echo"<th class='th'>Customer's Address</th>";
					echo"<th class='th'>Customer's Pincode</th>";
					echo"<th class='th'>Receiver's Name</th>";
					echo"<th class='th'>Receiver's Address</th>";
					echo"<th class='th'>Receiver's Pincode</th>";
					echo"<th class='th'>Order Date</th>";
					echo"<th class='th'>Delivery Date</th>";
					echo"<th class='th'>Weight</th>";
					echo"</tr>";
					while(($row=mysqli_fetch_array($records))>0)
					{	echo "<tr class='tr'>";
						echo"<td class='td'>".$row['PCK_ID']."</td>";
						echo"<td class='td'>".$row['cust_name']."</td>";
						echo"<td class='td'>".$row['cus_ad1']."</td>";
						echo"<td class='td'>".$row['cus_pin']."</td>";
						echo"<td class='td'>".$row['receiver_name']."</td>";
						echo"<td class='td'>".$row['recver_add1']."</td>";
						echo"<td class='td'>".$row['recver_pin']."</td>";
						echo"<td class='td'>".$row['order_date']."</td>";
						echo"<td class='td'>".$row['delivery_date']."</td>";
						echo"<td class='td'>".$row['weight']."</td>";
						echo "</tr>";
					}
					echo"</table>";
				}
				else
				{	echo"<br><br><table class='table1'><tr class='tr1'><th class='th1'><h2>NO RECORDS FOUND</h2></th></tr></table>";
				}

			}
			if (isset($_POST['searchrpin']))
			{
				$ReceiverPin = $_POST['Rpin'];
				$sql1 = "SELECT * from package, customer WHERE recver_pin='$ReceiverPin' and package.PCK_ID = customer.PCK_ID";
				$records=mysqli_query($conn, $sql1);

				if(mysqli_num_rows($records)>0)
				{	echo"<h2>Details of Package &nbsp : </h2><br>";
					echo"<table align='left' class='table' border='0'>";
					echo"<tr class='tr'>";
					echo"<th class='th'>Package ID</th>";
					echo"<th class='th'>Customer's Name</th>";
					echo"<th class='th'>Customer's Address</th>";
					echo"<th class='th'>Customer's Pincode</th>";
					echo"<th class='th'>Receiver's Name</th>";
					echo"<th class='th'>Receiver's Address</th>";
					echo"<th class='th'>Receiver's Pincode</th>";
					echo"<th class='th'>Order Date</th>";
					echo"<th class='th'>Delivery Date</th>";
					echo"<th class='th'>Weight</th>";
					echo"</tr>";
					while(($row=mysqli_fetch_array($records))>0)
					{	echo "<tr class='tr'>";
						echo"<td class='td'>".$row['PCK_ID']."</td>";
						echo"<td class='td'>".$row['cust_name']."</td>";
						echo"<td class='td'>".$row['cus_ad1']."</td>";
						echo"<td class='td'>".$row['cus_pin']."</td>";
						echo"<td class='td'>".$row['receiver_name']."</td>";
						echo"<td class='td'>".$row['recver_add1']."</td>";
						echo"<td class='td'>".$row['recver_pin']."</td>";
						echo"<td class='td'>".$row['order_date']."</td>";
						echo"<td class='td'>".$row['delivery_date']."</td>";
						echo"<td class='td'>".$row['weight']."</td>";
						echo "</tr>";
					}
					echo"</table>";
				}
				else
				{	echo"<br><br><table class='table1'><tr class='tr1'><th class='th1'><h2>NO RECORDS FOUND</h2></th></tr></table>";
				}
			}
			if (isset($_POST['searchdel_date']))
			{
				$Del_date = $_POST['del_date'];
				$sql1 = "SELECT * from package, customer WHERE delivery_date=DATE_FORMAT('$Del_date', '%Y-%m-%d') and package.PCK_ID = customer.PCK_ID";
				$records=mysqli_query($conn, $sql1);

				if(mysqli_num_rows($records)>0)
				{	echo"<h2>Details of Package &nbsp : </h2><br>";
					echo"<table align='left' class='table' border='0'>";
					echo"<tr class='tr'>";
					echo"<th class='th'>Package ID</th>";
					echo"<th class='th'>Customer's Name</th>";
					echo"<th class='th'>Customer's Address</th>";
					echo"<th class='th'>Customer's Pincode</th>";
					echo"<th class='th'>Receiver's Name</th>";
					echo"<th class='th'>Receiver's Address</th>";
					echo"<th class='th'>Receiver's Pincode</th>";
					echo"<th class='th'>Order Date</th>";
					echo"<th class='th'>Delivery Date</th>";
					echo"<th class='th'>Weight</th>";
					echo"</tr>";
					while(($row=mysqli_fetch_array($records))>0)
					{	echo "<tr class='tr'>";
						echo"<td class='td'>".$row['PCK_ID']."</td>";
						echo"<td class='td'>".$row['cust_name']."</td>";
						echo"<td class='td'>".$row['cus_ad1']."</td>";
						echo"<td class='td'>".$row['cus_pin']."</td>";
						echo"<td class='td'>".$row['receiver_name']."</td>";
						echo"<td class='td'>".$row['recver_add1']."</td>";
						echo"<td class='td'>".$row['recver_pin']."</td>";
						echo"<td class='td'>".$row['order_date']."</td>";
						echo"<td class='td'>".$row['delivery_date']."</td>";
						echo"<td class='td'>".$row['weight']."</td>";
						echo "</tr>";
					}
					echo"</table>";
				}
				else
				{	echo"<br><br><table class='table1'><tr class='tr1'><th class='th1'><h2>NO RECORDS FOUND</h2></th></tr></table>";
				}
			}
			if (isset($_POST['searchdel_datebet']))
			{
				$Del_date1 = $_POST['del_date1'];
				$Del_date2 = $_POST['del_date2'];
				$sql1 = "SELECT * from package, customer WHERE delivery_date between DATE_FORMAT('$Del_date1', '%Y-%m-%d') and DATE_FORMAT('$Del_date2', '%Y-%m-%d') and package.PCK_ID = customer.PCK_ID";
				$records=mysqli_query($conn, $sql1);

				if(mysqli_num_rows($records)>0)
				{	echo"<h2>Details of Package &nbsp : </h2><br>";
					echo"<table align='left' class='table' border='0'>";
					echo"<tr class='tr'>";
					echo"<th class='th'>Package ID</th>";
					echo"<th class='th'>Customer's Name</th>";
					echo"<th class='th'>Customer's Address</th>";
					echo"<th class='th'>Customer's Pincode</th>";
					echo"<th class='th'>Receiver's Name</th>";
					echo"<th class='th'>Receiver's Address</th>";
					echo"<th class='th'>Receiver's Pincode</th>";
					echo"<th class='th'>Order Date</th>";
					echo"<th class='th'>Delivery Date</th>";
					echo"<th class='th'>Weight</th>";
					echo"</tr>";
					while(($row=mysqli_fetch_array($records))>0)
					{	echo "<tr class='tr'>";
						echo"<td class='td'>".$row['PCK_ID']."</td>";
						echo"<td class='td'>".$row['cust_name']."</td>";
						echo"<td class='td'>".$row['cus_ad1']."</td>";
						echo"<td class='td'>".$row['cus_pin']."</td>";
						echo"<td class='td'>".$row['receiver_name']."</td>";
						echo"<td class='td'>".$row['recver_add1']."</td>";
						echo"<td class='td'>".$row['recver_pin']."</td>";
						echo"<td class='td'>".$row['order_date']."</td>";
						echo"<td class='td'>".$row['delivery_date']."</td>";
						echo"<td class='td'>".$row['weight']."</td>";
						echo "</tr>";
					}
					echo"</table>";
				}
				else
				{	echo"<br><br><table class='table1'><tr class='tr1'><th class='th1'><h2>NO RECORDS FOUND</h2></th></tr></table>";
				}
			}
			?>
			</div>
			<br class="spacer" />
			</div>

			<!--Our Company Part Ends -->

			</div>

			<!--Our Company Bacground Part Ends -->

			</div>

			</body>
			</html>


