<?php
session_start();
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VITCMUN: Agenda Voting Module</title>
	<link rel="stylesheet" href="CSS\demo.css">
	<link rel="stylesheet" href="CSS\form-labels-on-top.css">
	<link rel="stylesheet" href="CSS\scrollbar.css">
</head>
<body bgcolor="#1c1c1c">
	<header>
		<h1>VITCMUN: Agenda Voting Module</h1>
    </header>
	&nbsp;&nbsp;<br><br><br><br><br><br><br>
    <div class="main-content">
        <form class="form-labels-on-top" method="POST" action="index.php">
            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="email" required>
                </label>
            </div>
            <div class="form-row">
                <button name="Next" type="submit" style="display: block; margin: 0 auto;" >Proceed</button>
            </div>
        </form>
<?php
if(isset($_POST['Next']))
{
	if($_POST['email']!=NULL)
	{
		if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
		{
			$email=$_POST['email'];
			$query="select * from testresponse where email='$email' or response=1";
			$query_run=mysqli_query($con,$query);
			if($query_run)
			{
				if(mysqli_num_rows($query_run)>0)
				{
					header("Location:final.php");
				}
				else
				{
					$_SESSION['email']=$_POST['email'];
					header("Location:form.php");
				}
			}
			else
			{
				echo '<script type="text/javascript">alert("Data error")</script>';
			}
		}
		else
		{
			echo  '<script type="text/javascript">alert("Please enter a valid email address")</script>';
			header("Location:index.php");
		}
	}
	else
	{
		echo '<script type="text/javascript">alert("Please enter an email address to proceed")</script>';
		header("Location:index.php");
	}
}
?>
    </div>
	<br><br><br>
	<footer>
		<br>
		<h1>Debate.     Delegate.     Decimate.</h1>
		<br><br>
    </footer>
</body>
</html>
