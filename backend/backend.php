<?php include 'select.php';
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "Image URL: " . $row["img_url"]. " - Prices: " . $row["txt_title"]. "Product: " . $row["lastname"]. "Button Link to: " . $row["btn_link"]. "<br>";
    }
  } else {
    echo "0 results";
  }
?>