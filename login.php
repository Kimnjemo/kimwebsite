<!DOCTYPE html>GV
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
			<div  class="box1">
				<br><br>
				<h1 style="font-size: 40px; "><b>VOTING SYSTEM</b></h1>
				<h1 style="color: black;">LOG IN FORM</h1>
				<!---<h1 style="color: blue;">END: 2:00 PM </h1>-->
				<form name="userlogin" class="userlogin"action="log.php" method="POST" >
					<input type="text" name="regno" placeholder="ENTER YOUR REGISLSTION NUMBER" required=""><br><br><br>
					<input type="password" name="password" placeholder="ENTER YOUR CORRECT PASSWORD" required=""><br><br><br>
			
					<select   name="stds">
						<option>voter</option>
						<option>judge</option>
						<option>E.register</option>
					</select><br>

					<button class="btn1">LOGIN</button>

					
				</form>
				<div>
					<p><a style="color: red; text-decoration: none; font-size: 20px;" href="">FORGOT PASSWORD</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ARE YOU NEW IN THIS SITE? <a style="color: white; font-size: 30px; text-decoration: none;" href="regISTRATION.php">REGISTER NOW</a></p>
				</div>
			
			</div>
			
		</section>

</body>
</html>