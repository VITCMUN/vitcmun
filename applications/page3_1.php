<?php
 session_start();
if(!isset($_SESSION['dexp'])){
header("Location:page2.php");
}

//include 'session_home.php';
//$max_ele=0;
//$max_ele = $_GET['max_ele'];
$error=0;

if(!isset($_SESSION))
    {
        session_start();
    }

$server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vitcmun";
  $conn = mysqli_connect($server, $username, $password, $dbname) or die("Error Connecting to the server.");

  $sql_disec = "select country from disec"; //This remains Disec for VITCMUN2019
  $sql_hrc = "select country from whsr"; //This is WHSR FOR VITCMUN2019 COUNCILS
  $sql_security = "select country from uncsw";
  $sql_aippm = "select country from aippm"; //This Remains AIPPM for VITCMUN2019
  $sql_tc = "select country from eu"; //This is European Union for VITCMUN2019
  $sql_arab = "select country from unsc";

?>
<!DOCTYPE html>
<html>

<head>

<!-- you have filled in a wrong country / character -->
<!-- you can not fill the same entry //// entry can not be the same. -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VITCMUN: Delegate Applications</title>
  <link rel="stylesheet" href="assets/demo.css">
  <link rel="stylesheet" href="assets/form-labels-on-top.css">
  <script type="text/javascript" src="js/datalist.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <meta name="theme-color" content="#000000" />

</head>
<body bgcolor="#1c1c1c" onload="fn()">

  <script>
setInterval("fn()",1);
</script>

  <style type="text/css">
    input,select{
      min-width: 250px;
      max-width: 250px;
    }
  </style>
  <header>
    <h1>VITCMUN: Delegate Applications</h1>
    </header>
  <br><Br>
    <div class="main-content animated fadeInRight">
        <form class="form-labels-on-top" method="post" action="request.php" name="f1">

            <div class="form-title-row">
                <h1>Council Preference 1</h1>
            </div>
            <div class="form-row">
                <p style="color:#FF0000">The Countries that have been alloted in ROUND 1 will not be available in the drop-down list.
                    <br>
                    The drop down list currently shows the list of available countries/characters.
                </p>
            </div>
            <div class="form-row">
                <label>
                    <span>Council Preference</span>
                    <span>(Already selected according to your prior experience)</span>
                    <select name="council-preference-1" id="cp1" required onclick="fn()">
                        <option id="0" value="0">UNGA-DISEC</option>
                        <option id="1" value="1">White House Situation Room</option>
                        <option  id="2" value="2">United Nations Commission on the Status of Women</option>
                        <option id="3" value="3">All India Political Parties Meet</option>
            <option id="4" value="4">European Council</option>
            <option id="5" value="5">Security Council</option>
                    </select>

                </label>
            </div>
      <script type="text/javascript">
    var max_ele = "<?php echo $max_ele; ?>";
    //alert(max_ele);
    document.getElementById(max_ele).selected=true;
  </script>
      <div class="form-row">
                <label>
                    <span id="coun-pre-1">Country Preference 1</span>

                    <select list="disec1" name="disec1" id="idisec1" autocomplete="off" placeholder="DISEC" onclick="fn()" >


                        <?php
                if ($result=mysqli_query($conn,$sql_disec))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
        </select>




                    <select  name="hrc1" id="ihrc1" autocomplete="off" placeholder="WHSR" hidden onclick="fn()">
                        <?php
                if ($result=mysqli_query($conn,$sql_hrc))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
         </select>

           <select list="security1" name="security1" id="isecurity1" autocomplete="off" placeholder="UNCSW" hidden  onclick="fn()">

                        <?php
                if ($result=mysqli_query($conn,$sql_security))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
          </select>

          <select list="aippm1" name="aippm1" id="iaippm1" autocomplete="off" placeholder="AIPPM" hidden  onclick="fn()">
                    <datalist id="aippm1" name="d_aippm1">
                        <?php
                if ($result=mysqli_query($conn,$sql_aippm))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
                    </select>

                    <select list="tc1" name="tc1" id="itc1" autocomplete="off" placeholder="EC" hidden  onclick="fn()">

                        <?php
                if ($result=mysqli_query($conn,$sql_tc))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
                    </select>

                    <select list="arab1" name="arab1" id="iarab1" autocomplete="off" placeholder="SECURITY COUNCIL" hidden  onclick="fn()">

                      <?php
                if ($result=mysqli_query($conn,$sql_arab))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
                    </select>




                </label>
            </div>

      <div class="form-row">
        <label >
            <span id="coun-pre-2">Country Preference 2</span>
          <select list="disec2" name="disec2" id="idisec2" autocomplete="off" placeholder="DISEC"  onclick="fn()">

                       <?php
                if ($result=mysqli_query($conn,$sql_disec))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
                    </select>


                    <select list="hrc2" name="hrc2" id="ihrc2" autocomplete="off" placeholder="WHSR" hidden  onclick="fn()">

                       <?php
                if ($result=mysqli_query($conn,$sql_hrc))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
          </select>

           <select list="security2" name="security2" id="isecurity2" autocomplete="off" placeholder="UNCSW" hidden onclick="fn()">

                       <?php
                if ($result=mysqli_query($conn,$sql_security))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
          </select>

          <select list="aippm2" name="aippm2" id="iaippm2" autocomplete="off" placeholder="AIPPM" hidden onclick="fn()">

                       <?php
                if ($result=mysqli_query($conn,$sql_aippm))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
                    </select>

                    <select list="tc2" name="tc2" id="itc2" autocomplete="off" placeholder="EC" hidden onclick="fn()">

                       <?php
                if ($result=mysqli_query($conn,$sql_tc))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
                    </select>

                    <select list="arab2" name="arab2" id="iarab2" autocomplete="off" placeholder="SECURITY COUNCIL" hidden onclick="fn()">

                       <?php
                if ($result=mysqli_query($conn,$sql_arab))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
                    </select>
        </label>
            </div>

      <div class="form-row">
        <label>
            <span id="coun-pre-3">Country Preference 3</span>
          <select list="disec3" name="disec3" id="idisec3" autocomplete="off" placeholder="DISEC" onclick="fn()" >

                       <?php
                if ($result=mysqli_query($conn,$sql_disec))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
                    </select>


                    <select list="hrc3" name="hrc3" id="ihrc3" autocomplete="off" placeholder="WHSR" hidden onclick="fn()">

                      <?php
                if ($result=mysqli_query($conn,$sql_hrc))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
          </select>

           <select list="security3" name="security3" id="isecurity3" autocomplete="off" placeholder="UNCSW" hidden onclick="fn()">

                      <?php
                if ($result=mysqli_query($conn,$sql_security))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
          </select>

          <select list="aippm3" name="aippm3" id="iaippm3" autocomplete="off" placeholder="AIPPM" hidden onclick="fn()">

                       <?php
                if ($result=mysqli_query($conn,$sql_aippm))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
                    </select>

                    <select list="tc3" name="tc3" id="itc3" autocomplete="off" placeholder="EC" hidden onclick="fn()">

                       <?php
                if ($result=mysqli_query($conn,$sql_tc))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
                    </select>

                    <select list="arab3" name="arab3" id="iarab3" autocomplete="off" placeholder="SECURITY COUNCIL" hidden onclick="fn()">

                       <?php
                if ($result=mysqli_query($conn,$sql_arab))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options

                    }
                }

            ?>
                    </select>
        </label>
            </div>



            <div class="form-row">
                <button name="button_3_1" type="3_sub" style="display: block; margin: 0 auto;">Proceed</button>
            </div>
        </form>
    </div>
  <br><br>
  <footer>
		<h3><center><font color="white">VITCMUN - Tech Team</font></center></h3>
    </footer>
    <?php
    $error = $_GET['error'];
    //echo("<script>window.alert('$error');</script>");
  if($error==1){
    echo("<script>window.alert('Any 2 entries can not be the same');</script>");
  }
  ?>
</body>
</html>
