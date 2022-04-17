<?php
session_start();
  include('config.php');
  // establishing the MySQLi connection
  

  // checking the user
  if(empty($_SESSION)) // if the session not yet started
     session_start();

  if(isset($_POST["login"])){

    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $pass = mysqli_real_escape_string($conn,$_POST["password"]);
    $captcha =$_POST["captcha"];
    $sel_user = "select firstname from customer where email='$email' AND password='$pass'";

    $run_user = mysqli_query($conn, $sel_user);

    $check_user = mysqli_num_rows($run_user);
    $row = mysqli_fetch_assoc($run_user);




    if($_SESSION['captcha']==$captcha) {
        if($check_user>0){
            $_SESSION["email"]=$email;
            $_SESSION["name"]=$row["firstname"];
            $_SESSION["mobile"]=$row["mobile"];

            echo'<script>
              window.history.go(-1);
           </script>';
        }
        else {
            echo '<script>
              alert("Incorrect Password or Username!");
              window.history.go(-1);
            </script>';
        }
    }
  else {
    echo '<script>
              alert("Please enter captcha!");
              window.history.go(-1);
            </script>';
  }

  }
?>
