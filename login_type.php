 <?php
  include_once 'modules/head.php';
  require_once 'backend/database_connect.php'
  
  ?>
  <style type="text/css">
    td{
      margin: 20px;
    }
  </style>
 
 <div style="padding-bottom : 30px;">
        <div  style="font-size: 16px;" >


         <div class="jumbotron" style="background-color:#444;color:white;margin:20px;">
         <h3 align="center"> Select Account Type </h3>
         <center>
          
        <a  href="login.php" class="btn btn-lg btn-primary text-center" style="width:200px;">User Login</a>
         <a  href="doc_login.php" class="btn btn-lg btn-primary text-center" style="width:200px;">Doctor Login</a>
         </center>
         </div>
  
    </div>
  </div>
   <?php include_once 'modules/footer.html';?>
