<?php
require_once("templates/header.php");

$stmt = $conn->prepare("INSERT INTO valoda (Valoda) VALUES (?)");
$stmt->bind_param('s', $valoda);
        
$valoda = $_POST["Nosaukums"];

$stmt->execute();
        
$stmt->close();

header("Location:adminPanel.php"); 
?>