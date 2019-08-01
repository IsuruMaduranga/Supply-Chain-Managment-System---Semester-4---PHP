<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Registration</title>
</head>
<body>
    <h1>Register Administrator</h1>
    <form action="register.admin.php" method="post">
        <label for="first_name">First Name  : </label>
        <input type="text" name="first_name" id="first_name"><br>

        <label for="last_name">Last Name  : </label>
        <input type="text" name="last_name" id="last_name"><br>

        <label for="email">Email  : </label>
        <input type="email" name="email" id="email"><br>

        <label for="nic">NIC  : </label>
        <input type="text" name="nic" id="nic"><br>

        <label for="add_no">Address no  : </label>
        <input type="text" name="add_no" id="add_no"><br>

        <label for="street">Street  : </label>
        <input type="text" name="street" id="street"><br>

        <label for="city1">City 1  : </label>
        <input type="text" name="city1" id="city1"><br>

        <label for="city2">City 2  : </label>
        <input type="text" name="city2" id="city2"><br>

        <label for="zip">ZIP  : </label>
        <input type="text" name="zip" id="zip"><br>

        <label for="password">Password  : </label>
        <input type="password" name="password" id="password"><br>

        <label for="re_password">Re - Password  : </label>
        <input type="password" name="re_password" id="re_password"><br>

        <INPUT type="submit" name="submit">
    </form>
</body>
</html>