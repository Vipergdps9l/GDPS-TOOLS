<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
echo '<title>logout </title><h1 align="center"><img src="../icon.png" style="height: 101px; width:172px;"><br>Thank You For Using GDPS TOOLS</h1>';
echo '<p align="center"><a href="../">Click Here To Relogin </a></p>';
}
?>