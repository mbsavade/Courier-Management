<?php include "dbConfig.php";

	$msg = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name = $_POST["username"];
		$password = $_POST["password"];
		if ($name == '' || $password == '') {
			$msg = "You must enter all fields";
		} else {
			$sql = "SELECT * FROM users WHERE username = '$name' AND password = '$password'";
			$query = mysqli_query($conn, $sql);

			if ($query === false) {
				echo "Could not successfully run query ($sql) from DB: " . mysql_error();
				exit;
			}

			if (mysqli_affected_rows($conn) > 0) {
				header('Location: employee_page.html');
				exit;
			}

			$msg = "Username and password do not match";
		}
	}
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employee Login</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="a1.js">
</script>
<style>

input[type=submit], input[type=reset] {
	background-color:
#4CAF50;
	border: none;
	color: white;
	padding: 7px 10px;
	text-decoration: none;
	border-radius: 4px;
	margin: 8px 0;
	cursor: pointer;}

input[type=submit]:hover, input[type=reset]:hover {
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

	<li><a href="admin.php" title="Admin Login">Admin Login</a></li>
	<li><a></a></li>

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
	<h2 class="ourCompany-hdr">User Login</h2><br>
	<form name="frmregister"action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
	<table style='border:0px solid
#000000;'>
	<tr> <h3>Login as User &nbsp: </h3>
	</tr><br>
	<tr>

	<td style="color:red;">
	<?php echo $msg; ?></td>
	</tr>

	<tr>
	<td align='right'>
	Username &nbsp : &nbsp&nbsp&nbsp <input type='text' size='15' maxlength='25' name='username'>
	</td>
	</tr></table><br>
	<table>
	<tr>
	<td align='right'>
	Password &nbsp&nbsp : &nbsp&nbsp&nbsp <input type='password' size='15' maxlength='25' name='password'>
	</td>
	</tr></table><br>
	<table>
	<tr>
	<td class="submit-button-right">
	<div>&nbsp&nbsp&nbsp&nbsp&nbsp
	<input class="send_btn" type="submit" value="Submit" alt="Submit" title="Submit" /> &nbsp&nbsp
	<input class="send_btn" type="reset" value="Reset" alt="Reset" title="Reset" /></div></td>

	</tr>
	</table>
	</form>

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


