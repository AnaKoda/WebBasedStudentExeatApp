<?php
    include '../../includes/dbconn.php';

    $sql = "SELECT id from tblhouses";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $hoscount=$query->rowCount();

    echo htmlentities($hoscount);
?> 