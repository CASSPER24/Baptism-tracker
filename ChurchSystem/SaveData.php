<?php 
	$username="root";
	$password="";
	$database="baptismSystem";

	$Reg_number = $_POST['Reg_number'];
	$DateOfBaptism	 = $_POST['DateOfBaptism'];
	$ChristianName = $_POST['ChristianName'];
    $Surname = $_POST['Surname'];
	$DateOfBirth = $_POST['DateOfBirth'];
	$Father = $_POST['Father'];
    $Mother = $_POST['Mother'];
	$GodParent = $_POST['GodParent'];
	$Residence = $_POST['Residence'];
    $Priest	= $_POST['Priest'];
    $Observation = $_POST['Observation'];
	
	
	mysql_connect(localhost, $username, $password) or die("unable to connect");

	mysql_select_db($database) or die("unable to select a database");
	$query = "INSERT INTO baptist(Reg_number, DateOfBaptism, ChristianName, Surname, DateOfBirth, Father, Mother, GodParent, Residence, Priest, Observation) VALUES('$Reg_number', '$DateOfBaptism', '$ChristianName', '$Surname', '$DateOfBirth', '$Father', '$Mother', '$GodParent', '$Residence', '$Priest', '$Observation')";
	mysql_query($query)or die("unable to insert data, Reg Number already exists");
	mysql_close();
	header("location: Home.html");


 ?>