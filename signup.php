

<?php include('register.php'); ?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>PHP User Registration Form</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5" style="max-width: 500px">
        <form action="" method="post">
            <h3 class="text-center mb-5">User Registeration Form</h3>
            <?php echo $success_msg; ?>
            <?php echo $email_exist; ?>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="Name" />
                <?php echo $emptyError1; ?>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email" />
                <?php echo $emptyError3; ?>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" id="mobile" />
                <?php echo $emptyError4; ?>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" />
                <?php echo $emptyError5; ?>
            </div>
            <div class="form-group">
                <label>Captcha</label>
                <input type="text" class="form-control" name="captcha" id="captcha" />
                <img src="captcha.php">
                <?php echo $emptyError6; ?>
            </div>
            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block">
                Register
            </button>
           

        </form>
        <p class="center-align bold text-muted">already connected?
            <a href="index.php" class="text-danger">Sign up</a> here!
          </p>
    </div>

</body>
</html>