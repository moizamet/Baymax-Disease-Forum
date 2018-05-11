<?php
  include_once 'modules/head.php';
  // include_once 'style/left.html';
  ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="static/css/Login.css">
 <style type="text/css">
   
   p{
    color: black;
   }
   h2{
    color: black;
   }
 </style>
 <script type="text/javascript" src="static/js/webthon.js"></script>
 <div style="padding-bottom : 30px;">
        <div style="" class="col-lg-offset-3 formstyle" >
          
         <div id="loginbox" style="background: #3CB4FFFF;padding:10px;">
    <!--<img src="user.png" id="user">-->
    <div id="user" style="background: green;top: 470px;left:670px;" >
          <i class="fa fa-user-md" aria-hidden="true" style="font-size:80px;margin-left: 18px; margin-top:5px;color: white;"></i>
        </div>
        <h2>Login Here</h2>
    <form id="doctorlogin" onsubmit="return validate_doctorlogin()" method="POST" action = "backend/doc_login.php" name="doctorlogin">
      <p>Username:
      <br>
      <input type="text" name="dname" placeholder="Enter Username"">
      <br>
      <span id="dname"></span></p>
      <p>Password:
      <br>
      <input type="Password" name="dpass" placeholder="Enter Password">
      <br>
      <span id="dpass"></span></p>
      <input  class="btn btn-primary" type="submit" name="submitbtn" value="LOGIN">
      <br>
      <p>
                <?php
          if (isset($_GET['msg'])&&($_GET['msg']!=null))
          {
            echo $_GET['msg'];
          }
          ?>
                
              </p>
      
    </form>
  </div>
          
        </div>
      </div>
      </div>
    <?php include_once 'modules/footer.html';?>