  <?php
  include_once 'modules/head.php';
  // include_once 'style/left.html';
  ?>
 <style type="text/css">
   .yo
   {
    color: red;
   }
   #tt
   {
    color:white;
    font-size: 25px;
   }

 </style>
 <script type="text/javascript">
    function raj(){
      document.getElementById("def").style.display="none";
      document.getElementById("raj").style.display="block";
      document.getElementById("tn").style.display="none"; 
      document.getElementById("kar").style.display="none";  
    }
    function tn()
    {
      document.getElementById("def").style.display="none";
      document.getElementById("raj").style.display="none";
      document.getElementById("tn").style.display="block";  
      document.getElementById("kar").style.display="none";  
    }
    function kar()
    {
      document.getElementById("def").style.display="none";
      document.getElementById("raj").style.display="none";
      document.getElementById("tn").style.display="none"; 
      document.getElementById("kar").style.display="block"; 
    }
  </script>
 <div style="padding-bottom : 30px;">
        <div  style="padding: 60px;">
         <div id="container">
    <h2 align="center"> Disease in your area! </h2>
    <div id="statenav" style="">
      <button style="color: brown;font-weight: bolder;width:33%;" onclick="raj()">RAJASTHAN</button>
      <button style="color: brown;font-weight: bolder;width:33%;" onclick="tn()">TAMIL NADU</button>
      <button style="color: brown;font-weight: bolder;width:33.3%;" onclick="kar()">KARNATAKA</button>
    </div>
    <div id="def" style="margin-top: 20px;position: absolute;">
      <h1>Select Area</h1>
    </div>
    <div id="raj" style="margin-top: 20px;position: absolute;display: none;">
      <p>Rajasthan Area Disease</p>
      <?php
      $query="select * from disease where area=1;";
      $result=mysqli_query($connect,$query);
      if ($result)
      {
          while($item=mysqli_fetch_array($result))
          {
        ?>
         <a id="tt"href="<?php echo $item['name'].'.php'; ?>" <p> <?php echo $item['name'] ?></p></a>
  <?php
    }
    
}
else
{
    echo "not found";
}
      ?>
    </div>
    <div id="tn" style="margin-top: 20px;position: absolute;display: none;">
      <p>Tamil Nadu Area Disease</p>
 <?php
      $query="select * from disease where area=2;";
      $result=mysqli_query($connect,$query);
      if ($result)
      {
          while($item=mysqli_fetch_array($result))
          {
        ?>
         <a id="tt"href="<?php echo $item['name'].'.php'; ?>" <p><?php echo $item['name'] ?></p></a>
  
  <?php
    }
    
}
else
{
    echo "not found";
}
      ?>

    </div>
    <div id="kar" style="margin-top: 20px;position: absolute;display: none;">
      <p>Karnataka Area Disease :- </p>

       <?php
      $query="select * from disease where area=3;";
      $result=mysqli_query($connect,$query);
      if ($result)
      {
          while($item=mysqli_fetch_array($result))
          {
        ?>
         <a id="tt" href="<?php echo $item['name'].'.php'; ?>" <p><?php echo $item['name'] ?></p></a>
  
  <?php
    }
    
}
else
{
    echo "not found";
}
      ?>

    </div>
    <div style="height: 100px;">
      
    </div>
  </div>
      </div>
      </div>


    <?php include_once 'modules/footer.html';?>
