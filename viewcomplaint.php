 <?php 
include("config.php");
$query="SELECT * FROM complaint";
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
  <table style="position: relative; left: 100px;" class="responstable">
  <tr>
    <th style=" width: 90px;">Problems</th>
    <th style=" width: 90px;">Check</th>

    
  </tr>
      <?php
        while($temp=$result->fetch_assoc())
        { 
        ?>  
  <tr>
   <!--  <td style=" width: 70px;"><a href="presc.php?id=<?php echo $temp['id']; ?>"><?php echo $temp['id'] ?></a></td>
    <td style=" width: 100px;"><?php echo $temp['name'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['gender'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['mobile'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['problem'] ?></td> -->







    <td style=" width: 100px;"><?php echo $temp['problem'] ?></td>


  </tr>
        <?php
        }
      ?>
      </table>
    </div>
    </div>
  </div>

</body>
</html>