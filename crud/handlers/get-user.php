<?php

$sql="SELECT id, name, email, status, created_at FROM users";
$sqlResult=mysqli_query($conn, $sql);
$userData=mysqli_fetch_all($sqlResult);
?>