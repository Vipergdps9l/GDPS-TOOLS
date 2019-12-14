<?php
require('../sync/connection.php');
include("../sync/sync1.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Quests</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form"><b>
<p><a href="../">Back</a> | <a href="add.php">Add Quest </a> | <a href="../logout">Logout</a></p>
<h2>View Quests</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>ID</strong></th><th><strong>Item Collect</strong></th><th><strong>Amount Collect</strong></th><th><strong>Reward</strong></th><th><strong>Name Quests</strong></th><th><strong></strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from quests ORDER BY ID desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row['ID']; ?></td><td align="center"><?php echo $row["type"]; ?></td><td align="center"><?php echo $row["amount"]; ?></td>
<td align="center"><?php echo $row["reward"];?></td><td align="center"><?php echo $row["name"];?></td><td align="center"><a href="edit.php?ID=<?php echo $row["ID"]; ?>">Edit</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
<table><th><a href="../quests"><input type="button" value="refresh"></a></th>
</table>
<br /><br /><br><br>
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd">FamryAmri</a>
</div>
</body>
</html>
