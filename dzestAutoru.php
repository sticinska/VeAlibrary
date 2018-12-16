<?php
require_once("templates/header.php");

$stmt = $conn->prepare("DELETE FROM autors WHERE ID=?");
$stmt->bind_param('i', $aID);
        
$aID = $_POST["dzestID"];

$stmt->execute();
printf("%d Row affected.\n", $stmt->affected_rows);
        
$stmt->close();
?>