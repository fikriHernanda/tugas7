<?php
include "connect.php";

$id= $_GET['id'];

$sql ="DELETE FROM bukutelepon where id='$id'";

$res = mysqli_query($link,$sql);

mysqli_close($link);

header ('location:select.php');
exit;