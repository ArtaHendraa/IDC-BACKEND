<?php

$host = "localhost";
$user = "root";
$password = "superuser";
$db_name = "ngobar_week_4";


$conection = mysqli_connect($host, $user,$password, $db_name);


$names = ["arta", "egi", "agus", "deni","rico", "jhon doe"];
foreach($names as $name){
  echo"hello $name \n";
}
// if($conection) {
//   echo "aman";
// } else {
//   echo "error";
// }