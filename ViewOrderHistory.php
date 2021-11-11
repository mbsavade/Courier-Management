<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> View Order History</title>
<link href="style2.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="a1.js">
</script>
<style>

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
		
		<li ><a href="contact.html" title="Contact">Contact</a></li>
		<li class="noBg"><a href="index.html" title="LogOut">LogOut</a></li>
		</ul>

		<br class="spacer" />
		<ul class="subNav">
		<li class="noBg"><a href="Place_Order.php" title="Place Order">Place Order</a></li>
		<li><a href="Cancel_Order.php" title="Cancel Order">Cancel Order</a></li>

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
		<h2 class="ourCompany-hdr">View the Order History </h2><br>

		<form name = "ViewOrder" action = "ViewOrderHistory.php" method="post">
		<table>
		<tr>
		<td>
		<b><h3>View Order</h3></b>
		</td>
		</tr>
		<tr>
		<td colspan="2"><br>
		<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter the Customer Name &nbsp:&nbsp&nbsp</label>
		<input type="text" name="Name" id="commentName" onkeyup="buttonact()">&nbsp&nbsp
		<button type="submit" name = "search">Search</button><label id="commentNamePrompt"></label>
		</td>
		</tr>
		</table>

		<?php include ("dbConfig.php");

		if (isset($_POST['search']))
		{
			$SenderName = $_POST['Name'];
			$sql2="INSERT INTO orderhistory 
			SELECT customer.PCK_ID,customer.cust_name,customer.cust_contact,customer.receiver_name,package.order_date,package.delivery_date,package.weight,'delivered' FROM customer ,package WHERE customer.cust_name='$SenderName' and customer.PCK_ID=package.PCK_ID and package.delivery_date<='currdate()';";
			$records=mysqli_query($conn, $sql2);
			$sql1 = "DELETE customer.*,package.* FROM customer ,package  WHERE customer.PCK_ID='$SenderName' and customer.PCK_ID=package.PCK_ID and package.delivery_date<='currdate()';";
			$records=mysqli_query($conn, $sql1);

			$sql3 = "SELECT * FROM orderhistory WHERE cust_name='$SenderName'";
			$records=mysqli_query($conn, $sql3);
			echo"<br><br>";
			if(mysqli_num_rows($records)>0)
			{	echo"<h3>Details of Customer &nbsp : </h3><br>";
				echo"<table class='table' border='0'>";
				echo"<tr class='tr'>";
				echo"<th class='th'>Package ID</th>";
				echo"<th class='th'>Customer Name</th>";
				echo"<th class='th'>Customer Contact No.</th>";
				echo"<th class='th'>Receiver Name</th>";
				echo"<th class='th'>Order Date</th>";
				echo"<th class='th'>Delivery Date</th>";
				echo"<th class='th'>Weight</th>";
				echo"<th class='th'>Status</th>";
				echo"</tr>";
				while(($row=mysqli_fetch_array($records))>0)
				{	echo "<tr class='tr'>";
					echo"<td class='td'>".$row['PCK_ID']."</td>";
					echo"<td class='td'>".$row['cust_name']."</td>";
					echo"<td class='td'>".$row['cust_contact']."</td>";
					echo"<td class='td'>".$row['receiver_name']."</td>";
					echo"<td class='td'>".$row['order_date']."</td>";
					echo"<td class='td'>".$row['delivery_date']."</td>";
					echo"<td class='td'>".$row['weight']."</td>";
					echo"<td class='td'>".$row['status']."</td>";
					echo "</tr>";
				}
				echo"</table>";
			}
			else
			{	echo"NO RECORDS FOUND";
			}

		}

		?>
		</div>

		<!--Footer Part Starts -->

		<div id="footer-bg">

		<!--Footer Menu Part Starts -->

		<div id="footer-menu">

		<ul class="footMenu">
		<li class="noDivider"><a href="index.html" title="Home">Home</a></li>
		<li><a href="about.html" title="About">About</a></li>
		<li><a href="services.html" title="Services">Services</a></li>
		<li><a href="support.html" title="Support">Support</a></li>
		<li><a href="contact.html" title="Contact">Contact</a></li>
		</ul>

		<br class="spacer" />

		</div>
		<!--Footer Menu Part Ends -->
		</div>

		<!--Footer Part Ends -->

		<br class="spacer" />
		</div>

		<!--Our Company Part Ends -->

		</div>

		<!--Our Company Bacground Part Ends -->

		</div>
		</body>
		</html>


