<?php
require_once("templates/header.php");

$stmt = $conn->prepare("DELETE FROM lasitajs WHERE PersonasKods=?");
$stmt->bind_param('i', $lID);
        
$lID = $_POST["dzestID"];

$stmt->execute();
printf("%d Row affected.\n", $stmt->affected_rows);
        
$stmt->close();
?>