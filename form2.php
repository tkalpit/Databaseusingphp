<?php
session_start();

if($_SESSION['sid1']==session_id())
{
	$user=$_SESSION['username'];
	$pass=$_SESSION['password'];
	$conn=mysqli_connect("localhost","root","",kalpit);
	$sql=mysqli_query($conn,"select * from table1");
	while($row=mysqli_fetch_array($sql))
	{
		if($row['Username']==$user && $row['Password']==$pass)
		{
			header("location:hy.php");
		}
	}
}
else
{
	
	header("location:login.html");
}
?>