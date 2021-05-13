<?php 
include("connect.php");

      $sql = "select info01 from website.messengers";
      $result= $mysqli->query($sql);
      $row = $result->fetch_row();
      var_dump( $row );
?>
<html>
    <head>
        <meta charset="utf8">
    </head>
  <body>
      <h1>
      <?php
        {echo($row[0]);}
      ?>
      </h1>
  </body>
</html>

