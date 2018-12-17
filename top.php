<?php

require_once("templates/header.php");

$sql="SELECT mostPopular() as ID;";
$stmt = mysqli_prepare($conn, $sql);
$stmt->execute();
$row = mysqli_fetch_assoc($stmt->get_result());
echo $row["ID"];



echo ' <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';

?>