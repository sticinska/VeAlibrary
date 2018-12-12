<?php

require_once("templates/header.php");
        
        $stmt = $conn->prepare("INSERT INTO autors (Vards, Uzvards, IzcelsmesValsts) VALUES (?, ?, ?)");
        $stmt->bind_param('ssi', $vards, $uzv, $valsts);
        
        $vards = $_POST["Vards"];
        $uzv = $_POST["Uzvards"];
        $valsts = $_POST['Valsts'];
        
        /* execute prepared statement */
        $stmt->execute();
        
        printf("%d Row inserted.\n", $stmt->affected_rows);
        
        /* close statement and connection */
        $stmt->close();

?>