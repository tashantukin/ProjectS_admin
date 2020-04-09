<?php
// include Database connection file
include("./db.php");

$contentBodyJson = file_get_contents('php://input');
$content = json_decode($contentBodyJson,true);
$side = $content['side'];

$query = "UPDATE tblbet SET winStatus = '1' where Side =  '" . $side  . "' and FightID = (select max(FightID) from tblfight)";
if (!$result = mysqli_query($conn, $query)) {
    exit(mysqli_error($conn));
}
   mysqli_close($conn);
?>

