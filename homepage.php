<?php
  session_start();
  unset($_SESSION['sortingset']);
  $servername="localhost";
	$username="root";
	$password="";
	$dbname="paying_guest";
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
		die("connection falied due to ". $conn->connect_error);
	$result=$conn->query("Select no_of_visitors from visitors");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>HomePage</title>
		<style>
			* {
				margin: 0;
				padding: 0;
				font-family: cursive;
			}
			body{
				background-color: pink;
			}
			.button {
				position: relative;
			  border-radius: 6px;
			  /*background-color: #f4511e;*/
			  background-color: darkviolet;
			  border: none;
			  color: #FFFFFF;
			  text-align: center;
			  font-size: 35px;
			  padding: 20px;
			  width: 100%;
			  height:250px;
			  transition: all 0.5s;
			  cursor: pointer;
			  margin-top: 50px;
			  box-shadow: 5px 5px 10px black;
			}
			.button span {
			  cursor: pointer;
			  display: inline-block;
			  position: relative;
			  transition: 0.5s;
			}

			.button span:after {
			  content: '\00bb';
			  position: absolute;
			  opacity: 0;
			  top: 0;
			  right: -50px;
			  transition: 0.5s;
			}

			.button:hover span {
			  padding-right: 25px;
			}

			.button:hover span:after {
			  opacity: 1;
			  right: 0;
			}
			.nav-bar {
					height: 10vh;
					width: 100%;
					background-color: red;
					color: navy;
					text-align: center;
					font-size: 45px;
					text-shadow: 0px 0px 1px cyan;
					padding-top: 8px;
				}
				.linky{
					font-size: 23px;
					padding: 6px;
					border: 3px solid black;
					width: 250px;
					float: right;
					margin: 7px;
				}
				.welcome{
				width: 250px;
				font-size: 23px;
				padding: 6px;
				border: 3px solid black;
				float: left;
				margin: 7px;
			}
			.footer_class{
				text-align: center;
				color: navy;
				padding: 10px;
				font-size: 20px;
			}
		</style>
	</head>
	<body>
		<nav class="nav-bar">
			<a class="welcome">Welcome <?php echo $_SESSION['username'] ?></a>
			<span style="color:navy;">
				<a href="developer.php" style="color: navy;margin-top: 5px;text-decoration: none;">-- Guest Saga! --</a>
			</span>
			<a href="index.php" class="linky">Logout</a>
		</nav>
		<hr style="border: 2px solid black;">
		<form action="find_destination.php" method="POST">
			<button class="button"><span>Find Your Destination Here!</span></button>
		</form>
		<form action="register_home.php" method="POST">
			<button class="button"><span>Register Your Home Now!</span></button>
		</form>
		<hr style="border: 2px solid red; margin-top: 30px;">
		<footer class="footer_class">
		  <?php echo "<h2>Visitors Count : ".$result->fetch_assoc()['no_of_visitors']; ?>
		</footer>
		<hr style="border: 2px solid red;">
	</body>
</html>