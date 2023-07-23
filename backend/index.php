<?php include 'backend.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Dashboard</title>
    </head>
    <body>
        <form action="insert.php" method="post">
            <input type="text" name="img_url" placeholder="Input Image URL">
            <input type="text" name="txt_title" placeholder="Input Title">
            <textarea type="text" name="txt_product" cols="30" rows="10" placeholder="Input Product"></textarea>
            <input type="text" name="btn_link" placeholder="Input Button Link">
            <button type="submit">Submit</button>
        </form>
    </body>
</html>