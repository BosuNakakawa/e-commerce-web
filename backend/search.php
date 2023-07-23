<?php
include 'connect.php';

if (isset($_POST["search-input"])) {
    $strKeyword = $_POST["search-input"];
}
?>

<?php
$sql = "SELECT * FROM products WHERE txt_product LIKE '%" . $strKeyword . "%' ";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>search</title>
</head>

<body>
    <h1>Search for
        <?= $strKeyword ?>
    </h1>
    <br>
    <hr class="divider">
    <div class="container">
        <div class="row">
            <?php
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $row['img_url'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $row['txt_title'] ?>
                            </h5>
                            <p class="card-text">
                                <?= $row['txt_product'] ?>
                            </p>
                            <a href="<?= $row['btn_link'] ?>" class="btn btn-primary">สั่งซื้อ</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</body>

</html>