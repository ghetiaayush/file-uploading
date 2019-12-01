<?php
 $conn = mysqli_connect("localhost","root","","tops");
$id=$_GET['did'];
$result=mysqli_query($conn,"delete from image where id=$id");
header("Location:front.php");
?>
