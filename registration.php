<!DOCTYPE html>
<html>
<head>
	<title>user login page</title>
		<link rel="stylesheet" type="text/css" href="vort.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
		<div class="row">
		<!----------------------------------------heder------------------------------------->
		<header class="col-right">
			<br><br><br><br>
			
	<h1 class="title">ELECTRONIC VOTING SYSTEM</h1>
			
			
		</header>
		<!----------------------------------------content----------------------------------->
		<section class="login">
			<br><br><br><br><br><br><br>
			<div  class="box0">
				<br><br>
				<h1 style="font-size: 40px; "><b>VOTING SYSTEM</b></h1>
				<h1 style="color: black;">REGISTRATION FORM</h1>
				<!---<h1 style="color: blue;">END: 2:00 PM </h1>-->
				<form name="userlogin" class="userlogin" action="register.php"  enctype="multpart/form-data"  method="POST"  >
					<input type="text" name="fname" placeholder="ENTER YOUR FULLNAME" required=""><br><br><br>
					<input type="text" name="regno" placeholder="ENTER YOUR REGISLSTION NUMBER" required=""><br><br><br>
					<input type="password" name="password" placeholder="ENTER YOUR CORRECT PASSWORD" required=""><br><br><br>
					<input type="password" name="cpassword" placeholder="CONFIRM PASSWORD" required=""><br><br><br>
					<input type="text" name="phone" placeholder="ENTER YOUR PHONE NUMBER" required=""><br><br><br>
					<input type="file" name="km"  required=""><br><br><br>
					<select  name="std">
						<option>voter</option>
						<option>judge</option>
						<option>E.register</option>
					</select><br><br><br><br>
					<button class="btn1">REGISTER</button>
				</form>
				<div>
					<p> &nbsp &nbsp &nbsp &nbsp DO YOU HAVE AN ACCOUNT? <a style="color: white; font-size: 30px; text-decoration: none;" href="reg.php">LOGIN</a></p>
				</div>
			
			</div>
			
		</section>

</body>
</html>