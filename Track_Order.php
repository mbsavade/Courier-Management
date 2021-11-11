<!DOCTYPE html>
<html>
<head>
<link href="style1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Track Order</title>
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

.tr:nth-child(even) {background-color: #f2f2f2}

	.th {
		background-color: #4CAF50;
		color: white;}

	button[type=submit] {
		background-color: #4CAF50;
		border: none;
		color: white;
		padding: 7px 10px;
		text-decoration: none;
		border-radius: 4px;
		margin: 8px 0;
		cursor: pointer;}

	button[type=submit]:hover {
		background-color: #45a049;}

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
		<li><a href="contact.html" title="Contact">Contact</a></li>
		<li class="noBg"><a href="Track_Order.php" title="Track Order">Track Order</a></li>
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

		<!--Our Company Left Part Starts -->

		<div id="ourCompany-leftPart">
		<h2 class="ourCompany-hdr">Track Your Order </h2><br>
		
		<form name = "TrackOrder" action = "Track_Order.php" method="post">
		<table>
		<tr>
		<td>
		<b><h3>Track Order</h3></b>
		</td>
		</tr>
		<tr>
		<td colspan="2"><br>
		<label>Enter the Package ID&nbsp:&nbsp&nbsp</label>
		<input type="text" name="PkgID" >&nbsp&nbsp
		<button type="submit" name = "search">Search</button>
		</td>
		</tr>
		</table>
</form>

		</div>
		<?php include ("dbConfig.php");
		if (isset($_POST['search']))
		{	
			$PkgID = $_POST['PkgID'];
			$sql = "SELECT datediff(curdate(), order_date) as diff, receiver_add1, receiver_add2, delivery_date FROM package where PCK_ID = '$PkgID'";
			$records =mysqli_query($conn, $sql);
			echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			if(mysqli_num_rows($records)>0) {
				while(($row=mysqli_fetch_array($records))>0){
					if($row['diff'] == 0)
						echo "Order placed Today.<br> Package is being prepared today for shipping.";
					if($row['diff'] == 1)
						echo "Package will be dispatched.";
					if($row['diff'] == 2)
						echo "Package was dispatched and is on its route to the Destination office.";
					if($row['diff'] == 3)
						echo "Package will be recieved at Destination Office today.";
					if($row['diff'] == 4)
						echo "Package recieved at Destination Office and is being sorted.";
					if($row['diff'] == 5)
						echo "Package will be Deliverd at ".$row['receiver_add1']." ".$row['receiver_add2']."today";
					if($row['diff'] > 5)
						echo "Package was Deliverd at ".$row['receiver_add1']." ".$row['receiver_add2']." on ".$row['delivery_date'];
				}
			}
			else
			{	echo"NO RECORDS FOUND";
			}
		}
		?>
		<!--Our Company Left Part Ends -->

		<!--Our Company Right Part Starts -->

		<!--Our Company Right Part Ends -->

		<br class="spacer" />
		</div>

		<!--Our Company Part Ends -->

		</div>

		<!--Our Company Bacground Part Ends -->

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

		</body>
		</html>

		<br class="spacer" />
		</div>

		<!--Our Company Left Part Ends -->

		<!--Our Company Right Part Starts -->

		<!--Our Company Right Part Ends -->
		
		<!--Our Company Part Ends -->

		</div>

		<!--Our Company Bacground Part Ends -->

		</div>
		
		

		</body>
		</html>
