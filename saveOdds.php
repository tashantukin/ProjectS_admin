<?php
// include Database connection file
include("./db.php");

$contentBodyJson = file_get_contents('php://input');
$content = json_decode($contentBodyJson,true);
$walaOdds = $content['wala'];
$meronOdds = $content['meron'];

// $tz  =  date_default_timezone_get();
// $timezone_name =  timezone_name_from_abbr("", $timezone*60, false);
// date_default_timezone_set($timezone_name);
// $timestamp = date("d/m/Y H:i");
//$timestamp2 = $timezone * 60;
$query = "UPDATE settings SET value = '" . $walaOdds . "' where ID = '3'";
if (!$result = mysqli_query($conn, $query)) {
    exit(mysqli_error($conn));
}
    $query = "UPDATE settings SET value = '" . $meronOdds . "' where ID = '4'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
        mysqli_close($conn);
?>

