  <?php
  include_once 'modules/head.php';
  include_once 'backend/database_connect.php';
  
  ?>
 <style type="text/css">
  th{
    text-align: center;
    background:#2854E2;
    padding:10px;
  }
  hr{
    size: 2;
  }
  p{
    color: orange;
    font-weight: bolder;
    font-size: 20px;
  }
  td{
    padding:10px;
    text-align: center;
  }
 </style>
 <div style="padding-bottom : 30px;">
        <div style="padding:40px;" >
          <div id="jumbotron " style="color:white;">
    <h1 align="center">PRESCRIPTION DETAILS</h1>
    <br>
    <hr>
    <div id="pdetails">
      <h2 align="center">Patient and Disease Details</h2>
      <table align="center" border="2" width="100%" style="border-color:#2854E2; ">
        <tr>
          <th>NAME</th>
          <th>AGE</th>
          <th>ZIPCODE</th>
        </tr>
        <tr>
         <?php

         if (isset($_GET['iid'])&&($_GET['iid']!=null))
         {
                   $iid=$_GET['iid'];
         
                 $query="select * from forum where pid=".$iid;
                  $result=mysqli_query($connect,$query);
                    if ($result)
                    {
                     
                        while($item=mysqli_fetch_array($result))
                        {
                          $patient_id=$item['patient_id'];
                          $sid=$item['sid'];
                          $doctor_id=$item['did'];
                          $pres=$item['prescription'];
                          echo $patient_id;
                        }
                      }
                      else
                      {
                        echo "no fetching";
                      }

         }
         else if (isset($_GET['pid'])&&($_GET['pid']!=null))
         {
            $patient_id=$_GET['pid'];
            $sid=$_GET['sid'];
         }
         else
         {

         }


// get pateient detail

          $query="select * from patient where mid=".$patient_id;
          $result=mysqli_query($connect,$query);
            if ($result)
            {
                while($item=mysqli_fetch_array($result))
                {
                  echo $item['zipcode'];
                  ?>
                <td><?php echo $item['name'];?></td>
                <td><?php echo $item['age'];?></td>
                <td><?php echo $item['zipcode'];?></td>




                  <?php
                }
              }




         ?>
        </tr>
      </table>
      <br>
      <br>
      <p align="center" style="color:white">SYMPTOMS</p>
       <table align="center" border="2" width="100%" >
       

<?php

if (isset($sid))
{



      $query="select * from symptoms where sid=".$sid;
          $result=mysqli_query($connect,$query);
            if ($result)
            {
                while($item=mysqli_fetch_array($result))
                {
                  
                  ?>
                  <tr>
            <td>Fever:</td>
            <td><?php echo $item['fever'];?></td>
            </tr>
             <tr>

            <td>Appetite:</td><td><?php echo $item['appitite'];?></td>
             </tr>
             <tr>
            <td>Headache:</td><td><?php echo $item['head'];?></td>
             </tr>
             <tr>
              <td>Weakness:</td><td><?php echo $item['weak'];?></td>
               </tr>
             <tr>
              <td>Body Ache:</td><td><?php echo $item['body'];?></td>
               </tr>
             <tr>
            <td>Other:</td><td><?php echo $item['other'];?></td>
             </tr>
             <tr>
            <td>Extra:</td><td><?php echo $item['extra'];?></td>
             </tr>
             <tr>
              <td>You have:</td><td><?php echo $item['predict'];?></td>
               </tr>
 



                  <?php
                }
              }
              }
if (isset($sid))
        {
?>
</table>
      <br>
      <hr>
    </div>
    <div id="ddetails">
      <h2 align="center">Doctor Prescriptions</h2>
        
        <?php
        // $query="select * from doctor where did=".$doctor_id;
        

        
        $query="select prescription,name,dcode,email,f.did from doctor d join forum f on d.did=f.did where sid=".$sid;
          $result=mysqli_query($connect,$query);
            if ($result)
            {
              if (mysqli_num_rows($result)>0)
              {
                ?>
                <table align="center" border="2" width="100%" style="border-color: 
        gray;">
        <tr>
                              <th>NAME</th>
                              <th>CODE</th>
                              <th>EMAIL</th>
                              <th>PRESCRIPTION</th>
                            </tr>
                            <?php
              }
                while($item=mysqli_fetch_array($result))
                {
                  ?>
                    <tr>
                      <td><?php echo $item['name'];?></td>
                      <td><?php echo $item['dcode'];?></td>
                      <td><?php echo $item['email'];?></td>
                      <td><?php echo $item['prescription'];?></td>
                    </tr>
                            
                  <?php
                }
              }
              else
              {
              }

              ?>
        
          <!--PHP CODE HERE -->
       
      </table>
      <br>
      <br>
      <br>
      <hr>
    </div>
    <?php
  }
    if (isset($_SESSION['doctor'])&&$_SESSION['doctor']!=null)
{
  ?>
    <div id="newprescription">
      <h2 align="center">Give Prescription Here</h2>
      <form name="presc" onsubmit="return validate()" method="POST" action="backend/forum_reg.php" style="color:black">
        <table align="center">
          <tr>
            <td><label>Enter Prescription:</label></td>
            <td><textarea cols="40" rows="7" name="pres" placeholder="Enter Prescription"></textarea></td>
            <input type="hidden" value="<?php echo $sid;?>" name="sid">
            <input type="hidden" value="<?php echo $patient_id;?>" name="pid">
            <input type="hidden" value="<?php echo $_SESSION['uid'];?>" name="did">

            
          </tr>
          <tr>
            <td colspan="2" align="center"><span id="pres"></span></td> 
          </tr>   
          <tr>
            <td colspan="2" align="center"><input class="btn btn-primary" type="submit" name="submitbtn" value="SUBMIT"></td>
          </tr>       
        </table>
      </form>
        <?php
}
        ?>
    </div>
  </div>
         
          
        </div>
      </div>
      </div>
    <?php include_once 'modules/footer.html';?>

