<?php
require('../sync/connection.php');
include("../sync/sync1.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Accounts</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form"><b>
<p><a href="../">Back</a> | <a href="../logout">Logout</a></p>
<h2>View Accounts</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>AccountID</strong></th><th><strong>Username</strong></th><th><strong>Admin 0/1</strong></th><th><strong></strong></th><th><strong></strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from accounts ORDER BY userName desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row['accountID']; ?></td><td align="center"><?php echo $row["userName"]; ?></td><td align="center"><?php echo $row["isAdmin"]; ?></td><td align="center"><a href="edit?userName=<?php echo $row["userName"]; ?>">Edit</a></td><td align="center"><a href="delete?userName=<?php echo $row["userName"]; ?>">Kick From Server</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<table><th><a href="../players"><input type="button" value="refresh"></a></th>
</table>
<br /><br /><br><br>
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd">FamryAmri</a>
</div>
</body>
</html>
