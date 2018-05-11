<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IWP J Component</title>
 
  <?php
  include_once 'backend/database_connect.php';
  ?>
  <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans"> -->
  <link rel="stylesheet" type="text/css" href="static/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="static/css/mystyle.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/imagehover.min.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
    ======================================================= -->
    <script type="text/javascript" src="js/formvalidation.js"></script>
  </head>
  <body style="background-color:#198">
    <!--Navigation bar-->

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="user_profile.php"> <span>
            <?php
               if ((isset($_SESSION['uid']) && ($_SESSION['uid']!=null)))
               {
                  echo 'Welcome '.$_SESSION['username'];
                }
          ?>
          </span></a>
          <a class="navbar-brand" href="predict_form.php"><span> Check For Symptoms
          </span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="diseaseAreas.php">Area Disease</a></li>

            <li><a href="register_type.php">Register</a></li>

            <?php
              if (isset($_SESSION['uid']) && ($_SESSION['uid']!=null))
              {
                echo '<li><a href="logout.php">Logout</a></li>';
                if (isset($_SESSION['doctor']) && ($_SESSION['doctor']!=null))
                {
                  echo '<li><a href="doctor_view.php">New Query</a></li>';

                }
                else
                {
                  echo '<li><a href="predict_form.php">Predict</a></li>';
                }
                

              }
              else
              {
                echo '<li><a href="login_type.php">Sign in</a></li>';
              }
            ?>
            
            <!-- <li><a href="#" data-target="#login" data-toggle="modal">Sign in</a></li> -->
            <li class="btn-trial"><a href="#footer">About Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
    <!--Modal box-->
    

    
    
    <div style="height: 70px;"></div>
    <div class="jumbotron jumbotron-fluid" style="background-color: white;padding-bottom:0px;">
      <div class="container" style="padding: 0px;">
        <h1  align="center" class="display-1" style="padding:0px; margin-top: 0px;">BAYMAX</h1>
        <?php if (isset($_SESSION['uid']) && $_SESSION['uid']!=null)
        {

          ?>
       <div>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Care Companion</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="disease.php">My Forum</a></li>

    </ul>
  </div>
  <?php
  } ?>
</nav>
</div>
      </div>
    </div>
    
</div>
      