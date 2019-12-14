<?php
require "../../sync/conn.php";
include "../../sync/sync2.php";
?>
<html>
	<title>Add Role</title>
	<h1 align="middle">Add Role</h1>
   <link rel="stylesheet" href="../../css/style.css">
   <div class="form">
<p><a href="../../">Home</a> | <a href="../../logout">Logout</a></b></p>
			<form action="add.php" method="POST">
			<label><b>Role Name</b></label>
			<br>
			<input type="text" placeholder="RoleName" name="A" class="box">
			<br>
			<h2>Command</h2>
			<label><b>Rate lvl</b></label>
			<br>
			<input type="radio" name="B" value="0" required>Off
			<input type="radio" name="B" value="1" required>On
			<br>
			<label><b>Featured lvl</b></label>
			<br>
			<input type="radio" name="C" value="0" required>Off
			<input type="radio" name="C" value="1" required>On
			<br>
			<label><b>Epic lvl</b></label>
			<br>
			<input type="radio" name="D" value="0" required>Off
			<input type="radio" name="D" value="1" required>On
			<br>
			<label><b>UnEpic lvl</b></label>
			<br>
			<input type="radio" name="E" value="0" required>Off
			<input type="radio" name="E" value="1" required>On
			<br>
			<label><b>Coins</b></label>
			<br>
			<input type="radio" name="F" value="0" required>Off
			<input type="radio" name="F"value="1" required>On
			<br>
			<label><b>Daily lvl</b></label>
			<br>
			<input type="radio" name="G" value="0" required>Off
			<input type="radio" name="G" value="1" required>On
			<br>
			<label><b>Weekly lvl</b></label>
			<br>
			<input type="radio" name="H" value="0" required>Off
			<input type="radio" name="H" value="1" required>On
			<br>
			<label><b>Delete lvl</b></label>
			<br>
			<input type="radio" name="I" value="0" required>Off
			<input type="radio" name="I" value="1" required>On
			<br>
			<label><b>Set Account lvl</b></label>
			<br>
			<input type="radio" name="J" value="0" required>Off
			<input type="radio" name="J" value="1" required>On
			<br>
			<h2>Command Unique</h2>
			<label><b>Rename lvl</b></label>
			<br>
			Own:
			<input type="radio" name="K" value="0" required>Off
			<input type="radio" name="K" value="1" required>On
			<br>
			All:
			<input type="radio" name="L" value="0" required>Off
			<input type="radio" name="L" value="1" required>On
			<br>
			<label><b>Set Pass lvl</b></label>
			<br>
			Own:
			<input type="radio" name="M" value="0" required>Off
			<input type="radio" name="M" value="1" required>On
			<br>
			All:
			<input type="radio" name="N" value="0">Off
			<input type="radio" name="N" value="1">On
			<br>
			<label><b>Edit Desc lvl</b></label>
			<br>
			Own:
			<input type="radio" name="O" value="0" required>Off
			<input type="radio" name="O" value="1" required>On
			<br>
			All:
			<input type="radio" name="P" value="0" required>Off
			<input type="radio" name="P" value="1" required>On
			<br>
			<label><b>Public lvl?</b></label>
			<br>
			Own:
			<input type="radio" name="Q" value="0" required>Off
			<input type="radio" name="Q" value="1" required>On
			<br>
			All:
			<input type="radio" name="R" value="0" required>Off
			<input type="radio" name="R" value="1" required>On
			<br>
			<label><b>Unlisted lvl</b></label>
			<br>
			Own:
			<input type="radio" name="S" value="0" required>Off
			<input type="radio" name="S" value="1" required>On
			<br>
			All:
			<input type="radio" name="T" value="0" required>Off
			<input type="radio" name="T" value="1" required>On
			<br>
			<label><b>Share CP</b></label>
			<br>
			Own:
			<input type="radio" name="U" value="0" required>Off
			<input type="radio" name="U" value="1" required>On
			<br>
			All:
			<input type="radio" name="V" value="0" required>Off
			<input type="radio" name="V" value="1" required>On
			<br>
			<label><b>Change Song lvl</b></label>
			<br>
			Own:
			<input type="radio" name="W" value="0" required>Off
			<input type="radio" name="W" value="1" required>On
			<br>
			All:
			<input type="radio" name="X" value="0" required>Off
			<input type="radio" name="X" value="1" required>On
			<br>
			<h2>Mod Setup</h2>
			<br>
			<label><b>Rate Demon</b></label>
			<br>
			<input type="radio" name="Y" value="0" required>Off
			<input type="radio" name="Y" value="1" required>On
			<br>
			<label><b>Rate Stars</b></label>
			<br>
			<input type="radio" name="Z" value="0" required>Off
			<input type="radio" name="Z" value="1" required>On
			<br>
			<label><b>Rate Diff</b></label>
			<br>
			<input type="radio" name="AA" value="0" required>Off
			<input type="radio" name="AA" value="1" required>On
			<br>
			<label><b>Req Mod</b></label>
			<br>
			<input type="radio" name="AB" value="0" required>Off
			<input type="radio" name="AB" value="1" required>On
			<br>
			<label><b>Ban Player</b></label>
			<br>
			<input type="radio" name="AC" value="0" required>Off
			<input type="radio" name="AC" value="1" required>On
			<br>
			<label><b>Create Map Pack</b></label>
			<br>
			<input type="radio" name="AD" value="0" required>Off
			<input type="radio" name="AD" value="1" required>On
			<br>
			<label><b>Mod Actions</b></label>
			<br>
			<input type="radio" name="AE" value="0" required>Off
			<input type="radio" name="AE" value="1" required>On
			<br>
			<label><b>DashBoard Tools</b></label>
			<br>
			<input type="radio" name="AF" value="0" required>Disable
			<input type="radio" name="AF" value="1" required>Enable
			<br>
			<label><b>Comment Color</b></label>
			<br>
          <input type="radio" name="AG" value="255,193,202" required>Pink
          <input type="radio" name="AG" value="255,255,000" required>Yellow
          <input type="radio" name="AG" value="255,255,255" required>White
          <input type="radio" name="AG" value="143,000,255" required>Violet
			<input type="radio" name="AG" value="000,255,255" required>Cyan
			<input type="radio" name="AG" value="255,000,000" required>Red
          <input type="radio" name="AG" value="000,255,000" required>Green
          <input type="radio" name="AG" value="000,000,000" required>Black
			<br>
			<label><b>Type Mod</b></label>
			<br>
			<input type="radio" name="AH" value="2" required>Elder Mod
			<input type="radio" name="AH" value="1" required>Mod
          <br>
          <table>
<p><th><input name="submit" type="submit" value="Create" /></th></p><p><th><a href="../"><input type="button" value="Cancel"/></th></p></table>
      </div>
</form>
</html>
			