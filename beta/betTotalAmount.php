<?php
    include_once('../db.php'); 
        $sql = "SELECT sum(BetAmount) as betCountAmount FROM tblBet where Status = 1";
        $resultset = mysqli_query($conn, $sql); //or die("database error:". mysqli_error($conn));  
        while( $record = mysqli_fetch_assoc($resultset)) {
            echo number_format($record['betCountAmount']);
        }
 ?>