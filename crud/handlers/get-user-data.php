<?php

$sql="SELECT id,name,email,status FROM users WHERE id=$userId";
$sqlResult=mysqli_query($conn,$sql);
$userData=mysqli_fetch_assoc($sqlResult);
?>