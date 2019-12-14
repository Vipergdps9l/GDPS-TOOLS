
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<?php
	require('../sync/connection.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
       $pin = stripslashes($_REQUEST['pin']);
		$pin = mysqli_real_escape_string($con,$pin);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `modtools` WHERE username='$username' and password='$password' and pinCode='$pin'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: ../");
            }else{
				echo "<div class='form'><h1 align='center'><img src='../icon.png' style='height: 101px; width:172px;'></h1>
<h3>Pincode/Password is incorrect.</h3><br/>Click here to <a href='../login'>Relogin</a></div>";
				}
    }else{
?>
<div class="form">
<h1 align="center"><img src="../icon.png" style="height: 101px; width:172px;"></h1>
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" value="admin" required />
<input type="password" name="password" placeholder="Password" value="123456" required />
<input type="number" name="pin" placeholder="Pin Code" value="123456" required>
<input name="submit" type="submit" value="Login" />
</form>

<br>
<a href="../help">Need Help?</a>
<br /><br />
For More GDPS fixed by: <a href="http://famry-amri.rf.gd/">Famry Amri</a>
</div>
<?php } ?>


</body>
</html>
