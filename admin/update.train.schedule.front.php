<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Train Schedule</title>
</head>
<body>
    <h1>Update Train Schedule</h1>
    <form action="update.train.schedule.php" method="POST">
      <label for="year">Year : </label>
        <select name="year" id="year">
            <option value="2018">2018</option>
            <option value="2019">2019</option>
        </select>
        <label for="month">Month : </label>
        <select name="month" id="month">
            <?php
                for($x = 1; $x <= 12; $x++){
                    echo '<option value='.$x.'>'.$x.'</option>';
                }
            ?>
        </select>
        <label for="day">Day : </label>
        <input type="number" name="day" id="day" min="1" max="31"><br>

        <label for="hour">Hour : </label>
        <input type="number" name="hour" id="hour" min="0" max="12">
        <label for="min">Minute : </label>
        <input type="number" name="min" id="min" min="0" max="59"><br>

        <label for="city1">City-1 : </label>
        <select name="city1" id="city1">
            <option value="Colombo">Colombo</option>
            <option value="Negombo">Negombo</option>
            <option value="Galle">Galle</option>
            <option value="Mathara">Mathara</option>
            <option value="Jaffna">Jaffna</option>
            <option value="Trinco">Trinco</option>
        </select>
        <label for="city2">City-2 : </label>
        <select name="city2" id="city2">
            <option value="Colombo">Colombo</option>
            <option value="Negombo">Negombo</option>
            <option value="Galle">Galle</option>
            <option value="Mathara">Mathara</option>
            <option value="Jaffna">Jaffna</option>
            <option value="Trinco">Trinco</option>
        </select><br>

        <INPUT type="submit" name="submit">
    </form>
</body>
</html>
