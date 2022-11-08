<?php
    include '../../includes/dbconn.php';

    $sql = "SELECT id from  tblexeattype";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $exeattypcount=$query->rowCount();

    echo htmlentities($exeattypcount);

?>   