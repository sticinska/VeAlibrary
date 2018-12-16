<?php
require_once("templates/header.php");

$stmt = $conn->prepare("INSERT INTO kategorija (Kategorija, Virskategorija) VALUES (?, ?)");
$stmt->bind_param('si', $k, $vk);
        
$k = $_POST["Nosaukums"];
$vk = $_POST["Virskategorija"];

echo '<h1>'.$vk.'</h1>';

$stmt->execute();
        
$stmt->close();

header("Location:adminPanel.php"); 
?>