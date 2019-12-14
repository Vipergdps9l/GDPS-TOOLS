<?php
/*
Author: Famry Amri
Website: http://famryamrigd.5v.pl/
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Setup</title>
<h1 align="center"><img src="../icon.png" style="height: 101px; width:172px;"></h1>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<?php
	require('../sync/connection.php');
   include('../sync/sync1.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['name'])){
		$name = stripslashes($_REQUEST['name']); // removes backslashes
		$name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
		$type = stripslashes ($_REQUEST['type']);
       $type = mysqli_real_escape_string ($con, $type);
		$amount = stripslashes($_REQUEST['amount']);
		$amount = mysqli_real_escape_string($con,$amount);
		$reward = stripslashes($_REQUEST['reward']);
       $reward = mysqli_real_escape_string($con,$reward);
        $query = "INSERT into `quests` (type, amount, reward, name) VALUES ('$type', '$amount', '$reward', '$name')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Add Quests Successfully.</h3><br/><a href='../quests'>Back</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Add Quests</h1>
<form method="post" action="">
<p><b>Name </b></p>
<input type="text" name="name" placeholder="Name" required>
<p><b>Select Type Item</b></p>
<input type="radio" name="type" value="1" required />
Orbs
<input type="radio" name="type" value="2" required />
Coins
<input type="radio" name="type" value="3" required />
Stars
<p><b>Amount To Collect </b></p>
<input type="number" name="amount" placeholder="~" required />
<p><b>Reward Diamond</b></p>
<input type="number" name="reward" placeholder="~" required/>
<table>
<p><th><input name="submit" type="submit" value="Add" /></th></p><p><th><a href="../quests"><input type="button" value="Back"/></th></p></table>
</form>
 <br /><br />
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd/">Famry Amri</a>
</div>
<?php } ?>
</body>
</html>
