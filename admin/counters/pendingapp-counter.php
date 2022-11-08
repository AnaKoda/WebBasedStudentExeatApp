<?php
    include '../../includes/dbconn.php';

    $sql = "SELECT id from tblexeats WHERE Status = '0'";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $exeattypcount=$query->rowCount();

    echo htmlentities($exeattypcount);

?>   