<?php   
 //Above HTML 
include 'config.php';

 $name_error = '';  
 $phone_error = '';  
 $email_error = '';  
 $gender_error = '';  
 $password_error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $name_error = "<p>Please Enter Name</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z ]*$/", $_POST["name"]))  
           {  
                $name_error = "<p>Only Letters and whitespace allowed</p>";  
           }  
      }  
      if(empty($_POST["phone"]))  
      {  
           $phone_error = "<p>Please Enter phone</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z ]*$/", $_POST["phone"]))  
           {  
                $phone_error = "<p>Only Letters and whitespace allowed</p>";  
           }  
      }  
      if(empty($_POST["email"]))  
      {  
           $email_error = "<p>Please Enter Email</p>";  
      }  
      else  
      {  
           if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  
           {  
                $email_error = "<p>Invalid Email formate</p>";  
           }  
      }  
      if(empty($_POST["gender"]))  
      {  
           $gender_error = "<p>Please your Gender</p>";  
      }  
      $name=$_POST["name"];
        $gender=$_POST["gender"];
        $phone=$_POST["phone"];
        $email=$_POST["email"];
        $password=$_POST["password"];
      if($name_error == "" && $phone_error == "" && $email_error == "" && $gender_error == "")  
      {  
             
        

  $sql = "INSERT INTO CUSTOMER (Name, Password, Gender, Email, Phno)
  VALUES ('$name', '$password', '$gender', '$email', $phone)";

  if ($conn->query($sql) === TRUE) {
      echo'<script>
              alert("signed up successfully!!");
              window.open("../index.php", "_self");
          </script>';
  }
}

  

      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<script>window.open("../index.php", "_self");</script>';
    }
    mysqli_close($conn);
      }
?>
