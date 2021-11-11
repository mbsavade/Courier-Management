<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Employee</title>
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

		<a href="index.html"><img src="pics/logo.gif" alt="Package" width="205" height="62" border="0" class="logo" title="Package" /></a>

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

		<li><a href="View_Employee.php" title="View Employee">View Employee</a></li>

		<li><a href="Remove_Employee.php" title="Remove Employee">Remove Employee</a></li>
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

		<form name = "PlaceOrder" action = "Add_Employee.php" method="post">
		<table>
		<tr>
		<td>
		<b>Employee's Name</b>
		</td>

		<td>
		<input type="text" name="Name" id="commentName" onkeyup="buttonact()"><label id="commentNamePrompt"></label>
		</td>
		</tr>
		<tr>

		<td>
		<b>Contact no.</b>
		</td>

		<td>
		<input type="text" name="Contactno" id="commentMobile" onkeyup="buttonact()"><label id="commentMobilePrompt"></label>
		</td>
		</tr>
		<tr>

		<td>
		<b>Employee's Address<b>
		</td>

		<td>
		<input type="text" name="Address1" maxlimit=50 >
		</td>
		</tr>
		<tr>
		
		<tr>
		<td colspan="2">
		<b>Branch<b> &nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<select name="Branch">
		<option value="Dhanori">Dhanori</option>
		<option value="Akurdi">Akurdi</option>
		<option value="Alandi">Alandi</option>
		<option value="Bhosari">Bhosari</option>
		<option value="Koregaon Park">Koregaon Park</option>
		<option value="Pune Camp">Pune Camp</option>
		</select>
		</td>
		</tr>
		
		<td>
		<b>Salary<b>
		</td>

		<td>
		<input type="text" name="Sal" maxlimit=6 >
		</td>
		</tr>
		<tr>
		<td colspan="2">
		<b>Job<b> &nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<select name="Job">
		<option value="Delivery Boy">Delivery Boy</option>
		<option value="Executive">Executive</option>
		<option value="Manager">Manager</option>
		<option value="Cashier">Cashier</option>
		</select>
		</td>
		</tr>
		
		<tr>
		<td>
		<b>Date of Joining<b>
		</td>

		<td>
		<input type="date" name="Date_of_Join">
		</td>
		</tr>
		
		<tr>
		<td>
		<b>Username<b>
		</td>

		<td>
		<input type="text" name="username">
		</td>
		</tr>
		
		<tr>
		<td>
		<b>Password<b>
		</td>

		<td>
		<input type="password" name="Password">
		</td>
		</tr>
		
		<tr>
		<td>
		<b>Email<b>
		</td>
		<td>
		<input type="mail" name="email">
		</td>
		
		<tr>
		<td colspan="2">
		<button type="submit" name = "save">Submit</button>
		</td>
		</tr>
		</table>
		</form>
		<?php include ("dbConfig.php");

		if (isset($_POST['save'])) {
	$Name = $_POST['Name'];
	$ContactNo = $_POST['Contactno'];
	$Address = $_POST['Address1'];
	$Salary = $_POST['Sal'];
	$Job = $_POST['Job'];
	$DOJ = $_POST['Date_of_Join'];
	$Branch = $_POST['Branch'];
	$Username = $_POST['username'];
	$Password = $_POST['Password'];
	$Email = $_POST['email'];

	$sql1 = "INSERT INTO users (username, password , email)
	VALUES('$Username','$Password','$Email')";
			mysqli_query($conn, $sql1);

			if (mysqli_affected_rows($conn) > 0)
			echo "<p>Data Added to users</p>";
			else
			echo "<p>Data not Added to users</p>";

			$sql2 = "INSERT INTO employee (emp_name, address, date_of_join, phone_no, salary_pm, job, branch_name)
			VALUES('$Name', '$Address', '$DOJ', '$ContactNo', '$Salary', '$Job', '$Branch')";
					mysqli_query($conn, $sql2);

					if (mysqli_affected_rows($conn) > 0)
					echo "<p>Data Added to employee</p>";
					else
					echo "<p>Data not Added to employee</p>";

				}
?>
		</div>
		
		<!--Our Company Left Part Ends -->

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