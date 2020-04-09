<?php
// include Database connection file
include("./db.php");
$contentBodyJson = file_get_contents('php://input');
$content = json_decode($contentBodyJson,true);
$side = $content['side'];

if ($side != 'DRAW') {

    $query = "UPDATE tblbet SET winStatus = '1' where Side =  '" . $side  . "' and FightID = (select max(FightID) from tblfight)";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
}

    $query = "UPDATE tblFight SET TotalBetCount = (select count(ID) from tblbet where FightID = (select max(FightID) from tblFight)),
                TotalBetAmount = (select sum(BetAmount) from tblbet where FightID = (select max(FightID) from tblFight)),
                TotalWinningAmount = (select sum(TotalWinAmount) from tblbet where FightID = (select max(FightID) from tblFight)),
                FightWinner = '" . $side . "'
    order by FightID desc limit 1";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }

       mysqli_close($conn);


?>

