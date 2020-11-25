<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lead Developers</title>
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		section{
			background-image: url(dev2.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
		}
		.container{
			display:flex;
			min-height: 100vh;
			width:100%;
			align-items: center;
			justify-content: space-around;
		}
		.field{
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			width:250px;
			height:300px;
			border-radius: 20px;
			margin-right: 30px;
		}
		.f1{
			background-image: url(saket.jpg);
			margin-bottom: 50px;
		}
		.f2{
			background-image: url(nikhil.jpg);
		}
		.f3{
			background-image: url(jatin.jpg);
			margin-bottom: 50px;
		}
		.f4{
			background-image: url(hardik.jpg);
		}
		.boxer{
			display:flex;
			align-items: center;

		}
		.nav-bar {
					height: 10vh;
					width: 100%;
					background-color: red;
					color: navy;
					text-align: center;
					font-size: 50px;
					text-shadow: 0px 0px 1px cyan;
					padding-top: 12px;
				}
				.linky{
					font-size: 28px;
					padding: 7px;
					border: 3px solid black;
					width: 250px;
					float: right;
					margin: 7px;
				}
				.welcome{
				width: 250px;
				font-size: 28px;
				padding: 7px;
				border: 3px solid black;
				float: left;
				margin: 7px;
			}
		p{
			font-size: 32px;
			font-family: cursive;
			font-weight: bold;
			text-shadow: 5px;
		}
		span{
			
			margin:10px;
		}
	</style>
</head>
	<body>
		<nav class="nav-bar">
			<a class="welcome">Welcome <?php echo $_SESSION['username'] ?></a>
			<span style="color:navy;">
				<a style="color: navy;margin-top: 5px;text-decoration: none;">-- Developers --</a>
			</span>
			<a href="homepage.php" class="linky">Back To Home</a>
		</nav>
		<hr style="border: 2px solid black;">
		<section>
		<div class="container">
			<div>
				<span class="boxer">
			<div class="field f1">
				
			</div>
			<p>SAKET</p>
		</span>
		<span class="boxer">
			<div class="field f2">
				
			</div>
			<p>NIKHIL</p>
		</span>
		</div>
		<div>
			<span class="boxer">
			<div class="field f3">
				
			</div>
			<p>JATIN</p>
		</span>
		<span class="boxer">
			<div class="field f4">
				
			</div>
			<p>HARDIK</p>
		</span>
		</div>
		</div>
	</section>
	</body>
</html>