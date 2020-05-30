<?php
// include Database connection file
include("./db.php");
$contentBodyJson = file_get_contents('php://input');
$content = json_decode($contentBodyJson,true);
$side = $content['side'];

//GET MAX FIGHT ID
    $sql = "SELECT max(FightID) as maxID from tblFight";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)); 
    while($record = mysqli_fetch_assoc($resultset)) {
        $maxId = $record['maxID'];
    }
    // $maxId= mysqli_fetch_assoc($resultset);
  
if ($side != 'DRAW') {

    $query = "UPDATE tblbet SET winStatus = '1' where Side =  '" . $side  . "' and FightID = $maxId";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
        // mysqli_close($conn);
    }

    $query = "UPDATE tblFight SET TotalBetCount = (select count(ID) from tblbet where FightID = $maxId),
                TotalBetAmount = (select sum(BetAmount) from tblbet where FightID = $maxId),
                TotalWinningAmount = (select sum(TotalWinAmount) from tblbet where FightID = $maxId),
                FightWinner = '" . $side . "' ,TotalWinner = (select count(ID) from tblbet where FightID = $maxId and Side = $side),
                FightWinner = '" . $side . "' , Status = '0'
    order by FightID desc limit 1";

    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
   
       mysqli_close($conn);
}
       
?>

