<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Tipe Data</title>
</head>
<body>
  <h1>Belajar Tipe Data</h1>


  <?php
  echo "<h2>Tipe Data Integer</h2>";
  $a = 10;
  $b = 5;
  $c = $a + 5;
  $d = $b + (10 * 5);
  $e = $d - $c;

  echo "variable A = $a <br>";
  echo "variable B = $b <br>";
  echo "variable C = $c <br>";
  echo "variable D = $d <br>";
  echo "variable E = $e <br>";
  var_dump($e);
  echo "<br>";
  $name = ["agus", "wahyu", "yordi"];
  echo $name[1];
  echo "<br>";
  var_dump($name)

  ?>
</body>
</html>