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
    $sql = "SELECT FightNo from tblfight where FightID = (select max(FightID) from tblfight)";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)); 
   // $fightno = mysqli_fetch_assoc($resultset['FightNo']);
    while ($fightno = mysqli_fetch_assoc($resultset)) {
       $f =  $fightno['FightNo'] + 1;
    }
     
    $query = "INSERT INTO tblfight(ArenaID,SultadaID,FightNo,Status) values('1', $s, $f,'1')";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }

    $query = "UPDATE tblbet SET status = '0' where status = '1'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }

    mysqli_close($conn);

?>   