<?php include 'connect.php';
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>