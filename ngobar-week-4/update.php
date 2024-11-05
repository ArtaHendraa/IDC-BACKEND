<?php
include "connect.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $id = $_POST["id"];
  $username = $_POST["username"];
  $password = $_POST["password"];

  $statement = $conection->prepare("UPDATE user SET username = ?, password = ? WHERE id = ?");
  $statement->bind_param("ssi", $username, $password, $id);

  if($statement->execute()){
    echo "update berhasil";
  }else{
    echo "update gagal";
  }
  
  $statement->close();
  $conection->close();
} else {
  $id =  $_GET['id'];
  $statement = $conection->prepare("SELECT * FROM user WHERE id = ?");
  $statement->bind_param("i", $id);
  $statement->execute();
  $result = $statement->get_result();
  $row = $result->fetch_assoc();
  $username = $row["username"];
  $password = $row["password"];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
</head>
<body>
  <form action="" method="POST">    
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
</body>
</html>