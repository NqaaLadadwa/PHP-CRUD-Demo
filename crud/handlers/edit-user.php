<?php

require("db.php");
$name=$_POST['name'];
$email=$_POST['email'];
$userId=$_POST['userId'];
$status=$_POST['status'];

$sql="UPDATE users 
SET name='$name',
email='$email',
status='$status'
WHERE id=$userId";


if(mysqli_query($conn,$sql)){ ?>

    <script>alert("user updated");</script>

<?php 
header("Refresh:0;url=../index.php");
}

?>