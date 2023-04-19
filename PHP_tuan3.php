<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- //in ra hinh tam giac -->
  <?php
  for ($i = 0; $i < 20; $i++) {
    for ($j = (20 - $i); $j < 20; $j++) {
      echo "*";
    }
    echo "<br>";
  }
  ?>
  <!-- //in ra hinh chu nhat -->
  <?php
  for ($i = 0; $i < 10; $i++) {
    echo "<br>";
    for ($j = 0; $j < 20; $j++) {
      echo "*";
    }
  }
  ?>
  <!-- //in ra bang cuu chuong -->
  <?php
  echo "<br>";
  for ($i = 2; $i <= 9; $i++) {
    for ($j = 1; $j <= 10; $j++) {
      echo "$i x $j =" . ($i * $j);
      echo "<br>";
    }
    echo "---";
    echo "<br>";
  }
  ?>
  <!-- tinh tong so le tu 1->n -->
  <?php
  $n = 5;
  $s = 0;
  for ($i = 0; $i <= $n; $i++) {
    $s += $i;
  }
  echo "tong= " . ($s);

  ?>


</body>

</html>