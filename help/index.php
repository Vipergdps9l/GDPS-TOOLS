<html>
<head>
<link rel="stylesheet" href="../css/style.css">
</head>

<h1 align="center"><img src="../icon.png" style="height: 101px; width:172px;"></h1>
<h1 align="center">FAQ</h1>
<fieldset>
<legend><b>How To Make Account GDPSTOOLS</b></legend>
<p>
<li>First, you can create account at your database in the modtools table or go to that <b><a href="../setup">http://your-domain/database/gdpstools/setup</a></b>.</li>
<li>After that, make sure you delete the SetUp Folder or replace it with index.php file ur own</li></fieldset>
<?php
session_start();
if(!isset($_SESSION["username"])){
echo '<fieldset><legend>For More FAQ </legend>
<li>Please Login For More </li></fieldset>';} else {

echo '<fieldset>
<legend><b>How To Use Promote Player in Moderator Tools </b></legend>
<li>
Use Must Follow The Acc ID and Role ID </li>
</fieldset>
<fieldset>
<legend><b>How To Use Quests Tools</b></legend>
<li>In database using number like this
<div>
<li>1 = Orbs </li>
<li>2 = Coins </li>
<li>3 = Stars </li>
</div>
<li>There Only Using For Collect Item And Get Reward U Give Diamond </li>
<li>The last one you must add 3 quests and more. if only one quests you added, for android game will crash or stopped gdps app. </li>
</fieldset>
<fieldset>
<legend><b>How To Change A Password</b></legend>
<li>If you want to change the level password.
You must have 1 in front of your password that wants to change it.<b> For Example:</b><b style="color: grey;"> 1123456 </b></li>
<li>And You can also disable the password using only 0 digit</li>
<li>If you do not want to enter the password level.You need to enter 1 digit number only</li>
</fieldset>';
 }
?>

<br>
<div align="center">
<a href="../">
<input type="button" value="Home"></a>
</div>
</html>
