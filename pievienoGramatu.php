<?php
require_once("templates/header.php");

$stmt = $conn->prepare("INSERT INTO gramata (Nosaukums, Apjoms, ISBN, Izdevnieciba, IzdevumaGads, Valoda, Originalvaloda) 
VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('sisiiii', $nos, $apj, $isbn, $izd, $izdg, $val, $oval);
        
$nos = $_POST["Nosaukums"];
$apj = $_POST["Apjoms"];
$isbn = $_POST['ISBN'];
$izd = $_POST['Izdevums'];
$izdg = $_POST['IzdevumaGads'];
$val = $_POST['Valoda'];
$oval = $_POST['Originalvaloda'];

$stmt->execute();
printf("%d Row inserted.\n", $stmt->affected_rows);
        
$stmt->close();
?>