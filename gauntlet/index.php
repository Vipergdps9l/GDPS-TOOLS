<?php
include "../../config/connection.php";
include "../sync/sync1.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
	<html>
		<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<title>Gauntlets</title>
		</head>
		<div class="form"><b>
			<p><a href="../">Back </a> | <a href="add.php">Add Gauntlet </a> | <a href="../logout">LogOut </a> </p></b>
			<h2>Gauntlets List </h2>
			<table width="100%" border="1" style="border-collapse:collapse;">
				<thead>
					<tr><td align="center"><strong>Gauntlet</strong></td><td align="center"><strong>Edit</strong></td></tr>
					</thead>
					<tbody>
						<?php
						$sql = "SELECT * FROM `gauntlets`";
						$db = mysqli_query ($conn, $sql);
						$array = array (
						1=> "Fire", 2=>"Ice", 3=> "Poison", 4=> "Shadow", 5=> "Lava", 6=> "Bonus", 7=> "Chaos", 8=>"Demon", 9=> "Time", 10=> "Crystal", 11=> "Magic", 12=> "Spike",
						13=> "Monster", 14=> "Doom", 15=> "Death",);
						while($row = mysqli_fetch_assoc ($db)) {?>
							<tr><td align="center"><b><?php echo $array[$row['ID']];?></b></td><td align="center"><a href="edit.php?ID=<?php echo $row['ID'];?>">Edit </a></td></tr>
							<?php } ?>
								</tbody>
								</table>
								<br>
									<a href="../help">Need Help?</a>
								<br><br><br><br>
									For More GDPS TOOLS By : <a href="http://famry-amri.rf.gd/">FamryAmri </a>
									</div>
									</body>
									</html>