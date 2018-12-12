<?php
require_once("templates/header.php");

$stmt = $conn->prepare("INSERT INTO autors (Vards, Uzvards, IzcelsmesValsts) VALUES (?, ?, ?)");
$stmt->bind_param('ssi', $vards, $uzv, $valsts);
        
$vards = $_POST["Vards"];
$uzv = $_POST["Uzvards"];
$valsts = $_POST['Valsts'];

$stmt->execute();
printf("%d Row inserted.\n", $stmt->affected_rows);
        
$stmt->close();
?>