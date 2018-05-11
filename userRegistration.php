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
 
 <div style="padding-bottom : 30px;background-color: #eaeff3;">
        <div class="col-lg-offset-3 formstyle" style="font-size: 16px;width: 550px;" >
          
         <div id="signupbox">
        <img src="user.png" id="userImg">
        <h2>Sign Up Here</h2>
        <form name="usersignup" method="POST" action="backend/userreg.php">
          <br>
          <label for="name">Full Name:</label>
          <input type="text" name="uname"  id="name" placeholder="Enter Full Name">
          <span id="uname"></span>
          <br>
          <label for="phone">Mobile Number:</label>
          <input type="text" name="uphone" id="phone" placeholder="Enter Mobile Number">
          <span id="uphone"></span>
          <br>
          <label for="uemail">Email:</label>
          <input type="text" name="uemail" id="email" placeholder="Enter E-mail">
          <span id="uemail"></span>
          <br>
          <label for="age">Age:</label>
          <input type="text" name="uage" id="age" placeholder="Enter Age">
          <span id="uage"></span>
          <br>
          <label for="zipcode">Zip Code:</label>
          <input type="text" name="uzip" id="zipcode" placeholder="Enter Mobile Number">
          <span id="uzip"></span>
          <br>
          <label for="pass">Password:</label>
          <input type="Password" name="upass" id="pass" placeholder="Enter Password">
          <span id="upass"></span>
          <br>
          <label for="passr">Re-Type Password:</p>
          <input type="Password" name="upassr" id="passr" placeholder="Re-Type Password">
          <span id="upassr"></span>   
          <br> 
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
  </div>
   <?php include_once 'modules/footer.html';?>
