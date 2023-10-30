<?php
mysql_connect("localhost","root","") or die("Couldn't Connect!");
mysql_select_db("baptismSystem");

if(isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM usertable WHERE username='".$username."' AND password='".$password."'limit 1";
	$result = mysql_query($sql);
	
	if(mysql_num_rows($result)==1){
	    echo "You have successfully Logged in!";
      header('location:Home.html');
	}
	else{
 	    echo"Invalid user credantials!";
	}
}
?>

<html>

<head>
  <link rel="css/stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css\style.css">
  <title>Log In</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Sign in</p>
    <h3 style="text-align:center;">A Centralised Baptism and Record Management system</h3>
    <img src="images/bible.png" alt="Logo" height="50" width="50" class="center">
    
    <form class="form1" method="post" action="#">
      <input class="un " type="text" align="center" placeholder="Username" name="username" required>
      <input class="pass" type="password" align="center" placeholder="Password" name="password" required>
      <input type="submit" name="submit" value="Login" class="submit" align="center">
      <div style="text-align:center;"> <br> New Here? <a href="Register.html"><b>Register</b> </a> </br> </div> 
            
                
    </div>
     
</body>

</html>