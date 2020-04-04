<?php 
 include("./db.php");
                            $sql = "SELECT value  from settings where id = 2";
                            $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)); 
                            $betStatus = mysqli_fetch_assoc($resultset);
                            echo json_encode(['result' => $betStatus]);    
                            ?>   