<?php 
include("connect.php");

      $sql = "select info01 from website.messengers";
      $result= $mysqli->query($sql);
      $row = $result->fetch_row();
?>
<html>
    <head>
        <meta charset="utf8">
    </head>
  <body>
      <h2>
        Server: <?php echo gethostname();?>
      </h2>
      <h1>
        <?php {echo($row[0]);}?>
      </h1>
  </body>
</html>

