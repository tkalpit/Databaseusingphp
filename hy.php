<?php
session_start();
if($_SESSION['sid1']==session_id())
{

echo "Welcome ".$_SESSION['username']."<br>";
echo "<a href='logout.php'>Logout</a>";
}
else
{
	
	header("location:login.html");
}
?>