<?php
require_once("templates/header.php");

$stmt = $conn->prepare("INSERT INTO eksemplars (Gramata, BiblSvitrkods, PievienosanasDatums, IrPieejama) VALUES (?, ?, ?, ?)");
$stmt->bind_param('issi', $g, $s, $d, $ir);
        
$g = $_POST["Gramata"];
$s = $_POST["bibsvitras"];
$d = date('Y-m-d H:i:s');
$ir = 1;

$stmt->execute();
        
$stmt->close();

header("Location:adminPanel.php"); 
?>