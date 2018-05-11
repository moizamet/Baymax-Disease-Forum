 <?php

  require_once 'backend/database_connect.php';

              if (isset($_SESSION['uid']) && ($_SESSION['uid']!=null))
              {
                  session_destroy();
                  header('Location:index.php');
                
              }
                include_once 'style/head.php';
  include_once 'style/left.html';
             
  ?>
  <style type="text/css">
    td{
      margin: 20px;
    }
  </style>
 
 <div style="padding-bottom : 30px;">
        <div class="col-lg-offset-3" style="font-size: 16px;" >


         <div class="jumbotron" style="background-color:#4FFF1E;color:white;margin:20px;">
         <h3 align="center"> Logout  Successfully !!</h3>
         <center>
         <a  href="item_render.php" class="btn btn-lg btn-primary text-center" style="width:200px;">Explore More </a>
         <a  href="login.php" class="btn btn-lg btn-primary text-center" style="width:200px;">Login Again </a>
         </center>
         </div>

  
  
    </div>
  </div>
   <?php include_once 'style/footer.html';?>#75FF4FFF
