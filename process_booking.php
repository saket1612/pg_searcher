<?php
	session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="paying_guest";
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
		die("connection falied due to ". $conn->connect_error);
	$var0=$_SESSION['email'];
	$var1=$_POST['check_in'];
	$var2=$_POST['check_out'];
	$var3=(int)$_POST['no_of_guest'];
	$var4=(int)$_POST['no_of_rooms'];
	$sql="Insert into booking(email,check_in,check_out,no_of_guest,no_of_rooms) values ('$var0','$var1','$var2','$var3','$var4')";
	$conn->query($sql);
	header("location: homepage.php");
?>