<?php
    //login.php
	//echo $_POST["email"];
	
	$email_error = "";
	
	//kontrollime, et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		//echo "keegi vajutas nuppu";
		//kontrollin, et e-post ei ole tühi
	
	if(empty($_POST["email"]) ){
		$email_error = "See väli on kohustuslik";
		}
		
	}
	
	
    
		
?>
<html>
<head>
    <title>Login page</title>
</head>
<body>
    
	<h2>Log in</h2>
	
	<form action="login.php" method="post" >
	<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
	<input name="password" type="password" placeholder="Parool" > <br><br>
	<input type ="submit" value="log in">
	</form>
	
<h2>Create user</h2>
	
</body
</html>