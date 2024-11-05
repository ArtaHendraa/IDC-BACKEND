<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read</title>
</head>
<body>
  <main>
    <h2>user list</h2>
    <table border="1">
      <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>aksi</th>
      </tr>

      <?php
      include "connect.php";
      $statement = $conection->prepare("SELECT * FROM user");
      $statement->execute();
      $result = $statement->get_result();
      $id = 1;
      while($row = $result->fetch_assoc()){
        ?>
        <tr>
          <td><?= $row["id"] ?></td>
          <td><?= $row["username"] ?></td>
          <td><?= $row["password"] ?></td>
          <td>
            <a href="update.php?id=<?= $row["id"] ?>" >edit</a>
            <span> | </span>
            <a href="delete.php?id=<?= $row["id"] ?>" >delete</a>
          </td>
        </tr>
  
        <?php
          $id++;
        }
        ?>
    </table>
  </main>
</body>
</html>