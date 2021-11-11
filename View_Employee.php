<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> View Employee List</title>
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

		<li><a href="Add_Employee.php" title="Add Employee">Add Employee</a></li>

		<li><a href="Remove_Employee.php" title="Remove Employee">Remove Employee</a></li>
		</ul>
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
		<h2 class="ourCompany-hdr">View the Employee List</h2><br>

		<form name = "ViewEmployee" action = "View_Employee.php" method="post">
		<table>
		<tr>
		<td>
		<button type="submit" name = "View">View Employee List</button>
		</td>
		</tr>
		</table>
		</form>
		
<?php include ("dbConfig.php");

		if (isset($_POST['View']))
		{
			$sql3 = "SELECT * FROM Employee";
			$records=mysqli_query($conn, $sql3);
			echo"<br><br><br>";
			if(mysqli_num_rows($records)>0)
			{	echo"<table border='1'>";
				echo"<tr>";
				echo"<th>Employee ID</th>";
				echo"<th>Employee Name</th>";
				echo"<th>Employee Contact No.</th>";
				echo"<th>Address</th>";
				echo"<th>Designation</th>";
				echo"<th>Monthly Salary</th>";
				echo"<th>Date of Joining</th>";
				echo"</tr>";
				while(($row=mysqli_fetch_array($records))>0)
				{	echo "<tr>";
					echo"<td>".$row['EMP_ID']."</td>";
					echo"<td>".$row['emp_name']."</td>";
					echo"<td>".$row['phone_no']."</td>";
					echo"<td>".$row['address']."</td>";
					echo"<td>".$row['job']."</td>";
					echo"<td>".$row['salary_pm']."</td>";
					echo"<td>".$row['date_of_join']."</td>";
					echo "<tr>";
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