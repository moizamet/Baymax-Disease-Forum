  <?php
  include_once 'modules/head.php';
  // include_once 'style/left.html';
  ?>
 <style type="text/css">
   .yo
   {
    color: red;
   }
 </style>
 <div style="padding-bottom : 30px;">
        <div style="" class="col-lg-offset-3 formstyle" >
          <table cellpadding="10px" width="100%" style="color:white; font-weight: bolder; font-size: 15px;"  >
        <tr>
        <th>Discussion </th><th>View</th>
        </tr>

<?php

if (isset($_SESSION['doctor'])&&$_SESSION['doctor']!=null)
{
  $test=0;

$query="select * from forum where did=".$_SESSION['uid'];
$result=mysqli_query($connect,$query);
  if ($result)
  {
      while($item=mysqli_fetch_array($result))
      {
        $test=$test+1;
        }
      

  }
  if ($test==0)
  {
    $query="select * from forum;";
  }
}
else if (isset($_SESSION['uid'])&&$_SESSION['uid']!=null)
{
  echo "patient";
$query="select * from forum where patient_id=".$_SESSION['uid'];
$tt=0;
$result=mysqli_query($connect,$query);
    if ($result)
    {
      $rownum=mysqli_num_rows($result);
      if ($rownum==0)
      {
        echo '<p style="color:white;font-size:15px;">Your Query has not been address by any doctor yet. You will Soon get Reply. </p>';
        
        }
      }



}
else
{
$query="select * from forum;";

}
$result=mysqli_query($connect,$query);
if ($result)
{
    while($item=mysqli_fetch_array($result))
    {
  ?>

  
  <?php
  echo "<tr><td>".$item['date']."</td>";
  echo '<td><a href="forum.php?iid='.$item['pid'].'" class="btn btn-success">View</a></td>';
  // echo '<td><a href="delete_item.php?id='.$item['id'].'" class="btn btn-danger">Delete</a></td></tr>';

    }
    
}
else
{
    echo "not found";
}
?>
</table>
         
          
        </div>
      </div>
      </div>
    <?php include_once 'modules/footer.html';?>
