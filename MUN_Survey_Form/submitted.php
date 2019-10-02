<?php
session_start();
require_once('config.php');
if($_SESSION["email"]!=true)
{
	header("Location:index.php");
}
if(isset($_POST['form1']))
{
	$ans_1EC=$_POST['ans_1EC'];
	$ans_1UNSCW=$_POST['ans_1UNSCW'];
	$ans_1AIPPM=$_POST['ans_1AIPPM'];
	$ans_1DISEC=$_POST['ans_1DISEC'];
	$ans_1WHSR=$_POST['ans_1WHSR'];
	$ans_1SC=$_POST['ans_1SC'];
	$ans_1IP=$_POST['ans_1IP'];
	$query1="INSERT INTO testresponse(email) VALUE('$_SESSION[email]')";
	$query1_run=mysqli_query($con,$query1);
	if($query1_run)
	{
		echo '<script type="text/javascript">alert("Email inserted")</script>';
	}
	$query="select * from testresponse where email='$_SESSION[email]'";
	$query_run=mysqli_query($con,$query);
	if($query_run)
	{
		if(mysqli_num_rows($query_run)>0)
		{
			$query_update="update testresponse SET council1='$ans_1EC',council2='$ans_1UNSCW',council3='$ans_1AIPPM',council4='$ans_1DISEC',council5='$ans_1WHSR',council6='$ans_1SC',council7='$ans_1IP' WHERE email='$_SESSION[email]'";
			$query_update_run=mysqli_query($con,$query_update);
			if($query_update_run)
			{
				echo'<script type="text/javascript">alert("Data inserted")</script>';
				header("Location:brutforcecounter.php");
			}
			else
			{
				echo '<script type="text/javascript">alert("Data error")</script>';
			}
		}
		else
		{
			echo '<script type="text/javascript">alert("There is no such email address registered")</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">alert("Email query error")</script>';
	}
}
?>