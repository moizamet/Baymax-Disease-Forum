
Conversation opened. 1 unread message.

Skip to content
Using Gmail with screen readers
 
 
More 
1 of many
 
(no subject)
Inbox
  x
ashutosh bhataiya
  
Attachments5:55 PM (9 minutes ago)
  
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
  ?>
  <style type="text/css">
    td{
      margin: 20px;
    }
    .yo
    {
      color:red;
    }
  </style>
 <script type="text/javascript" src="static/js/webthon.js"></script>
 <div style="padding-bottom : 30px;background-color: #eaeff3; ">
        <div class="col-lg-offset-3 formstyle" style="font-size: 16px;width: 550px;" >
          
          <h1 align="center" style="padding-bottom: 20px;">Doctor Registration</h1>
          <h2>Sign Up Here</h2>
        <form name="doctorsignup" method="POST" action='backend/docreg.php'>
          <br>
          <label for="name">Full Name:</label>
          <input type="text" class="form-control" name="dname"  id="name" placeholder="Enter Full Name">
          <span id="dname"></span>
          
          <label for="phone">Mobile Number:</label>
          <input type="text" class="form-control" name="dphone" id="phone" placeholder="Enter Mobile Number">
          <span id="dphone"></span>
          
          <label for="email">Email:</label>
          <input type="text" class="form-control" name="demail" id="email" placeholder="Enter E-mail">
          <span id="demail"></span>
          
          <label for="drcode">Doctor Code:</label>
          <input type="text" class="form-control" name="drcode" id="drcode" placeholder="Enter Code">
          <span id="dcode"></span>
          
          <label for="spec">Specialization:</label>
          <input type="text" class="form-control" name="dspec" id="spec" placeholder="Enter Specialization">
          <span id="dspec"></span>
          
          <label for="zipcode">Zip Code</label>
          <input type="text" class="form-control" name="dzip" id="zipcode" placeholder="Enter Zipcode">
          <span id="dzip"></span>
          
          <label for="pass">Password:</label>
          <input type="Password" class="form-control" name="dpass" id="pass" placeholder="Enter Password">
          <span id="dpass"></span>
          
          <label for="passr">Re-Type Password:</label>
          <input type="Password" class="form-control" name="dpassr" id="passr" placeholder="Re-Type Password">
          <span id="dpassr"></span>   
          
          <p style="color:red">
          <?php
           if (isset($_GET['msg'])&&($_GET['msg']!=null))
          {
            echo $_GET['msg'];
          }
          ?>
          </p>
          <input type="submit" name="submit" value="Register">
          <input type="reset" name="reset">
        </form>
        
      </div>
    </div>
  </div>
   <?php include_once 'style/footer.html';?>

doc_registration.php
Displaying doc_registration.php.