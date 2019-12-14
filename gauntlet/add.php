<?php
include "../../config/connection.php";
include "../sync/sync1.php";
$conn = mysqli_connect ($servername, $username, $password, $dbname);
?>
	<html>
		<body>
			<head>
				<link rel="stylesheet" type="text/css" href="../css/style.css">
				<title>Add Level From Gauntlet</title>
			</head>
			<div class="form">
				<p><b><a href="../gauntlet">Back </a> | <a href="../logout">LogOut </b></a></p>
				<h2> Add Gauntlet </h2>
				<?php
				$place = 'placeholder="Put ID Level" required';
				if (isset ($_POST['submit'])){
					$A = $_POST['A'];
					$B = $_POST['B'];
					$C = $_POST['C'];
					$D = $_POST['D'];
					$E = $_POST['E'];
					$sql = "INSERT INTO `gauntlets`(`level1`, `level2`, `level3`, `level4`, `level5`) VALUES ($A, $B, $C, $D, $E)";
                    mysqli_query ($conn, $sql) or die (mysqli_error ());
                    echo "Success :)";
                    } else { ?>
                    	<form action="" method="post">
                   	Level 1 :
                    	<input type="number" name="A" <?php echo $place;?>><br>
                   	Level 2 :
                        <input type="number" name="B" <?php echo $place;?>><br>
                       Level 3 :
                       <input type="number" name="C" <?php echo $place;?>><br>
                       Level 4 :
                       <input type="number" name="D" <?php echo $place;?>><br>
                       Level 5 :
                       <input type="number" name="E" <?php echo $place;?>><br>
                       	<input type="submit" name="submit">
                      </form>
                       	<?php }?>
                       	<br>
                       	<a href="../help">Need Help?</a>
           <br><br><br><br>
           	For More GDPS TOOLS by : <a href="http://famry-amri.rf.gd">FamryAmri </a>
           </div>
           </body>
</html>
                       	
