<?php
if (isset($_POST['done'])) {
    $hour = $_POST['hour'];
    $min = $_POST['min'];
    $sec = $_POST['sec'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    header("Location: inp.php?hour=$hour&min=$min&sec=$sec&month=$month&day=$day&year=$year");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown</title>
    <link rel="stylesheet" type="text/css" href="./index.css">
</head>
<body>
    <form method="post">
        <label for="">HOURS</label>
        <select  name="hour">
        <script>
            for (let i = 1; i <= 24; i++) {
                document.write(`<option value="${i}">${i}</option>`);
            }
        </script>
    </select>
<br>

    <label for="">Min</label>

        <select name="min">
        <script>
            for (let i = 1; i <= 60; i++) {
                document.write(`<option value="${i}">${i}</option>`);
            }
        </script>
    </select>

<br>
    <label for="">Sec</label>

        <select name="sec">
        <script>
            for (let i = 0; i <= 60; i++) {
                document.write(`<option value="${i}">${i}</option>`);
            }
        </script>
    </select>

<br>
    <label for="">Month</label>

        <select  name="month">
        <script>
            for (let i = 1; i <= 12; i++) {
                document.write(`<option value="${i}">${i}</option>`);
            }
        </script>
    </select>

<br>
    <label for="">Day</label>

        <select  name="day">
        <script>
            for (let i = 1; i <= 31; i++) {
                document.write(`<option value="${i}">${i}</option>`);
            }
        </script>
    </select>
<br>
    <label for="">Year</label>

        <select name="year">
        <script>
            for (let year = 1999; year <= 2050; year++) {
                document.write(`<option value="${year}">${year}</option>`);
            }
        </script>
    </select>

    <br>
        <input type="submit" name="done" value="Done" id="">
        
    </form>
</body>
</html>