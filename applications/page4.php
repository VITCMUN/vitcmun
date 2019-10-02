<?php
session_start();
if(!isset($_SESSION['p11'])){
header("Location:page3_2.php");
}

?>


<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VITCMUN: Delegate Applications</title>
	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-labels-on-top.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<meta name="theme-color" content="#000000" />

</head>
<body bgcolor="#1c1c1c">

	<header>
		<h1>VITCMUN: Delegate Applications</h1>
    </header>
	<br><Br>
    <div class="main-content animated fadeInRight">
        <form class="form-labels-on-top" method="post" action="request.php">

            <div class="form-title-row">
                <h1>We're Almost Done</h1>
            </div>
            <div class="form-row">
                <label>
                    <h4>Do you require Accomodation?</h4><br>
					<span>(Tick if Yes)</span>
                    <input type="checkbox" name="checkbox" checked>
                </label>
            </div>

						<!--div class="form-row">
                <label>
                    <span>Food Preference:</span>
                    <select name="food" id="food" required>
                        <option value="veg">Vegetarian</option>
                        <option value="nonveg">Non-Vegetarian</option>
                    </select>
                </label>
            </div-->

            <div class="form-row">
                <button type="5sub" style="display: block; margin: 0 auto;" name="button_4">Finish</button>
            </div>
        </form>
    </div>
	<br><br>
	<footer>
		<h3><center><font color="white">VITCMUN - Tech Team</font></center></h3>
    </footer>
</body>
</html>
