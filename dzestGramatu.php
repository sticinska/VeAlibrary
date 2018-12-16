<?php
require_once("templates/header.php");

$stmt = $conn->prepare("DELETE FROM gramata WHERE GramataaID=?");
$stmt->bind_param('i', $gID);
        
$gID = $_POST["dzestID"];

$stmt->execute();
printf("%d Row affected.\n", $stmt->affected_rows);
        
$stmt->close();
?>