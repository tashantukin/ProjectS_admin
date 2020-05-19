
<?php
// include Database connection file
include("./db.php");

$contentBodyJson = file_get_contents('php://input');
$content = json_decode($contentBodyJson,true);
$status =  $content['status'];
if ($status == false) {
    $status = 0;
}
$query = "UPDATE settings SET value = '" . $status . "' where ID = '2'";
if (!$result = mysqli_query($conn, $query)) {
    exit(mysqli_error($conn));
}
    mysqli_close($conn);
?>