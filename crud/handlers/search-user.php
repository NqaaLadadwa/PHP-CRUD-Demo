<?php

$name=$_GET['name'];
$sql="SELECT id, name, email, status, created_at FROM users WHERE name like '%$name%'";
$sqlResult=mysqli_query($conn, $sql);
$userData=mysqli_fetch_all($sqlResult);
?>