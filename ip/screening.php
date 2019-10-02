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
        <title>VITCMUN: IP Applications</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css.map">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
        	<link rel="stylesheet" href="./CSS/demo.css">
        	<link rel="stylesheet" href="./CSS/form-labels-on-top.css">
        	<link rel="stylesheet" href="./CSS/scrollbar.css">
            <meta name="theme-color" content="#000000" />
        	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.js">
            <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
            <script>
                var OneSignal = window.OneSignal || [];
                OneSignal.push(function() {
                    OneSignal.init({
                        appId: "ffa75f22-eac9-49c0-a089-4e20d7e9e120",
                    });
                });
            </script>
        	<!-- Global site tag (gtag.js) - Google Analytics -->
        	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132819915-1"></script>
        	<script>
        	  window.dataLayer = window.dataLayer || [];
        	  function gtag(){dataLayer.push(arguments);}
        	  gtag('js', new Date());

        	  gtag('config', 'UA-132819915-1');
        	</script>
		<style>
			.end{
				  font-family: 'Montserrat', sans-serif;
				  color:#FFFFFF;
				  font-size:30px;
				}

			input[type=number]::-webkit-inner-spin-button,
			input[type=number]::-webkit-outer-spin-button {
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none;
				margin: 0;
			}
		</style>
        <title>Registration form </title>
    </head>
    <body style="background-color: #000000">
	    <header>
		   <h1 align="center">VITCMUN'19: International Press Applications</h1>
        </header>
    <div align="center">
		<img src="./images/logo.jpg" alt="VITCMUN'19" height="12%" width="12%">
	</div>
	<div class="main-content">
		<form class="form-labels-on-top" method="POST" action="insert.php">
			<div align="left">
				<h4><b>Name</b></h4><input class="input" type="text" name="del_name" placeholder="Your Name" required>
			</div>&nbsp;
			<div align="left">
				<h4><b>Email</b></h4><input class="input" type="email" name="del_email" placeholder="Your email" required>
				<span class="icon is-small is-left"><i class="fas fa-envelope"></i></span>
			</div>&nbsp;
			<div align="left">
				<h4><b>Phone number</b></h4><input class="input" type="tel" name="del_phone" placeholder="Phone number" maxlength="10" pattern="[0-9]{10}" required><p class="help">Format: 0123456789</p>
			</div>&nbsp;
			<div align="left">
				<h4><b>Birthdate</b></h4><input class="input" type="date" name="del_dob" placeholder="Birthdate" required>
			</div>&nbsp;
			<div align="left">
				<h4><b>Institution</b></h4><input class="input" type="text" name="del_inst" placeholder="Institution" required>
			</div>&nbsp;
            <div align="left">
				<h4><b>MUN Experience</b></h4>&nbsp;
				<textarea class="textarea has-fixed-size" name="del_exp" rows="10" maxlength="175" required></textarea>
			</div>&nbsp;
			<div align="left">
				<h4><b>Council Preference 1</b></h4>
				<select id="pref1select" name="del_cp1" class="preferenceSelect">
					<option>Select your council.</option>
					<option value="European Council">European Council</option>
					<option value="United Nations Commission on the Status of Women">United Nations Commission on the Status of Women</option>
					<option value="All India Political Parties Meet">All India Political Parties Meet</option>
					<option value="Disarmament and International Security">Disarmament and International Security</option>
					<option value="White House Situation Room">White House Situation Room</option>
					<option value="Security Council">Security Council</option>
				</select>
            </div>&nbsp;
			<div align="left">
				<h4><b>Council Preference 2</b></h4>
				<select id="pref2select" name="del_cp2" class="preferenceSelect">
					<option>Select your council.</option>
					<option value="European Council">European Council</option>
					<option value="United Nations Commission on the Status of Women">United Nations Commission on the Status of Women</option>
					<option value="All India Political Parties Meet">All India Political Parties Meet</option>
					<option value="Disarmament and International Security">Disarmament and International Security</option>
					<option value="White House Situation Room">White House Situation Room</option>
					<option value="Security Council">Security Council</option>
				</select>
			</div>&nbsp;&nbsp;
			<div align="left">
				<h4><b>Write briefly on why Agenda for Pref. 1 is important to you. (150 Words)</b></h4>&nbsp;
				<textarea class="textarea has-fixed-size" name="del_reason" rows="10" maxlength="5000" required></textarea>
			</div>&nbsp;
			<div align="left">
				<h4><b>"The Olympics represent diversity better than the United Nations."<br>In not more than 500 words, write for or against the statement. Back up your thoughts with research.</b></h4>
				<br><textarea class="textarea" name="del_reason_1" rows="10" maxlength="5000" required></textarea>
			</div>&nbsp;
			<div align="left">
				<h4><b>	You are holding the last leaf that exists in nature.
                    <br>Express your thoughts in any format. </b></h4>&nbsp;
				<textarea class="textarea" name="del_reason_2" rows="10" maxlength="1000" required></textarea>
			</div>&nbsp;
		    <div align="left">
				<h4><b>Accommodation</b></h4>
				<input type="radio" name="accommodation" value="Yes">Yes<br>
				<input type="radio" name="accommodation" value="No" checked>No
			</div>&nbsp;
			<div align="center">
				<input type="submit" value="Proceed" name="Submit" class="end" style="background-color:#000000;border-radius:5px;color:antiquewhite;font-size: 20px">
			</div>
		</form>
		<?php
		if($_SESSION['v']==1)
		{
			if($_SESSION['preference_1']==$_SESSION['preference_2'])
			{
			 	echo '<script type="text/javascript">alert("Please choose distinct preferences")</script>';
			 	$_SESSION['$preference_1']=NULL;
			 	$_SESSION['$preference_2']=NULL;
		 	}
		 	else if($_SESSION['preference_1']=="Select your council." || $_SESSION['preference_2']=="Select your council.")
		 	{
			 	echo '<script type="text/javascript">alert("Please choose some preferences")</script>';
			 	$_SESSION['preference_1']=NULL;
			 	$_SESSION['preference_2']=NULL;
		 	}
		 	else if($_SESSION['a']==1)
		 	{
				echo '<script type="text/javascript">alert("User already filled the form.")</script>';
				$_SESSION['a']=0;
			 }
			 $_SESSION['v']=0;
		}
		?>
		</div>
		<div align="center">
			<p>
			<h4 class="end">Debate. Delegate. Decimate. </h4>
		</p><br><br>
		</div>
	<script>
		$(document).ready(function() {
		$(".preferenceSelect").change(function() {
			// Get the selected value
			var selected = $("option:selected", $(this)).val();
			// Get the ID of this element
			var thisID = $(this).prop("id");
			// Reset so all values are showing:
			$(".preferenceSelect option").each(function() {
				$(this).prop("disabled", false);
			});
			$(".preferenceSelect").each(function() {
				if ($(this).prop("id") != thisID) {
					$("option[value='" + selected + "']", $(this)).prop("disabled", true);
				}
				});

			});
		});
	</script>
	</body>
</html>
