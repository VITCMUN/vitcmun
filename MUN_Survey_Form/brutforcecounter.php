<?php
session_start();
require_once('config.php');
if($_SESSION["email"]!=true)
{
	header("Location:index.php");
}
$query="select * from testresponse where email='$_SESSION[email]'";
$query_run=mysqli_query($con,$query);
$queryt="select * from response where 1";
$queryt_run=mysqli_query($con,$queryt);
if(mysqli_num_rows($queryt_run)==0)
{
	mysqli_query($con,"INSERT INTO `response`(`agenda_1ec`, `agenda_2ec`, `agenda_3ec`, `agenda_1unscw`, `agenda_2unscw`, `agenda_3unscw`, `agenda_1aippm`, `agenda_2aippm`, `agenda_3aippm`, `agenda_1disec`, `agenda_2disec`, `agenda_3disec`, `agenda_1whsw`, `agenda_2whsw`, `agenda_3whsw`, `agenda_1sc`, `agenda_2sc`, `agenda_3sc`, `agenda_1ip`, `agenda_2ip`, `agenda_3ip`) VALUES (0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)");
}
$query1="select * from response where 1";
$query1_run=mysqli_query($con,$query1);
$result=mysqli_fetch_array($query_run);
$result1=mysqli_fetch_array($query1_run);
switch($result['council1'])
{
	case "Agenda 1EC":
		$result1['agenda_1ec']=$result1['agenda_1ec']+1;
		$q1="update response set agenda_1ec='.$result1[agenda_1ec].' where 1";
		$q1_run=mysqli_query($con,$q1);
		break;
	case "Agenda 2EC":
		$result1['agenda_2ec']=$result1['agenda_2ec']+1;
		$q2="update response set agenda_2ec='.$result1[agenda_2ec].' where 1";
		$q2_run=mysqli_query($con,$q2);
		break;
	case "Agenda 3EC":
		$result1['agenda_3ec']=$result1['agenda_3ec']+1;
		$q3="update response set agenda_3ec='.$result1[agenda_3ec].' where 1";
		$q3_run=mysqli_query($con,$q3);
		break;
}
switch($result['council2'])
{
	case "Agenda 1UNSCW":
		$result1['agenda_1unscw']=$result1['agenda_1unscw']+1;
		$q4="update response set agenda_1unscw='.$result1[agenda_1unscw].' where 1";
		$q4_run=mysqli_query($con,$q4);
		break;
	case "Agenda 2UNSCW":
		$result1['agenda_2unscw']=$result1['agenda_2unscw']+1;
		$q5="update response set `agenda_2unscw`='.$result1[agenda_2unscw].' where 1";
		$q5_run=mysqli_query($con,$q5);
		break;
	case "Agenda 3UNSCW":
		$result1['agenda_3unscw']=$result1['agenda_3unscw']+1;
		$q6="update response set `agenda_3unscw`='.$result1[agenda_3unscw].' where 1";
		$q6_run=mysqli_query($con,$q6);
		break;
}
switch($result['council3'])
{
	case "Agenda 1AIPPM":
		$result1['agenda_1aippm']=$result1['agenda_1aippm']+1;
		$q7="update response set `agenda_1aippm`='.$result1[agenda_1aippm].' where 1";
		$q7_run=mysqli_query($con,$q7);
		break;
	case "Agenda 2AIPPM":
		$result1['agenda_2aippm']=$result1['agenda_2aippm']+1;
		$q8="update response set `agenda_2aippm`='.$result1[agenda_2aippm].' where 1";
		$q8_run=mysqli_query($con,$q8);
		break;
	case "Agenda 3AIPPM":
		$result1['agenda_3aippm']=$result1['agenda_3aippm']+1;
		$q9="update response set `agenda_3aippm`='.$result1[agenda_3aippm].' where 1";
		$q9_run=mysqli_query($con,$q9);
		break;
}
switch($result['council4'])
{
	case "Agenda 1DISEC":
		$result1['agenda_1disec']=$result1['agenda_1disec']+1;
		$q10="update response set `agenda_1disec`='.$result1[agenda_1disec].' where 1";
		$q10_run=mysqli_query($con,$q10);
		break;
	case "Agenda 2DISEC":
		$result1['agenda_2disec']=$result1['agenda_2disec']+1;
		$q11="update response set `agenda_2disec`='.$result1[agenda_2disec].' where 1";
		$q11_run=mysqli_query($con,$q11);
		break;
	case "Agenda 3DISEC":
		$result1['agenda_3disec']=$result1['agenda_3disec']+1;
		$q12="update response set `agenda_3disec`='.$result1[agenda_3disec].' where 1";
		$q12_run=mysqli_query($con,$q12);
		break;
}
switch($result['council5'])
{
	case "Agenda 1WHSW":
		$result1['agenda_1whsw']=$result1['agenda_1whsw']+1;
		$q13="update response set `agenda_1whsw`='.$result1[agenda_1whsw].' where 1";
		$q13_run=mysqli_query($con,$q13);
		break;
	case "Agenda 2WHSW":
		$result1['agenda_2whsw']=$result1['agenda_2whsw']+1;
		$q14="update response set `agenda_2whsw`='.$result1[agenda_2whsw].' where 1";
		$q14_run=mysqli_query($con,$q14);
		break;
	case "Agenda 3WHSW":
		$result1['agenda_3whsw']=$result1['agenda_3whsw']+1;
		$q15="update response set `agenda_3whsw`='.$result1[agenda_3whsw].' where 1";
		$q15_run=mysqli_query($con,$q15);
		break;
}
switch($result['council6'])
{
	case "Agenda 1SC":
		$result1['agenda_1sc']=$result1['agenda_1sc']+1;
		$q16="update response set `agenda_1sc`='.$result1[agenda_1sc].' where 1";
		$q16_run=mysqli_query($con,$q16);
		break;
	case "Agenda 2SC":
		$result1['agenda_2sc']=$result1['agenda_2sc']+1;
		$q17="update response set `agenda_2sc`='.$result1[agenda_2sc].' where 1";
		$q17_run=mysqli_query($con,$q17);
		break;
	case "Agenda 3SC":
		$result1['agenda_3sc']=$result1['agenda_3sc']+1;
		$q18="update response set `agenda_3sc`='.$result1[agenda_3sc].' where 1";
		$q18_run=mysqli_query($con,$q18);
		break;
}
switch($result['council7'])
{
	case "Agenda 1IP":
		$result1['agenda_1ip']=$result1['agenda_1ip']+1;
		$q19="update response set `agenda_1ip`='.$result1[agenda_1ip].' where 1";
		$q19_run=mysqli_query($con,$q19);
		break;
	case "Agenda 2IP":
		$result1['agenda_2ip']=$result1['agenda_2ip']+1;
		$q20="update response set `agenda_2ip`='.$result1[agenda_2ip].' where 1";
		$q20_run=mysqli_query($con,$q20);
		break;
	case "Agenda 3IP":
		$result1['agenda_3ip']=$result1['agenda_3ip']+1;
		$q21="update response set `agenda_3ip`='.$result1[agenda_3ip].' where 1";
		$q21_run=mysqli_query($con,$q21);
		break;
}
header("Location:survey.php");
?>