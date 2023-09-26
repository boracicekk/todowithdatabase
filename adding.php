<?php
include "dbconnect.php";

$username =$_POST["username"];
$todos_text = $_POST["todos_text"];
$users_id = $_POST["users_id"];


$query = "INSERT INTO todos(username,todos_text,users_id) VALUES(?,?,?)";

$stmt = mysqli_prepare($baglanti,$query);
mysqli_stmt_bind_param($stmt,'ssi',$username,$todos_text,$users_id);
mysqli_stmt_execute($stmt);
$mysqli_stmt_close($stmt);

echo "veri eklendi";
mysqli_close($baglanti);

?>