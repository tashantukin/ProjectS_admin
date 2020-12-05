<?php 
 include("./db.php");

    //get the current sultada ID
    $sql = "SELECT max(Id) as sultadano from tblsultada";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)); 

    //= mysqli_fetch_assoc($resultset['sultadano']);
    while($sultadano = mysqli_fetch_assoc($resultset)) {
       $s =  $sultadano['sultadano'];
    }
    
    //get the last fight No.
    $sql = "SELECT FightNo,SultadaID from tblfight where FightID = (select max(FightID) from tblfight)";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)); 
   // $fightno = mysqli_fetch_assoc($resultset['FightNo']);
    while ($fightno = mysqli_fetch_assoc($resultset)) {
       $f =  $fightno['FightNo'];
       $sID =  $fightno['SultadaID'];
    }
    
    //if new sultada, restart the fight number to 1
     $fcount =  $s == $sID ? $f + 1 : 1;

    $query = "INSERT INTO tblfight(ArenaID,SultadaID,FightNo,Status) values('1', $s, $fcount,'1')";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }

    $query = "UPDATE tblbet SET Status = '0' where Status = '1'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }

    mysqli_close($conn);

?>   