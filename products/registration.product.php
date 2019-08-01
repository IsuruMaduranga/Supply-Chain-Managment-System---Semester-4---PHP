<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Registration</title>
</head>
<body>
    <h1>Register Product</h1>
    <form action="register.product.php" method="post">
        <label for="name">Name  : </label>
        <input type="text" name="name" id="name"><br>

        <label for="_type">Type  : </label>
        <input type="text" name="_type" id="_type"><br>

        <label for="capacity">Capacity  : </label>
        <input type="capacity" name="capacity" id="capacity"><br>

        <label for="wholesale_price">Wholesale price : </label>
        <input type="number" name="wholesale_price" id="wholesale_price"><br>

        <label for="retail_price">Retail price  : </label>
        <input type="number" name="retail_price" id="retail_price"><br>

        <label for="end_price">End price  : </label>
        <input type="number" name="end_price" id="end_price"><br>

        <label for="available_qty">Quantity  : </label>
        <input type="number" name="available_qty" id="available_qty"><br>

        <INPUT type="submit" name="submit">
    </form>
</body>
</html>