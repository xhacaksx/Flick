<?php
  echo '
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><span>Flick</span></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav" id="left-nav">
            <li>
              <a href="mov-hindi.php">Movies</a>
            </li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li>
              <a href="contact.php"><span class="fa fa-phone" aria-hidden="true"></span>&nbsp;&nbsp;CONTACT US</a>
            </li>
            ';

      if(!isset($_SESSION["name"])) {
      echo '<li id="visible">
              <a href="#loginModal" data-toggle="modal" data-target="#loginModal"><span class="fa fa-sign-in" aria-hidden="true"></span>&nbsp;&nbsp;SIGN IN</a>
            </li>';
      }
      else {
        echo '
          <li id="visible" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user" aria-hidden="true"></span>&nbsp;&nbsp;YOU&nbsp;&nbsp;<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><span class="fa fa-ticket" aria-hidden="true"></span>&nbsp;&nbsp;My Bookings</a></li>
              <li><a href="profile.php"><span class="fa fa-cog" aria-hidden="true"></span>&nbsp;&nbsp;Profile</a></li>
              <li><a href="php/logout.php"><span class="fa fa-sign-out" aria-hidden="true"></span>&nbsp;&nbsp;Sign Out</a></li>
            </ul>
          </li>
        ';
      }

      echo'
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <!-- Login modal -->
    <div id="loginModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login </h4>
        </div>
        <div class="modal-body">
           <form class="form" action="php\login.php" method="post" id="signin" value="login">
             <div class="row">
              <div class="col-xs-8 col-xs-offset-2">
                <div class="form-group">
                  <label for="Email">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email" name="email"/>
                </div>
              </div>
              <div class="col-xs-8 col-xs-offset-2">
                <div class="form-group">
                  <label for="Password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="password" name="password"/>
                </div>
                <div class="form-group">
                  <label for="captcha">Captcha</label>
                  <input type="text" class="form-control" id="captcha" placeholder="captcha" name="captcha"/>
                  <img src="captcha.php">
                </div>
              </div>
             </div>
            <div class="row"><p style="padding:10px;"></p></div>
            <div class="row">
              <div class="col-xs-8 col-xs-offset-2">
                <button type="submit" class="btn btn-danger btn-block" value="login" id="submitForm" name="login">Sign In</button>
                <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
              </div>
            </div>
            <br>
          </form>

          <br>
          <p class="center-align bold text-muted">Still not connected?
            <a href="signup.php" class="text-danger">Sign up</a> here!
          </p>
        </div>
      </div>
      </div>
    </div>
  ';

?>
