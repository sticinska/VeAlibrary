<?php
require_once("templates/header.php");

$stmt = $conn->prepare("INSERT INTO kategorija (Kategorija, Virskategorija) VALUES (?, ?, GETDATE(), true)");
$stmt->bind_param('si', $k, $vk);
        
$k = $_POST["Nosaukums"];
$vk = $_POST["Virskategorija"];

$stmt->execute();
        
$stmt->close();

header("Location:adminPanel.php"); 
?>