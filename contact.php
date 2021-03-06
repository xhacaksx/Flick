<!doctype html>
<html lang="en">
	<head>
    <style>
      .map-responsive{

overflow:hidden;

padding-bottom:56.25%;

position:relative;

height:0;

}

.map-responsive iframe{

left:0;

top:0;

height:100%;

width:100%;

position:absolute;

}
      </style>
		<?php include 'components/header.php';?>

		<title>Flick | Contact Us</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Contact Us</h1>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a>
          </li>
          <li class="active">Contact Us</li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-md-8">
        <!-- Embedded Google Map -->
       <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14709.576972508732!2d75.8492891!3d22.8248992!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf627209ee16f41e9!2sShri+Vaishnav+Vidyapeeth+Vishwavidyalaya!5e0!3m2!1sen!2sin!4v1540274018853" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> -->
          <div class="map-responsive">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0409982296114!2d79.15374491413513!3d12.969228418441022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad479f0ccbe067%3A0xfef222e5f36ecdeb!2sVellore%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1650723803826!5m2!1sen!2sin" width="100%" height="400" allowfullscreen></iframe>
          </div>
      </div>
      <!-- Contact Details Column -->
      <div class="col-md-4">
        <h3>Contact Details</h3>
        
        <p><i class="fa fa-phone"></i>
          9898998989</p>
        <p><i class="fa fa-envelope-o"></i>
          <a href="#" class="text-danger">contactus@flick.com</a>
        </p>
        <p><i class="fa fa-clock-o"></i>
          Monday - Friday: 9:00 AM to 5:00 PM</p>
        <ul class="list-unstyled list-inline list-social-icons">
          <li>
            <a class="text-danger" href="http://www.facebook.com"><i class="fa fa-facebook-square fa-2x"></i></a>
          </li>
          <li>
            <a class="text-danger" href="http://www.twitter.com"><i class="fa fa-twitter-square fa-2x"></i></a>
          </li>
          <li>
            <a class="text-danger" href="http://plus.google.com"><i class="fa fa-google-plus-square fa-2x"></i></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <h3>Send us a Message</h3>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="tel" class="form-control" id="mobile" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Message:</label>
              <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-danger">Send Message</button>
        </form>
      </div>
    </div>
  </div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
		<script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contactform.js"></script>
	</body>
</html>
