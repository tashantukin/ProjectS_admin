<?php
include_once('db.php'); 

Class Bet {
    function getBet() {
        $sql = "SELECT sum(ID) as betCounttotal FROM tblBet where Status = 1";
        $resultset = mysqli_query($conn, $sql);// or die("database error:". mysqli_error($conn));  
        while( $record = mysqli_fetch_assoc($resultset)) {
          return number_format($record['betCounttotal']);
          echo "hello";
        }
        return 1;
     }

}



?>