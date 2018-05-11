<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Baymax Personal Health Companion</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="static/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="static/css/mystyle.css">

  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="disease.php">Explore Content</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
          <li><a href="diseaseAreas.php">Area Disease</a></li>
          <li><a href="register_type.php">Register</a></li>

          <?php
            session_start();
              if (isset($_SESSION['uid']) && ($_SESSION['uid']!=null))
              {
                echo '<li><a href="logout.php">Logout</a></li>';
              }
              else
              {
                echo ' <li><a href="login_type.php">Sign in</a></li>';
              }
            ?>
         
          <li><a href="#footer">About Us</a></li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="banner">
  <div class="bg-color" style="padding: 150px 0px 0px 320px;">
        <h1 class="backcontent" style="margin-left: 130px; color: white; font-family: verdana;font-size: 80px;">Baymax  </h1>
        <h2 style=" color: white; font-family: verdana;font-size: 30px;">Your Personal Health Care Companion</h2>
        <a align="center" href="predict_form.php" class="btn btn-lg btn-primary" style="width:300px;height:50px;margin-left:150px;">Search For symptoms</a>
        </div>
  </div>
  

  
  
 </div>



      <div class="container marketing">

    
        <div style="height:100px;">


        </div>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/mumps.jpg" alt="Los Angeles" style="width:100%;height: 500px;">
        <div class="carousel-caption">
          <p><a href="#mumps" class="btn btn-lg btn-danger" style="width: 150px;" >Mumps <br/>Show Details</a></p>
        </div>
      </div>

      <div class="item">
        <img src="images/measles-in-children.jpg" alt="Chicago" style="width:100%;height:500px">
        <div class="carousel-caption">
          
          <p><a href="#measles" class="btn btn-lg btn-danger" style="width: 150px;" >Measles <br/>Show Details</a></p>
         </div>
      </div>

      <div class="item">
        <img src="images/Jaundice.jpg" alt="New York" style="width:100%;height: 500px; ">
        <div class="carousel-caption">
          <h3></h3>
                  <p><a href="#jaundice" class="btn btn-lg btn-danger" style="width: 150px;margin-left:20px;" >Jaundice <br/>Show Details</a></p>
        </div>
      </div>

    
      <div class="item">
        <img src="images/typhoid.jpg" alt="New York" style="width:100%;height: 500px; ">
        <div class="carousel-caption">
                  <p><a href="#typhoid" class="btn btn-lg btn-danger" style="width: 150px;margin-top: 40px;" >Typhoid <br/>Show Details</a></p>
        </div>
      </div>

      

      <div class="item">
        <img src="images/chickenpox.jpg" alt="New York" style="width:100%;height: 500px; ">
        <div class="carousel-caption">
       
                  <p><a href="#chickenpox" class="btn btn-lg btn-danger" style="width: 150px;" >Chicken Pox <br/>Show Details</a></p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"> < </span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"> > </span>
      <span class="sr-only">Next</span>
     </a>
  </div>

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">
        <div class="jumbotron" style="background-color:#333;color:white">
          <h1 class="text-center" style="font-size:60px;">Register to Check Symptoms</h1>
          <p class="text-center" style="margin-top:30px;">
              <a href="register_type.php" class="btn btn-lg btn-primary">Register </a>
            </p>
        </div>
        <div class="container text-center"><h1 style="padding:30px;">Information About Different Dieseases</h1></div>
        
        
        <hr id="mumps" class="featurette-divider">

        <div  class="row featurette" style="margin-top:50px;">
            <div class="col-md-7">
              <h1 class="featurette-heading"><u>Mumps</u></h1>
              <p class="lead">Mumps is a viral disease caused by the mumps virus.  The virus is transmitted by respiratory droplets or direct contact with an infected person. Only humans get and spread the disease.</p>
            </div>
            <div class="col-md-5">
              
            </div>
          </div>
  
          <hr id="measles" class="featurette-divider" style="height:100px;">

          <div  class="row featurette">
              <div class="col-md-7 order-md-2">
                  <h1 class="featurette-heading"><u>Measles</u></h1>
                <p class="lead">Measles is a highly contagious infectious disease caused by the measles virus. A red, flat rash which usually starts on the face and then spreads to the rest of the body typically begins three to five days after the start of symptoms..</p>
              </div>
              <div class="col-md-5 order-md-1">
                 
              </div>
            </div>
    
            <hr id="jaundice"  class="featurette-divider" style="height:100px;">

            <div class="row featurette" style="margin-top:50px;">
                <div class="col-md-7">
                  <h1 class="featurette-heading"><u>Jaundice</u></h1>
                  <p class="lead">Jaundice ia s linear disorder which happen due to the release of a substance called bilirubin in the blood. This discharge of substance given the skin and urine the dark yellow color</p>
                </div>
                <div class="col-md-5">
                   
                </div>
              </div>
      
              <hr id="typhoid" class="featurette-divider" style="height:100px;">

        

          <div   class="row featurette">
              <div   class="col-md-7 order-md-2">
                  <h1 class="featurette-heading"><u>Typhoid</u></h1>
                <p class="lead">Typhoid fever is an acute infectious illness associated with fever that is most often caused by the Salmonella typhi bacteria. The bacteria are deposited through fecal contamination in water or food by a human carrier and are then spread to other people in the area</p>
              </div>
              <div class="col-md-5 order-md-1">
                  
              </div>
            </div>
    
            <hr id="chickenpox" class="featurette-divider" style="height:100px;">


            <div class="row featurette" style="margin-top:50px;">
                <div  class="col-md-7">
                  <h1 class="featurette-heading"><u>Chicken Pox</u></h1>
                  <p class="lead">Chickenpox is usually a mild disease that most children will encounter at some point in their lives
It cause a red rash that turn into blister filled with fluid they then dry over and become scabs before they fall off.
Once the fever has gone, take a lukewarm bath. Try using an oatmeal or cornstarch bath as this can soothe the skin
Avoid extensive exposure to heat and humidity as this will make the blisters itch.
Antivirals are also prescribed to people with severe symptoms</p>
                </div>
                <div class="col-md-5">
                    
                </div>
              </div>
      
              <hr class="featurette-divider" style="height:100px;">


  

        
       

        <!-- /END THE FEATURETTES -->

      </div>







 
  <section>
    
  </section>
  <!--/ Faculity member-->
 
 
  
  <?php include_once 'modules/footer.html';?>
  <!--/ Footer-->

  <script src="static/js/jquery.min.js"></script>
  <script src="static/js/jquery.easing.min.js"></script>
  <script src="static/js/bootstrap.min.js"></script>
  <script src="static/js/custom.js"></script>
  <script src="static/contactform/contactform.js"></script>

</body>

</html>
