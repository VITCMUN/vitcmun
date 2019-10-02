<?php
    session_start();
    require_once('config.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $_SESSION['v']=1;
        if(isset($_POST['Submit']))
        {
            function test_input($input_data)
            {
                $input_data=trim($input_data);
                $input_data=stripslashes($input_data);
                $input_data=htmlspecialchars($input_data);
                return $input_data;
            }
            $name=test_input($_POST['del_name']);
            if (!preg_match("/^[a-zA-Z ]*$/",$name))
            {
                $name_err = "Only letters and white space allowed in Name Field";
                header("Location:screening.php");
            }
            $email=test_input($_POST['del_email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $email_err = "Invalid email format";
                header("Location:screening.php");
            }
            $phone=test_input($_POST['del_phone']);
            $date_of_birth=test_input($_POST['del_dob']);
            $institute=test_input($_POST['del_inst']);
            $experience=test_input($_POST['del_exp']);
            $reason_agenda=test_input($_POST['del_reason']);
            $reason_que_1=test_input($_POST['del_reason_1']);
            $accommodation=test_input($_POST['accommodation']);
            $_SESSION['a']=0;
            $query="select * from photo where (name='$name' and email='$email') OR (email='$email') ";
            $query_run=mysqli_query($con,$query);
            if($query_run)
            {
                if(mysqli_num_rows($query_run)>0)
                {
                    $_SESSION['a']=1;
                    header("Location:screening.php");
                    echo '<script type="text/javascript">alert("User already filled the form.")</script>';
                    exit();
                }
                else
                {
                    $insert_query="INSERT INTO photo VALUES ('$name','$date_of_birth','$phone','$email','$institute','$experience','$reason_agenda','$reason_que_1','$accommodation')";
                    $run_insert_query=mysqli_query($con,$insert_query);
                    if($run_insert_query)
                    {
                        header("Location:Thank_you.php");
                    }
                    else
                    {
                        echo "Query didn't run.";
                    }
                }
            }
        }
    }
?>
