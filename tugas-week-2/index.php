<?php
class Calculations {
  function squareMetrics($side) {
    echo "Luas Persegi dari sisi $side = " . $side * $side . "<br>";
    echo "Keliling Persegi dari sisi $side = " . 4 * $side . "<br>";
  }
  function rectangleMetrics($length , $width) {
    $result = ($length > $width)
        ? "Luas Persegi panjang dari panjang: $length, lebar: $width = " . $length * $width . "<br>" .
          "Keliling Persegi panjang dari panjang: $length, lebar: $width = " . 2 * ($length + $width) . "<br>"
        : "Gagal menghitung luas dan keliling persegi panjang Error: Panjang harus lebih besar dari lebar.<br>";
    echo $result;
  }

  function triangleMetrics($base, $height) {
    $result = ($base != $height)
        ? "Luas Segitiga dari alas: $base, tinggi: $height = " . 0.5 * $base * $height . "<br>" .
          "Keliling Segitiga dari alas: $base, tinggi: $height = " . $base + ($height * 2) . "<br>"
        : "Gagal menghitung luas dan keliling segitiga Error: nilai tinggi dan alas tidakboleh sama.<br>";
    echo $result;
  }

  function circleMetrics($radius) {
    echo "Luas Lingkaran dengan jari-jari $radius = " . round(pi() * pow($radius, 2), 2) . "<br>";
    echo "Keliling Lingkaran dengan jari-jari $radius = " . round(2 * pi() * $radius, 2) . "<br>";
  }
}

$calc = new Calculations();
$calc->squareMetrics(5);
$calc->rectangleMetrics(20, 10);
$calc->triangleMetrics(20, 10);
$calc->circleMetrics(10);

