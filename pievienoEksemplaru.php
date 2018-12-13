<?php
require_once("templates/header.php");

$stmt = $conn->prepare("INSERT INTO eksemplars (Gramata, BiblSvitrkods) VALUES (?, ?, GETDATE(), 1)");
$stmt->bind_param('issi', $g, $s, $d, $ir);
        
$g = $_POST["Gramata"];
$s = $_POST["bibsvitras"];

$stmt->execute();
        
$stmt->close();

header("Location:adminPanel.php"); 
?>