<?php
include "connect.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  // tangkap data
  $username = $_POST["username"];
  $password = $_POST["password"];

  // cocokan dengan database
  $statement = $conection->prepare("INSERT INTO user (username, password) VALUES(?, ?)");
  $statement->bind_param("ss", $username, $password);

  // eksekusi
  if($statement->execute()) {
    echo "berhasil menambah data";
  } else {
    echo "gagal menambah data";
  }

  // close
  $statement->close();
  $conection->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
</head>
<style>
  * {
  margin: 0;
  padding: 0;
}

body {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

form {
  max-width: 50%;
}

input {
  height: 30px;
  width: 50%;
  border-radius: 10px;
  padding: 2px 5px;
}

button {
  width: 50%;
}

</style>
<body>
  <form action="" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
</body>
</html>