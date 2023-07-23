<?php include 'connect.php';
$img_url = $_POST['img_url'];
$txt_title = $_POST['txt_title'];
$txt_product = $_POST['txt_product'];
$btn_link = $_POST['btn_link'];

$sql = "INSERT INTO `shop`(`txt_name`, `txt_address`, `txt_credit`, `txt_phonenumber`)
VALUES ('$img_url', '$txt_title', '$txt_product', '$btn_link')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>