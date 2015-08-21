<?php
date_default_timezone_set("Europe/London");

$seconds = strtotime("2014-09-06 15:00:00") - time();

$days = floor($seconds / 86400);
$seconds %= 86400;

$hours = floor($seconds / 3600);
$seconds %= 3600;

$minutes = floor($seconds / 60);
$seconds %= 60;

echo "<b>Days Left until we tie the knot:</b> <br/>";
echo "<b>$days</b> days and <b>$hours</b> hours and <b>$minutes</b> minutes and <b>$seconds</b> seconds";
?>
