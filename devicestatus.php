 <?php 
include("config.php");
$query="SELECT * FROM devices";
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
        <button  style="position: relative; left: 15px; cursor: pointer;" >refresh</button>


    <th style=" width: 90px;">location</th>
    <th style=" width: 90px;">MAC</th>
    <th style=" width: 90px;">Status</th>

    
  </tr>
      <?php
        while($temp=$result->fetch_assoc())
        { 
        ?>  
  <tr>
    <td style=" width: 00px;"><?php echo $temp['location'] ?></td>
    <td style=" width: 00px;"><?php echo $temp['mac'] ?></td>
    <td style=" width: 0px;"><?php echo $temp['status'] ?></td>

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