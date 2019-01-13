<?php
session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vitcmun";

  $conn = mysqli_connect($server, $username, $password, $dbname) or die("Error Connecting to the server.");


if(isset($_POST['button_1']))
{
	$_SESSION['name']=$_POST['name'];
  $_SESSION['gender']=$_POST['gender'];
	$_SESSION['city']=$_POST['city'];
	$_SESSION['dob']=$_POST['DOB'];
  $_SESSION['college']=$_POST['college'];
	$_SESSION['email']=$_POST['email'];
	$_SESSION['mobile']=$_POST['mobileno'];
	header("Location:page2.php");
	//	echo "<script>window.open('page2.php','_self')</script>";
}
if(isset($_POST['button_2']))
{
	$_SESSION["dexp"]=$_POST["Delegate-experience"];
	$_SESSION["ebexp"]=$_POST["eb-experience"];
	//header("Location:page3_1.php");
	$delexp = $_SESSION["dexp"];
	$ebexp = $_SESSION["ebexp"];

	$dis = substr_count(strtoupper($delexp),"DISEC")+substr_count(strtoupper($delexp),"UNGA DISEC")+substr_count(strtoupper($delexp),"ODC")+substr_count(strtoupper($delexp),"OFFICE FOR DRUG CONTROL")+substr_count(strtoupper($delexp),"UNGA ESS")+substr_count(strtoupper($delexp),"EMERGENCY SPECIAL SESSION");

	$hr = substr_count(strtoupper($delexp),"HRC")+substr_count(strtoupper($delexp),"HUMAN RIGHTS COUNCIL")+substr_count(strtoupper($delexp),"UNHRC")+substr_count(strtoupper($delexp),"UN HRC")+substr_count(strtoupper($delexp),"HCR")+substr_count(strtoupper($delexp),"REFUGEES")+substr_count(strtoupper($delexp),"UNICEF")+substr_count(strtoupper($delexp),"UNCSW")+substr_count(strtoupper($delexp),"UN CSW")+substr_count(strtoupper($delexp),"Sunga OCHUM");

	$secu = substr_count(strtoupper($delexp),"SECURITY")+substr_count(strtoupper($delexp),"SC")+substr_count(strtoupper($delexp),"UNSC")+substr_count(strtoupper($delexp),"SECURITY COUNCIL")+substr_count(strtoupper($delexp),"UN SC");

	$aippm = substr_count(strtoupper($delexp),"AIPPM")+substr_count(strtoupper($delexp),"LOK SABHA")+substr_count(strtoupper($delexp),"ALL INDIA POLITICAL PARTY MEET")+substr_count(strtoupper($delexp),"RAJYA SABHA")+substr_count(strtoupper($delexp),"VIDHAN SABHA")+substr_count(strtoupper($delexp),"PARLIAMENTARY");

	$tc = substr_count(strtoupper($delexp),"TRILATERAL")+substr_count(strtoupper($delexp),"BILDERBERG")+substr_count(strtoupper($delexp),"TC")+substr_count(strtoupper($delexp),"EU")+substr_count(strtoupper($delexp),"EUROPEAN UNION")+substr_count(strtoupper($delexp),"AFRICAN UNION")+substr_count(strtoupper($delexp),"EUROPEAN COMMISSION")+substr_count(strtoupper($delexp),"ECOSOC")+substr_count(strtoupper($delexp),"ECOFIN")+substr_count(strtoupper($delexp),"NATO")+substr_count(strtoupper($delexp),"WARSAW");

	$ara = substr_count(strtoupper($delexp),"ARAB")+substr_count(strtoupper($delexp),"OIS")+substr_count(strtoupper($delexp),"ORGANISATION OF ISLAMIC STATES")+substr_count(strtoupper($delexp),"CJTF-OIR")+substr_count(strtoupper($delexp),"OCC")+substr_count(strtoupper($delexp),"JWC")+substr_count(strtoupper($delexp),"JOINT WAR CABINET");

	$array = [$dis,$hr,$secu,$aippm,$tc,$ara];

	//print_r($array);

	$max_ele = array_keys($array, max($array))[0];

	header("Location:page3_1.php?max_ele=".$max_ele);



}



if(isset($_POST['button_3_1']))
{
$_SESSION['arab_name'] = "Null";
$_SESSION['arab_email'] = "Null" ;
$_SESSION['arab_phone'] ="Null";


  $commi = ["UNGA-DISEC","White House Situation Room","United Nations Comission on the Status of Women","All India Political Parties Meet","European Council","Security Council"];
	$comm = $_POST["council-preference-1"];
	$_SESSION["committee1"] = $commi[$comm];

	if($comm==0){
		$_SESSION['p11'] = $_POST['disec1'];
		$_SESSION['p12'] = $_POST['disec2'];
		$_SESSION['p13'] = $_POST['disec3'];
	}
	if($comm==1){
		$_SESSION['p11'] = $_POST['hrc1'];
		$_SESSION['p12'] = $_POST['hrc2'];
		$_SESSION['p13'] = $_POST['hrc3'];
	}
	if($comm==2){
		$_SESSION['p11'] = $_POST['security1'];
		$_SESSION['p12'] = $_POST['security2'];
		$_SESSION['p13'] = $_POST['security3'];
	}
	if($comm==3){
		$_SESSION['p11'] = $_POST['aippm1'];
		$_SESSION['p12'] = $_POST['aippm2'];
		$_SESSION['p13'] = $_POST['aippm3'];
	}
	if($comm==4){
		$_SESSION['p11'] = $_POST['tc1'];
		$_SESSION['p12'] = $_POST['tc2'];
		$_SESSION['p13'] = $_POST['tc3'];
	}
	if($comm==5){
		$_SESSION['p11'] = $_POST['arab1'];
		$_SESSION['p12'] = $_POST['arab2'];
		$_SESSION['p13'] = $_POST['arab3'];
	}

	$v_p11 = $_SESSION['p11'];
	$v_p12 = $_SESSION['p12'];
	$v_p13 = $_SESSION['p13'];


	//echo("<script>alert('$v_p11');</script>");
	//echo("<script>alert('$v_p12');</script>");
	//echo("<script>alert('$v_p13');</script>");
	//echo(strcmp($v_p11,$v_p12)===0);
	if(strcmp($v_p11,$v_p12)==0){
		//echo("<script>alert('$v_p13');</script>");
		header("Location:page3_1.php?error=1");
	}
	elseif(strcmp($v_p11,$v_p13)==0){
		header("Location:page3_1.php?error=1");
	}
	elseif(strcmp($v_p12,$v_p13)==0){
		header("Location:page3_1.php?error=1");
	}
	else{
//echo $comm;
	if($comm==5){
header("Location:page3_3.php");
}
if($comm<5){
		header("Location:page3_2.php");
}
	}
}

if(isset($_POST['button_3_2']))
{
	$commi =["UNGA-DISEC","White House Situation Room","United Nations Comission on the Status of Women","All India Political Parties Meet","European Council","Security Council"];
	$comm = $_POST["council-preference-2"];
	$_SESSION["committee2"] = $commi[$comm];

	if($comm==0){
		$_SESSION['p21'] = $_POST['disec1'];
		$_SESSION['p22'] = $_POST['disec2'];
		$_SESSION['p23'] = $_POST['disec3'];



	}
	if($comm==1){
		$_SESSION['p21'] = $_POST['hrc1'];
		$_SESSION['p22'] = $_POST['hrc2'];
		$_SESSION['p23'] = $_POST['hrc3'];
	}
	if($comm==2){
		$_SESSION['p21'] = $_POST['security1'];
		$_SESSION['p22'] = $_POST['security2'];
		$_SESSION['p23'] = $_POST['security3'];
	}
	if($comm==3){
		$_SESSION['p21'] = $_POST['aippm1'];
		$_SESSION['p22'] = $_POST['aippm2'];
		$_SESSION['p23'] = $_POST['aippm3'];
	}
	if($comm==4){
		$_SESSION['p21'] = $_POST['tc1'];
		$_SESSION['p22'] = $_POST['tc2'];
		$_SESSION['p23'] = $_POST['tc3'];
	}
	if($comm==5){
		$_SESSION['p21'] = $_POST['arab1'];
		$_SESSION['p22'] = $_POST['arab2'];
		$_SESSION['p23'] = $_POST['arab3'];
	}

	// echo $_SESSION['committee'];
	// echo $_SESSION['p21'];
	// echo $_SESSION['p22'];
	// echo $_SESSION['p23'];

	$v_p21 = $_SESSION['p21'];
	$v_p22 = $_SESSION['p22'];
	$v_p23 = $_SESSION['p23'];

	// echo("<script>alert('$v_p21');</script>");
	// echo("<script>alert('$v_p22');</script>");
	// echo("<script>alert('$v_p23');</script>");
	// echo(strcmp($v_p21,$v_p22)===0);




	if(strcmp($v_p21,$v_p22)==0){
		//echo("<script>alert('$v_p23');</script>");
		header("Location:page3_2.php?error=1");
	}
	elseif(strcmp($v_p21,$v_p23)==0){
		header("Location:page3_2.php?error=1");
	}
	elseif(strcmp($v_p22,$v_p23)==0){
		header("Location:page3_2.php?error=1");
	}
	else{
if($comm==5){
header("Location:page3_3.php");
}
if($comm<5){
		header("Location:page4.php");
}
	}
}


if(isset($_POST['button_3_3'])){

$_SESSION['arab_name'] = $_POST['name'];
$_SESSION['arab_email'] = $_POST['email'] ;
$_SESSION['arab_phone'] = $_POST['phone'];
if(!isset($_SESSION['p21'])){
header("Location:page3_2.php");
}
else{
header("Location:page4.php");
}
}


 if(isset($_POST['button_4'])){

 	$accomodation = $_POST["checkbox"];
  $food = $_POST["food"];

//echo "jww";
	$name = $_SESSION['name'];
  $gender=$_SESSION['gender'];
 	$dob = $_SESSION['dob'];
  $college=$_SESSION['college'];
 	$city = $_SESSION['city'];
 	$mobile = $_SESSION['mobile'];
 	$email = $_SESSION['email'];
 	$db = $_SESSION["dexp"];
	$eb = $_SESSION["ebexp"];

	$comm1 = $_SESSION['committee1'];
	$p11 = $_SESSION['p11'];
	$p12 = $_SESSION['p12'];
	$p13 = $_SESSION['p13'];

	$comm2 = $_SESSION['committee2'];
	$p21 = $_SESSION['p21'];
	$p22 = $_SESSION['p22'];
	$p23 = $_SESSION['p23'];

$a_name = $_SESSION['arab_name'];
$a_email = $_SESSION['arab_email'];
$a_phone = $_SESSION['arab_phone'];



   	$sql = "INSERT INTO del VALUES('".addslashes($name)."','".addslashes($gender)."','".addslashes($dob)."','".addslashes($city)."','".addslashes($college)."','".addslashes($mobile)."','".addslashes($email)."','".addslashes($db)."','".addslashes($eb)."','".addslashes($comm1)."','".addslashes($p11)."','".addslashes($p12)."','".addslashes($p13)."','".addslashes($comm2)."','".addslashes($p21)."','".addslashes($p22)."','".addslashes($p23)."','".addslashes($accomodation)."','".addslashes($food)."','".addslashes($a_name)."','".addslashes($a_email)."','".addslashes($a_phone)."')";

    //echo "<script>alert('dsad');</script>";

    //echo $sql;
    //echo $conn;
   	if(mysqli_query($conn,$sql)){





$subject = 'Welcome to the VITCMUN Family';
//echo $subject;
//$message = "Dear $name, \r\nYour application has been recieved for the VITCMUN 18.\r\nThe allotments for this round will be released on 21st January.\r\nKeep checking our social media pages for updates. \r\n \r\nYours faithfully, \r\nSiddhant Mukerjee \r\nSecretary General, VITCMUN 18";
//echo $message;
$message = "Dear $name,\r\nWe have successfully received your delegate application for VITCMUN 2019; to be held on 29th, 30th and 31st March.The allotments for this round will release on 3rd March 2018. The Organising Committee assures you of a forthcoming memorable MUN experience.\r\n\r\nFor any query call us by going to the contact section in http://www.vitcmun.in or mail us at contact@vitcmun.in.\r\n\r\nYours faithfully,\r\nRohit Joshi\r\nSecretary General, VITCMUN 19";


$headers = 'From: Secretary General <contact@vitcmun.in>' . PHP_EOL .
    'Reply-To: Secretary General <contact@vitcmun.in>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();

//$headers .= 'Cc:'. $email2 . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
//$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail($email, $subject, $message, $headers);
//echo "Your mail has been sent successfuly ! Thank you for your feedback";





        //echo "<script>alert('$email');</script>";
        header("Location:success.html");
       }
    else{header("Location:failure.html");}

	/*here comes the code to fetxh in db*/


 }
?>
