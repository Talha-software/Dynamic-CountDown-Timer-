
<?php
date_default_timezone_set("Asia/Karachi");
$hour = $_GET['hour'];
$min = $_GET['min'];
$sec = $_GET['sec'];
$month = $_GET['month'];
$day = $_GET['day'];
$year = $_GET['year'];
$target = mktime($hour, $min, $sec, $month, $day , $year);
$today = time();
$difference = $target - $today;

if ($difference > 0) {
    $day = (int)(($difference / 86400));
    $hour = (int)(($difference % 86400) / 3600 );
    $minute = (int)(($difference % 3600) / 60);
    $second = (int)($difference % 60);
} else {
    $day = $hour = $minute = $second = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./inp.css">
    <title>Countdown Timer</title>
</head>
<body>
    <div id="countdown">
        <?php if ($difference > 0): ?>
            <div><?php echo $day . 'd ' . $hour . 'h ' . $minute . 'm ' . $second . 's'; ?></div>
            <div>until the event occurs</div>
        <?php else: ?>
            <div>The event has already occurred.</div>
        <?php endif; ?>
    <form action="index.php" method="get">
        <input type="submit" name="reset" value="Reset">
    </form> 
    <?php
    if (isset($_GET['reset'])){
// Handle reset logic here if needed
// Redirect to another page
header("Location: index.php");
exit();
    }
?>
    </div>

</body>
</html>
