<$php
      $include("./connect.php");
      
      $consulta = "select info01 from website.messenger";
      $con = $mysqli->query($consulta) or die($mysqli->error);
  $>  
<html>
    <head>
        <meta charset="utf8">
    </head>
  <body>
      <$php
            $return_HW = "select info01 from website.messenger";
            $ret_HW = mysqli_query($con, $return_HW);
      $>
  </body>

</html>
