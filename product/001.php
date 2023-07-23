<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>รายการคำสั่งซื้อ</title>
    </head>
    <body>
        <form action="include/insert.php" method="post">
            <input type="text" name="img_url" placeholder="โปรดใส่ชื่อ-สกุล">
            <input type="text" name="txt_title" placeholder="โปรดใส่ที่อยู่จัดส่ง">
            <input type="text" name="txt_product"placeholder="โปรดใส่หมายเลขบัตรเครดิต">
            <input type="text" name="btn_link" placeholder="โปรดใส่หมายเลขโทรศัพท์ผู้รับสินค้า">
            <button type="submit">Submit</button>
        </form>
    </body>
</html>