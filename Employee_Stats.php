<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employee Statistics</title>
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
			<h2 class="ourCompany-hdr">Employee Statistics </h2><br>

			<form name = "WorkingAt" action = "Employee_Stats.php" method="post">
			<table>
			<tr>
			<td>
			<b>Employees Working at Branch</b>
			</td>
			</tr>
			<tr>
			<td colspan="2">
			<input type="text" name="Branch"><br><br>
			<button type="submit" name = "searchbranch">Search</button>
			</td>
			</tr>
			</table>
			</form>

			<br>
			<form name = "JobIs" action = "Employee_Stats.php" method="post">
			<table>
			<tr>
			<td>
			<b>Employees with Jobs</b>
			</td>
			</tr>
			<tr>
			<td colspan="2">
			<input type="text" name="Job"><br><br>
			<button type="submit" name ="searchjob">Search</button>
			</td>
			</tr>
			</table>
			</form>
			
			<br>
			<form name = "SalIs" action = "Employee_Stats.php" method="post">
			<table>
			<tr>
			<td>
			<b>Employees with Salary greater than</b>
			</td>
			</tr>
			<tr>
			<td colspan="2">
			<input type="text" name="sal"><br><br>
			<button type="submit" name ="searchsal">Search</button>
			</td>
			</tr>
			</table>
			</form>
			
			<br>
			<form name = "JoinedAfter" action = "Employee_Stats.php" method="post">
			<table>
			<tr>
			<td>
			<b>Employees who Joined after</b>
			</td>
			</tr>
			<tr>
			<td colspan="2">
			<input type="date" name="join_date"><br><br>
			<button type="submit" name ="searchjoin_date">Search</button>
			</td>
			</tr>
			</table>
			</form>
			
			<br>
			<form name = "JoinedBet" action = "Employee_Stats.php" method="post">
			<table>
			<tr>
			<td>
			<b>Employees who joined between</b>
			</td>
			</tr>
			<tr>
			<td colspan="2">
			<input type="date" name="join_date1"><br><br>
			<input type="date" name="join_date2"><br><br>
			<button type="submit" name ="searchjoin_datebet">Search</button>
			</td>
			</tr>
			</table>
			</form>
			<div id="ourCompany-bg">
			<?php include ("dbConfig.php");

			if (isset($_POST['searchbranch']))
			{
				$BranchName = $_POST['Branch'];
				$sql1 = "SELECT * from employee WHERE branch_name='$BranchName'";
				$records=mysqli_query($conn, $sql1);

				if(mysqli_num_rows($records)>0)
				{	echo"<h2>Details of Employee &nbsp : </h2><br>";
					echo"<table align='left' class='table' border='0'>";
					echo"<tr class='tr'>";
					echo"<th class='th'>Employee ID</th>";
					echo"<th class='th'>Employee's Name</th>";
					echo"<th class='th'>Employee's Address</th>";
					echo"<th class='th'>Employee's Phone No.</th>";
					echo"<th class='th'>Employee's Branch</th>";
					echo"<th class='th'>Employee's Salary</th>";
					echo"<th class='th'>Employee's Job</th>";
					echo"<th class='th'>Joining Date</th>";
					echo"</tr>";
					while(($row=mysqli_fetch_array($records))>0)
					{	echo "<tr class='tr'>";
						echo"<td class='td'>".$row['EMP_ID']."</td>";
						echo"<td class='td'>".$row['emp_name']."</td>";
						echo"<td class='td'>".$row['address']."</td>";
						echo"<td class='td'>".$row['phone_no']."</td>";
						echo"<td class='td'>".$row['branch_name']."</td>";
						echo"<td class='td'>".$row['salary_pm']."</td>";
						echo"<td class='td'>".$row['job']."</td>";
						echo"<td class='td'>".$row['date_of_join']."</td>";
						echo "</tr>";
					}
					echo"</table>";
				}
				else
				{	echo"<br><br><table class='table1'><tr class='tr1'><th class='th1'><h2>NO RECORDS FOUND</h2></th></tr></table>";
				}
			}
			
			if (isset($_POST['searchjob']))
			{
				$Job = $_POST['Job'];
				$sql2 = "SELECT * from employee WHERE job='$Job'";
				$records=mysqli_query($conn, $sql2);

				if(mysqli_num_rows($records)>0)
				{	echo"<h2>Details of Employee &nbsp : </h2><br>";
					echo"<table align='left' class='table' border='0'>";
					echo"<tr class='tr'>";
					echo"<th class='th'>Employee ID</th>";
					echo"<th class='th'>Employee's Name</th>";
					echo"<th class='th'>Employee's Address</th>";
					echo"<th class='th'>Employee's Phone No.</th>";
					echo"<th class='th'>Employee's Branch</th>";
					echo"<th class='th'>Employee's Salary</th>";
					echo"<th class='th'>Employee's Job</th>";
					echo"<th class='th'>Joining Date</th>";
					echo"</tr>";
					while(($row=mysqli_fetch_array($records))>0)
					{	echo "<tr class='tr'>";
						echo"<td class='td'>".$row['EMP_ID']."</td>";
						echo"<td class='td'>".$row['emp_name']."</td>";
						echo"<td class='td'>".$row['address']."</td>";
						echo"<td class='td'>".$row['phone_no']."</td>";
						echo"<td class='td'>".$row['branch_name']."</td>";
						echo"<td class='td'>".$row['salary_pm']."</td>";
						echo"<td class='td'>".$row['job']."</td>";
						echo"<td class='td'>".$row['date_of_join']."</td>";
						echo "</tr>";
					}
					echo"</table>";
				}
				else
				{	echo"<br><br><table class='table1'><tr class='tr1'><th class='th1'><h2>NO RECORDS FOUND</h2></th></tr></table>";
				}
			}
			
			if (isset($_POST['searchsal']))
			{
				$Salary = $_POST['sal'];
				$sql3 = "SELECT * from employee WHERE salary_pm > '$Salary'";
				$records=mysqli_query($conn, $sql3);

				if(mysqli_num_rows($records)>0)
				{	echo"<h2>Details of Employee &nbsp : </h2><br>";
					echo"<table align='left' class='table' border='0'>";
					echo"<tr class='tr'>";
					echo"<th class='th'>Employee ID</th>";
					echo"<th class='th'>Employee's Name</th>";
					echo"<th class='th'>Employee's Address</th>";
					echo"<th class='th'>Employee's Phone No.</th>";
					echo"<th class='th'>Employee's Branch</th>";
					echo"<th class='th'>Employee's Salary</th>";
					echo"<th class='th'>Employee's Job</th>";
					echo"<th class='th'>Joining Date</th>";
					echo"</tr>";
					while(($row=mysqli_fetch_array($records))>0)
					{	echo "<tr class='tr'>";
						echo"<td class='td'>".$row['EMP_ID']."</td>";
						echo"<td class='td'>".$row['emp_name']."</td>";
						echo"<td class='td'>".$row['address']."</td>";
						echo"<td class='td'>".$row['phone_no']."</td>";
						echo"<td class='td'>".$row['branch_name']."</td>";
						echo"<td class='td'>".$row['salary_pm']."</td>";
						echo"<td class='td'>".$row['job']."</td>";
						echo"<td class='td'>".$row['date_of_join']."</td>";
						echo "</tr>";
					}
					echo"</table>";
				}
				else
				{	echo"<br><br><table class='table1'><tr class='tr1'><th class='th1'><h2>NO RECORDS FOUND</h2></th></tr></table>";
				}
			}
			
			if (isset($_POST['searchjoin_date']))
			{
				$Join_Date = $_POST['join_date'];
				$sql4 = "SELECT * from employee WHERE date_of_join >= DATE_FORMAT('$Join_Date', '%Y-%m-%d')";
				$records=mysqli_query($conn, $sql4);

				if(mysqli_num_rows($records)>0)
				{	echo"<h2>Details of Employee &nbsp : </h2><br>";
					echo"<table align='left' class='table' border='0'>";
					echo"<tr class='tr'>";
					echo"<th class='th'>Employee ID</th>";
					echo"<th class='th'>Employee's Name</th>";
					echo"<th class='th'>Employee's Address</th>";
					echo"<th class='th'>Employee's Phone No.</th>";
					echo"<th class='th'>Employee's Branch</th>";
					echo"<th class='th'>Employee's Salary</th>";
					echo"<th class='th'>Employee's Job</th>";
					echo"<th class='th'>Joining Date</th>";
					echo"</tr>";
					while(($row=mysqli_fetch_array($records))>0)
					{	echo "<tr class='tr'>";
						echo"<td class='td'>".$row['EMP_ID']."</td>";
						echo"<td class='td'>".$row['emp_name']."</td>";
						echo"<td class='td'>".$row['address']."</td>";
						echo"<td class='td'>".$row['phone_no']."</td>";
						echo"<td class='td'>".$row['branch_name']."</td>";
						echo"<td class='td'>".$row['salary_pm']."</td>";
						echo"<td class='td'>".$row['job']."</td>";
						echo"<td class='td'>".$row['date_of_join']."</td>";
						echo "</tr>";
					}
					echo"</table>";
				}
				else
				{	echo"<br><br><table class='table1'><tr class='tr1'><th class='th1'><h2>NO RECORDS FOUND</h2></th></tr></table>";
				}
			}
			
			if (isset($_POST['searchjoin_datebet']))
			{
				$Join_Date1 = $_POST['join_date1'];
				$Join_Date2 = $_POST['join_date2'];
				$sql5 = "SELECT * from employee WHERE (date_of_join between DATE_FORMAT('$Join_Date1', '%Y-%m-%d') and DATE_FORMAT('$Join_Date2', '%Y-%m-%d'))
				or (date_of_join between DATE_FORMAT('$Join_Date2', '%Y-%m-%d') and DATE_FORMAT('$Join_Date1', '%Y-%m-%d'))";
				$records=mysqli_query($conn, $sql5);

				if(mysqli_num_rows($records)>0)
				{	echo"<h2>Details of Employee &nbsp : </h2><br>";
					echo"<table align='left' class='table' border='0'>";
					echo"<tr class='tr'>";
					echo"<th class='th'>Employee ID</th>";
					echo"<th class='th'>Employee's Name</th>";
					echo"<th class='th'>Employee's Address</th>";
					echo"<th class='th'>Employee's Phone No.</th>";
					echo"<th class='th'>Employee's Branch</th>";
					echo"<th class='th'>Employee's Salary</th>";
					echo"<th class='th'>Employee's Job</th>";
					echo"<th class='th'>Joining Date</th>";
					echo"</tr>";
					while(($row=mysqli_fetch_array($records))>0)
					{	echo "<tr class='tr'>";
						echo"<td class='td'>".$row['EMP_ID']."</td>";
						echo"<td class='td'>".$row['emp_name']."</td>";
						echo"<td class='td'>".$row['address']."</td>";
						echo"<td class='td'>".$row['phone_no']."</td>";
						echo"<td class='td'>".$row['branch_name']."</td>";
						echo"<td class='td'>".$row['salary_pm']."</td>";
						echo"<td class='td'>".$row['job']."</td>";
						echo"<td class='td'>".$row['date_of_join']."</td>";
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


