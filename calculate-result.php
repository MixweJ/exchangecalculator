<?php
//1.รับค่าจาหน้าแรก
//2.post
$thb = $_POST['thb'];
$type = $_POST['type'];

?>


<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
      <title>Exchange rate</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <div class="container">
      <div class="list-group-item list-group-item-action active">

      <?php
      echo "ค่าที่กรอกคือ".$thb;
      echo "<br>";
      echo "สกุลเงินที่ใช้คำนวณ".$type." ";
      echo "<br>";
      ?>
      </div>
      <?php
      if ($type == "usd") {
          $result = $thb/31.2273;
      }
      elseif ($type == "jyp") {
          $result = $thb/28.9814;
      }
      elseif ($type == "krw") {
          $result = $thb/0.0290;
      }
      elseif ($type == "gbp") {
          $result = $thb/43.3292;
      }
      elseif ($type == "eur") {
          $result = $thb/38.2737;
      }
      ?>
      <div class="list-group-item">
        <?php
      echo "Result 1"." ".$result;

      require 'connect.php';
      $sql = "INSERT INTO exch142_history(thb,calculated,currency) VALUES($thb,$result,'$type')";
      $sql_exe = $conn ->query($sql);
      print($sql_exe);
      // 2
      if ($type == "usd") {
          $rate=31.2273;
      }
      elseif ($type == "jyp") {
          $rate=28.9814;
      }
      elseif ($type == "krw") {
          $rate=0.0290;
      }
      elseif ($type == "gbp") {
          $rate=43.3292;
      }
      elseif ($type == "eur") {
          $rate=38.2737;
      }

      echo "<br>"."Result 2"." ".$thb/$rate;


      // 3
      switch ($type) {
        case 'usd':
          $rate=31.2273;
          break;
        case 'jyp':
          $rate=28.9814;
        break;
        case 'krw':
          $rate=0.0290;
        break;
        case 'gbp':
          $rate=43.3292;
        break;
        case 'eur':
          $rate=38.2737;
        break;

        default:
          $rate=0;
          break;
      }
      echo "<br>"."Result 3"." ".$thb/$rate;

      ?>
    </div>
    <?php
    $sql = "SELECT * FROM `exch142_history` ORDER BY `exch142_history`.`dateRecord` DESC";
    $sql_exe = $conn->query($sql);
    echo '<table class="table table-striped">';
    while ($row = mysqli_fetch_assoc($sql_exe)){
      ?>
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <td scope="col"><?php echo"<br>".$row['thb'];?></td>
            <td scope="col"><?php echo"exchage to ".$row['currency'];?></td>
            <td scope="col"><?php echo" = ".$row['calculated'];?></td>
            <td scope="col"><?php echo" ".$row['dateRecord'];?></td>
      <?php

      ?>
          </tr>
        </thead>
      </table>

      <a href="delete.php?id=<?php echo $row['recordID']
                                  ?>&thb=<?php echo $row['thb'];?>">Delete</a>
      <?php
    }
      $conn->close();
    ?>
    </div>
  </body>
</html>
