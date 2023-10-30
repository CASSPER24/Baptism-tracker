<?php 
    $dbusername="root";
    $dbpassword="";
    $database="baptismSystem";

	$fname = $_POST['fname'];
	$surname = $_POST['surname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword']; 
	

	$connection = mysql_connect(localhost, $dbusername, $dbpassword);

	mysql_select_db($database) or die("unable to select a database");


	if($password != $cpassword){
	echo 'Passwords dont match'; }
	elseif(empty($fname) or empty($surname) or empty($username) or empty($password)){
	echo 'No field should be left empty'; 
	}
	else{
		$select ="SELECT * FROM usertable WHERE username='$username'";

		$result = mysql_query($select) or die(mysql_error());

		if(mysql_num_rows($result) > 0){
			echo("User already exists");
			}else{
		$query = "INSERT INTO usertable(fname, surname, username, password) 
		VALUES('$fname', '$surname', '$username', '$password')";
			if(mysql_query($query)){
			echo("You have successfully Registered!");
      		header('location:Login.php');
			}else{ 
				die("unable to insert data");
			}
							}

}
 ?>