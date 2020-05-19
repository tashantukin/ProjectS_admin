<?php
// include Database connection file
include("./db.php");

$contentBodyJson = file_get_contents('php://input');
$content = json_decode($contentBodyJson,true);
$game = $content['gameName'];
$nof =  $content['nofs'];
$timezone = $content['timezone'];

$tz  =  date_default_timezone_get();
$timezone_name =  timezone_name_from_abbr("", $timezone*60, false);
date_default_timezone_set($timezone_name);
$timestamp = date("d/m/Y H:i");
//$timestamp2 = $timezone * 60;

    $query = "INSERT INTO tblsultada(ArenaID,FightCount,GameDate) values($game, $nof, '$timestamp')";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
    mysqli_close($conn);
?>

