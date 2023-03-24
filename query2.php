 <?php 
include("config.php");
$query="SELECT * FROM query";
$result=mysqli_query($con,$query);
  ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="table.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body >
    
    <div id="content" style="position: relative; top: 00px; right: 00px;">
  <table style="position: relative;left: 100px;" class="responstable">
  <tr>
    <th style=" width: 100px;">Queries:</th>
    
  </tr>
      <?php
        while($temp=$result->fetch_assoc())
        { 
        ?>  
  <tr>
    <td style=" width: 10px;"><?php echo $temp['query'] ?></td>
    
  </tr>
        <?php
        }
      ?>
      </table>
    </div>
    </div>
  </div>
<script>
  function appoint() 
  {let t= document.getElementById('content');
   t.load("Appoint.html");
  }
</script>
    
</body>
</html>