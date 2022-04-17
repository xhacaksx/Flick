<?php
   session_start();
    // Database connection
    include('config.php');
    
    // Error & success messages
    global $success_msg, $email_exist, $emptyError1, $emptyError2, $emptyError3, $emptyError4, $emptyError5,$emptyError6;
    $formValid = TRUE;
    if(isset($_POST["submit"])) {
        $firstname     = $_POST["name"];
        $email         = $_POST["email"];
        $mobile        = $_POST["mobile"];
        $password      = $_POST["password"];
        $captcha =$_POST["captcha"];
        // verify if email exists
        // $emailCheck = $connection->query( "SELECT * FROM customer WHERE email = '{$email}' ");
        // $rowCount = $emailCheck->fetchColumn();

        $email_check_query = mysqli_query($conn, "SELECT * FROM customer WHERE email = '{$email}' ");
        $rowCount = mysqli_num_rows($email_check_query);

        // PHP validation
        if(preg_match("/^[a-zA-Z-' ]*$/",$_POST["name"])==0)  {
            $emptyError1 = '<div class="alert alert-danger">
            Only letters and white space allowed.
        </div>';
            $formValid = FALSE;
        }
        else {     
            $formValid = TRUE;   
      }
       if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
		$emptyError3 = '<div class="alert alert-danger">
        Invalid email.
    </div>';
		$formValid = FALSE;

	  }
		else   {
		  
		  $formValid = TRUE;
		}
		
      
	  
	  if( preg_match('/^[0-9]{10}+$/', $_POST["mobile"])==0) {
		$emptyError4 = '<div class="alert alert-danger">
        mobile must be of 10 digit.
    </div>';
		$formValid = FALSE;

	  }
	  else {
		
		$formValid = TRUE;
	}

		
		  if (strlen($_POST["password"]) <= '8') {
            $emptyError5 = '<div class="alert alert-danger">
            Your Password Must Contain At Least 8 Characters!.
                </div>';
			$formValid = FALSE;
        }
        else if(preg_match("#[0-9]+#",$_POST["password"])==0) {
            $emptyError5 = '<div class="alert alert-danger">
            Your Password Must Contain At Least 1 Number,1 Capital Letter,Lowercase Letter!.
            </div>';
			$formValid = FALSE;
        }
        else if(preg_match("#[A-Z]+#",$_POST["password"])==0) {
            $emptyError5 = '<div class="alert alert-danger">
            Your Password Must Contain At Least 1 Number,1 Capital Letter,Lowercase Letter!.
            </div>';
			$formValid = FALSE;
        }
        else if(preg_match("#[a-z]+#",$_POST["password"])==0) {
            $emptyError5 = '<div class="alert alert-danger">
            Your Password Must Contain At Least 1 Number,1 Capital Letter,Lowercase Letter!.
            </div>';
			$formValid = FALSE;
        } 
		  else {
			$formValid = TRUE;
		  }
        if($_SESSION['captcha']==$captcha && $formValid==TRUE && !empty($firstname)  && !empty($email) && !empty($mobile) && !empty($password)){
            
            // check if user email already exist
            if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exist!
                    </div>
                ';
            } else {
            // Password hash
            
            $sql = "INSERT INTO customer (firstname, password,email, mobile) 
            VALUES ('{$firstname}','{$password}', '{$email}', '{$mobile}')";
            $sqlQuery = mysqli_query($conn, $sql);
                if(!$sqlQuery){
                    die("MySQL query failed!" . mysqli_error($conn));
                } else {
                    $success_msg = '<div class="alert alert-success">
                        User registered successfully!
                </div>';
                }
            }
        }
     else {
            if(empty($firstname)){
                $emptyError1 = '<div class="alert alert-danger">
                    First name is required.
                </div>';
            }
            
            if(empty($lastname)){
                $emptyError2 = '<div class="alert alert-danger">
                    Last name is required.
                </div>';
            }
            if(empty($email)){
                $emptyError3 = '<div class="alert alert-danger">
                    Email is required.
                </div>';
            }
            if(empty($mobile)){
                $emptyError4 = '<div class="alert alert-danger">
                    Mobile number is required.
                </div>';
            }
            if(empty($password)){
                $emptyError5 = '<div class="alert alert-danger">
                    Password is required.
                </div>';
            }  
            if(empty($captcha)){
                $emptyError6 = '<div class="alert alert-danger">
                    Captcha is required.
                </div>';
            }           
        }
    }

?>