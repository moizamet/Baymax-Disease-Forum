  <?php
  include_once 'modules/head.php';
  // include_once 'style/left.html';
  ?>
 <style type="text/css">
   .yo
   {
    color: red;
   }
   form{
    color:white;
   }
 </style>
 <div style="padding-bottom : 30px;">
        <div style="" class="col-lg-offset-3 formstyle" >
        <div style="padding:20px 100px 20px 30px; background-color: #3CB4FFFF">
        <h2 align="center">Enter Symptoms</h2>
          <form method="POST" action="backend/symp_reg.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email"  class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <hr>
 <label>Do you have Fever</label>
  
  <div class="form-radio">
    <input type="radio" class="form-check-input" name="fever" value="yes" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Yes</label>
  </div>
  
  <div class="form-radio">
    <input type="radio" class="form-check-input" name="fever" value="no" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No</label>
  </div>

  <!-- ------------------ -->
  <hr>
 <label>Do you loss of Appetite</label>
  
  <div class="form-radio">
    <input type="radio" class="form-check-input" name="appitite" value="yes" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Yes</label>
  </div>
  
  <div class="form-radio">
    <input type="radio" class="form-check-input" name="appitite" value="no" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No</label>
  </div>
  
  <!-- -------------------- -->

  <hr>
 <label>Do you have Headache</label>
  
  <div class="form-radio">
    <input type="radio" class="form-check-input" name="head" value="yes" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Yes</label>
  </div>
  
  <div class="form-radio">
    <input type="radio" class="form-check-input" name="head" value="no" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No</label>
  </div>

  <!-- ------------------ -->
  <hr>
 <label>Do you have Weakness</label>
  
  <div class="form-radio">
    <input type="radio" class="form-check-input" name="weak" value="yes" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Yes</label>
  </div>
  
  <div class="form-radio">
    <input type="radio" class="form-check-input" name="weak" value="no" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No</label>
  </div>
  
  <!-- -------------------- -->

  <hr>
 <label>Do you have Body Ache</label>
  
  <div class="form-radio">
    <input type="radio" class="form-check-input" name="body" value="yes" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Yes</label>
  </div>
  
  <div class="form-radio">
    <input type="radio" class="form-check-input" name="body" value="no" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No</label>
  </div>
  
  <!-- -------------------- -->

    <hr>
 <label>Select Necessary Symptoms</label>
  
  <div class="form-dropdown">
    <select name="other" style="color:black;"> 
            <option value="fatigue">Fatigue</option>
            <option value="yellow">Yellow Eyes </option>
            <option value="rashes">Rashes</option>
            <option value="cough">Cough</option>
            <option value="vomitting">Vomitting</option>
    </select>
  </div>
  
  <!-- -------------------- -->

<hr>
 <label>mention other health details</label>
  
  <div class="form-textarea">
  <textarea name="extra" style="color:black;"></textarea>
  </div>
  
 

  <!-- ----------------- -->
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
          
          
          
        </div>
      </div>
      </div>
    <?php include_once 'modules/footer.html';?>
