<?php
session_start();
$_SESSION['sid1']=session_id();
$_SESSION['username']=$_POST['user'];
$_SESSION['password']=$_POST['psswrd'];
header("location:form2.php");
?>