<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>userdisp</title>
</head>
<body>
  <?php
    $connection=mysqli_connect("localhost","root","","registration");

    if ($connection) {
      echo "Connection established! <br>";
    } else {
      die("Connection failed. Reason:".mysqli_connect_error());
    }

    $sql="SELECT username, user_type FROM registration";

    $results=mysqli_query($connection,$sql);

    if (mysqli_num_rows($results)>0){
      
      while($row=mysqli_fetch_array($results)) {
        echo $row[1]."".$row[4]."".$row[3];

        echo "<br>";
      }

    }
    mysqli_close($connection);

  ?>
</body>
</html>  