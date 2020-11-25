<?php
  	session_start();
	$flag=0;
	$city_after_search=array();
	$city_to_be_searched;
  	if ($_SERVER["REQUEST_METHOD"] == "GET")
  	{
  		$servername="localhost";
		$username="root";
		$password="";
		$dbname="paying_guest";
		$conn=new mysqli($servername,$username,$password,$dbname);
		if($conn->connect_error)
			die("connection falied due to ". $conn->connect_error);
	  	if(isset($_GET['city_search']))
	  	{
			global $city_after_search,$city_to_be_searched;
			$city=$_GET['city'];
			$city_to_be_searched=$city;
	  		$sql="Select * from home_register,person_register where home_register.city='$city' and home_register.email=person_register.email";
			$result=$conn->query($sql);
	  		$flag=1;
	  	}
  	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Finder</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<style>
			* {
				margin: 0;
				padding: 0;
				font-family: cursive;
				color: navy;
			}
			body{
				background-color: pink;
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
					width: 300px;
					float: right;
					margin: 7px;
				}
				.welcome{
				width: 300px;
				font-size: 28px;
				padding: 7px;
				border: 3px solid black;
				float: left;
				margin: 7px;
			}
			.form1{
				text-align: center;
				font-size: 30px;
				margin: 30px;
				box-shadow: 5px 3px 15px darkred;
				padding: 10px;
			}
			.search_button{
				font-size: 20px;
				padding: 1px;
			}
			.show_result{
				border: 3px solid tomato;
				box-shadow: 5px 5px 5px grey;
				margin-top: 20px;
				height: 120px;
				padding: 8px;
				display: flex;
				justify-content: space-around;
				margin: 20px;
				font-size: 18px;
			}
			.heading_title{
				color:voilet;
			}
			.button {
			  border-radius: 4px;
			  background-color: #f4511e;
			  border: none;
			  color: #FFFFFF;
			  text-align: center;
			  font-size: 25px;
			  padding: 5px;
			  width: 250px;
			  transition: all 0.5s;
			  cursor: pointer;
			  margin: 5px;
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
			  right: -20px;
			  transition: 0.5s;
			}

			.button:hover span {
			  padding-right: 25px;
			}

			.button:hover span:after {
			  opacity: 1;
			  right: 0;
			}
			.sorting{
				margin-top: 20px;
				display: flex;
				justify-content: space-around;
				margin-bottom: -40px;
			}
			.dropbtn {
			  background-color: #f4511e;
			  color: navy;
			  text-align: center;
			  font-size: 26px;
			  padding: 5px;
			  width: 250px;
			  border: none;
			  cursor: pointer;
			  margin: 5px;
			}

			.dropbtn:hover, .dropbtn:focus {
			  background-color: red;
			}

			.dropdown {
			  position: relative;
			  display: inline-block;
			}

			.dropdown-content {
			  display: none;
			  position: absolute;
			  background-color: #f1f1f1;
			  min-width: 170px;
			  overflow: auto;
			  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			  z-index: 1;
			  left: 20%;
			}

			.dropdown-content button {
			  background-color: darkorange;
			  width: 170px;
			  padding: 12px 16px;
			  text-decoration: none;
			  display: block;
			}

			.dropdown button:hover {background-color: red;}

			.dropbtnn {
			  background-color: #f4511e;
			  color: navy;
			  text-align: center;
			  font-size: 26px;
			  padding: 5px;
			  width: 250px;
			  border: none;
			  cursor: pointer;
			  margin: 5px;
			}

			.dropbtnn:hover, .dropbtnn:focus {
			  background-color: red;
			}

			.dropdownn {
			  position: relative;
			  display: inline-block;
			}

			.dropdownn-content {
			  display: none;
			  position: absolute;
			  background-color: #f1f1f1;
			  min-width: 170px;
			  overflow: auto;
			  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			  z-index: 1;
			  left: 20%;
			}

			.dropdownn-content button {
			  background-color: darkorange;
			  width: 170px;
			  padding: 12px 16px;
			  text-decoration: none;
			  display: block;
			}

			.dropdownn button:hover {background-color: red;}



			.show {display: block;}
			.shows {display: block;}

			.bookbutton{
				border-radius: 4px;
			  background-color: #f4511e;
			  border: none;
			  color: navy;
			  text-align: center;
			  font-size: 20px;
			  padding: 5px;
			  width: 100px;
			  transition: all 0.5s;
			  cursor: pointer;
			  margin: 5px;
			  margin-top: 25px;
			  box-shadow: 0px 0px 5px blue;
			  transition: all;
			  transition-duration: 0.1s;
			  transition-timing-function: ease-out;
			}
			.bookbutton:hover{
				box-shadow: 0px 0px 20px blue;
			}
		</style>
		<script>
			function myFunction() {
		  		document.getElementById("myDropdown").classList.toggle("show");
		  		document.getElementById("dropdownid").style.height="40vh";
			}
			function myFunctionn() {
		  		document.getElementById("myDropdownn").classList.toggle("shows");
		  		document.getElementById("dropdownid").style.height="60vh";
			}

			$(document).ready(function(){
				$("#price_asc").click(function(){
					var city='<?php echo $city_to_be_searched; ?>'
					console.log('city '+city);
					$.post("low_to_high.php",{
						city:city	
					},function(data,status){
						var x=`<h1 style='text-align:center;margin-top:10px;'>Ascending Sorted Result</h1>`;
						x=x+data;
						$("#result_show").hide();
						$("#showSortedResults").html(x);
					});
				});
				$("#price_desc").click(function(){
					var city='<?php echo $city_to_be_searched; ?>'
				 
					console.log('city '+city);
					$.post("high_to_low.php",{
						city:city	
					},function(data,status){
						var x=`<h1 style='text-align:center;margin-top:10px;'>Descending Sorted Result</h1>`;
						x=x+data;
						$("#result_show").hide();
						$("#showSortedResults").html(x);
					});
				});
				$("#no_of_rooms_asc").click(function(){
					var city='<?php echo $city_to_be_searched; ?>'
				 
					console.log('city '+city);
					$.post("no_of_rooms_asc.php",{
						city:city	
					},function(data,status){
						var x=`<h1 style='text-align:center;margin-top:10px;'>Ascending Sorted Result</h1>`;
						x=x+data;
						$("#result_show").hide();
						$("#showSortedResults").html(x);
					});
				});
				$("#no_of_rooms_desc").click(function(){
					var city='<?php echo $city_to_be_searched; ?>'
				 
					console.log('city '+city);
					$.post("no_of_rooms_desc.php",{
						city:city	
					},function(data,status){
						var x=`<h1 style='text-align:center;margin-top:10px;'>Descending Sorted Result</h1>`;
						x=x+data;
						$("#result_show").hide();
						$("#showSortedResults").html(x);
					});
				});
				$("#ac_yes").click(function(){
					var city='<?php echo $city_to_be_searched; ?>'
				 
					console.log('city '+city);
					$.post("ac_yes.php",{
						city:city	
					},function(data,status){
						var x=`<h1 style='text-align:center;margin-top:10px;'>AC Available</h1>`;
						x=x+data;
						$("#result_show").hide();
						$("#showSortedResults").html(x);
					});
				});
				$("#ac_no").click(function(){
					var city='<?php echo $city_to_be_searched; ?>'
				 
					console.log('city '+city);
					$.post("ac_no.php",{
						city:city	
					},function(data,status){
						var x=`<h1 style='text-align:center;margin-top:10px;'>AC Not Available</h1>`;
						x=x+data;
						$("#result_show").hide();
						$("#showSortedResults").html(x);
					});
				});
				$("#food_yes").click(function(){
					var city='<?php echo $city_to_be_searched; ?>'
				 
					console.log('city '+city);
					$.post("food_yes.php",{
						city:city	
					},function(data,status){
						var x=`<h1 style='text-align:center;margin-top:10px;'>Food Available</h1>`;
						x=x+data;
						$("#result_show").hide();
						$("#showSortedResults").html(x);
					});
				});
				$("#food_no").click(function(){
					var city='<?php echo $city_to_be_searched; ?>'
				 
					console.log('city '+city);
					$.post("food_no.php",{
						city:city	
					},function(data,status){
						var x=`<h1 style='text-align:center;margin-top:10px;'>Food Not Available</h1>`;
						x=x+data;
						$("#result_show").hide();
						$("#showSortedResults").html(x);
					});
				});
				$("#boys_allowed").click(function(){
					var city='<?php echo $city_to_be_searched; ?>'
				 
					console.log('city '+city);
					$.post("boys_allowed.php",{
						city:city	
					},function(data,status){
						var x=`<h1 style='text-align:center;margin-top:10px;'>Boys Allowed</h1>`;
						x=x+data;
						$("#result_show").hide();
						$("#showSortedResults").html(x);
					});
				});
				$("#girls_allowed").click(function(){
					var city='<?php echo $city_to_be_searched; ?>'
				 
					console.log('city '+city);
					$.post("girls_allowed.php",{
						city:city	
					},function(data,status){
						var x=`<h1 style='text-align:center;margin-top:10px;'>Girls Allowed</h1>`;
						x=x+data;
						$("#result_show").hide();
						$("#showSortedResults").html(x);
					});
				});
				$("#family_allowed").click(function(){
					var city='<?php echo $city_to_be_searched; ?>'
				 
					console.log('city '+city);
					$.post("family_allowed.php",{
						city:city	
					},function(data,status){
						var x=`<h1 style='text-align:center;margin-top:10px;'>Family Allowed</h1>`;
						x=x+data;
						$("#result_show").hide();
						$("#showSortedResults").html(x);
					});
				});
			})
			
		</script>
	</head>
	<body>
		<nav class="nav-bar">
			<a class="welcome">Welcome <?php echo $_SESSION['username'] ?></a>
			<span style="color:navy;">
				Find Your Destination!
			</span>
			<div class="linky">
				<a href="homepage.php">Return to Home</a>
			</div>
		</nav>
		<hr style="border: 3px solid black;">
		<form class="form1" action="" method="GET">
			Search By City Name : <input type="text" style="background-color: lightgrey;font-size: 18px;" name="city"/>
			<input type="submit" class="search_button" value="Search" name="city_search">
		</form>
		<hr style="border: 3px solid black;">
		<div class="sorting" id="dropdownid">
			<div class="dropdown">
			  <button onclick="myFunction()" id ="sortclick" class="dropbtn">Sort</button>
			  <div id="myDropdown" class="dropdown-content">
			  		<button id="price_asc" name="price_asc">Price Low To High</button>
			  		<button id="price_desc" name="price_desc">Price High To Low</button>
			  		<button id="no_of_rooms_asc" name="no_of_rooms_asc">No. Of Rooms(Asc)</button>
			  		<button id="no_of_rooms_desc" name="no_of_rooms_desc">No. Of Rooms(Desc)</button>
			  </div>
			</div>
			<div class="dropdownn">
			  <button onclick="myFunctionn()" id ="filterclick" class="dropbtnn">Filter</button>
			  <div id="myDropdownn" class="dropdownn-content">
			  		<button id="ac_yes" name="ac_yes">AC service (YES)</button>
			  		<button id="ac_no" name="ac_no">AC service (NO)</button>
			  		<button id="food_yes" name="food_yes">Food service (YES)</button>
			  		<button id="food_no" name="food_no">Food service (NO)</button>
			  		<button id="boys_allowed" name="boys_allowed">Boys Allowed</button>
			  		<button id="girls_allowed" name="girls_allowed">Girls Allowed</button>
			  		<button id="family_allowed" name="family_allowed">Family Allowed</button>
			  </div>
			</div>
		</div>

		


		<script>
		
		window.onclick = function(event) {
		//document.getElementById("dropdownid").style.height="10vh";
		  if (!event.target.matches('.dropbtn')) {
		    var dropdowns = document.getElementsByClassName("dropdown-content");
		    var i;
		    for (i = 0; i < dropdowns.length; i++) {
		      var openDropdown = dropdowns[i];
		      if (openDropdown.classList.contains('show')) {
		        openDropdown.classList.remove('show');
		      }
		    }
		  }
		  if (!event.target.matches('.dropbtnn')) {
		    var dropdowns = document.getElementsByClassName("dropdownn-content");
		    var i;
		    for (i = 0; i < dropdowns.length; i++) {
		      var openDropdown = dropdowns[i];
		      if (openDropdown.classList.contains('shows')) {
		        openDropdown.classList.remove('shows');
		      }
		    }
		  }
		  if(!event.target.matches('.dropbtn') && !event.target.matches('.dropbtnn'))
		  {
		  	document.getElementById("dropdownid").style.height="10vh";
		  }
		}
		</script>
		<hr style="border: 3px solid black;margin-top: 65px;">
		<?php
			if($flag>0 && $result->num_rows>0)
			{
				echo "<h1 style='text-align:center;margin-top:10px;'>----- Matching Results -----</h1>";
				echo "<div id='result_show'>";
				while($row=$result->fetch_assoc())
				{
					echo "<div class='show_result'>";
						echo "<div class='owner_details'>";
							echo "<h4 class='heading_title'>Owner Details:</h4>";
							echo "Name : ".$row['name']."<br>";
							echo "Mobile No. : ".$row['mobile']."<br>";
							echo "Email : ".$row['email']."<br>";
						echo "</div>";
						echo "<div class='home_details'>";
							echo "<h4 class='heading_title'>Home Details:</h4>";
							echo "Address : ".$row['address']."<br>";
							echo "City : ".$row['city']."<br>";
							echo "State : ".$row['state']."<br>";
						echo "</div>";
						echo "<div class='facility_details'>";
							echo "<h4 class='heading_title'>Facility Provided:</h4>";
							if($row['ac_service']==1)
								echo "AC Service : YES <br>";
							else
								echo "AC Service : NO <br>";
							if($row['food_service']==1)
								echo "Food Service : YES <br>";
							else
								echo "Food Service : NO <br>";
							echo "Allows : ";
							if($row['boys'])
								echo " Boys,";
							if($row['girls'])
								echo " Girls,";
							if($row['family'])
								echo " Family";
						echo "</div>";
						echo "<div class='room_details'>";
							echo "<h4 class='heading_title'>Room Details:</h4>";
							echo "No. of Rooms : ".$row['no_of_rooms']."<br>";
							echo "Price Per Room : ".$row['price']."<br>";
						echo "</div>";
						echo "<div>";
							echo "<form action='booking_page.php'>";
								echo "<button class='bookbutton'> Book</button>";
							echo "</form>";
						echo "</div>";
					echo "</div>";
				}
				echo "</div>";
			}
		?>

		
		<div id="showSortedResults"></div>
	</body>
</html>