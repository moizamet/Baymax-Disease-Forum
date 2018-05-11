
Conversation opened. 1 read message.

Skip to content
Using Gmail with screen readers
 
 
More 
1 of many
 
forms
Inbox
  x
ashutosh bhataiya
  
Attachments6:00 PM (5 minutes ago)
  
to me

4 Attachments
  
Click here to Reply or Forward
0.97 GB (5%) of 17 GB used
Manage
Terms - Privacy
Last account activity: 50 minutes ago
Details
  
  

  <?php
  include_once 'modules/head.php';
  // include_once 'style/left.html';
  ?>
<link rel="stylesheet" type="text/css" href="static/css/Login.css">
 <style type="text/css">
   
   p{
    color: black;
   }
   h2{
    color: green;
   }
 </style>
 <script type="text/javascript" src="static/js/webthon.js"></script>
 <div style="padding-bottom : 30px;">
        <div style="" class="col-lg-offset-3 formstyle" >
          <div id="loginbox" style="background: #3CB4FFFF;padding: 10px;">
            
            <h2>Login Here</h2>
            <form id="userlogin" name="userlogin" method="POST" action="backend/user_login.php">
              <p>Email:
              <br>
              <input type="text" name="uname" placeholder="Enter Email">
              <br>
              <span id="uname"></span>
              </p>
              <p>Password:
              <br>
              <input type="Password" name="upass" placeholder="Enter Password">
              <br>
              <span id="upass"></span></p>
              <p>
                <?php
          if (isset($_GET['msg'])&&($_GET['msg']!=null))
          {
            echo $_GET['msg'];
          }
          ?>
                
              </p>
              <input type="submit" name="submitbtn" value="LOGIN">

            </form>
          </div>
         
          
        </div>
      </div>
      </div>
    <?php include_once 'modules/footer.html';?>

login.php
Displaying login.php.