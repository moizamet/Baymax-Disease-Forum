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

if (isset($_SESSION['doctor'])&&($_SESSION['doctor']!=null_))
{

      $query="select * from symptoms where sid not in (select distinct(sid) from forum )";
      $result=mysqli_query($connect,$query);
      if ($result)
      {
          while($item=mysqli_fetch_array($result))
          {
        ?>
        <?php
        echo "<tr><td>".$item['date']."</td>";
        echo '<td><a href="forum.php?pid='.$item['pid'].'&sid='.$item['sid'].'" class="btn btn-success">View</a></td>';
      // echo '<td><a href="delete_item.php?id='.$item['id'].'" class="btn btn-danger">Delete</a></td></tr>';

        }
      }
       else
    {
    echo "Error";

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
