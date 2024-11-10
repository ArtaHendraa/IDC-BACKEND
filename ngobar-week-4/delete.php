<?php

include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    $statement = $conection->prepare("DELETE FROM user WHERE id = ?");
    $statement->bind_param("i", $id);

    if ($statement->execute()) {
        echo "berhasil menghapus data";
        return header("Location: read.php");
    } else {
        echo "terjadi kesalahan dalam menghapus data";
        return header("Location: read.php");
    }

}