<?php
require_once("templates/header.php");

$stmt = $conn->prepare("INSERT INTO izdevnieciba (Nosaukums) VALUES (?)");
$stmt->bind_param('s', $izd);
        
$izd = $_POST["Nosaukums"];

$stmt->execute();
        
$stmt->close();

header("Location:adminPanel.php"); 
?>