<?php
require_once("templates/header.php");

if(isset($_POST["checkbox"])){
    $stmt = $conn->prepare("UPDATE izdevums SET IrNodota=1 WHERE izdID=?");
    $stmt->bind_param('i', $_GET["id"]);

    $stmt->execute();
    printf("%d Row affected.\n", $stmt->affected_rows);
        
    $stmt->close();
}
?>