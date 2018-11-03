<?php

require_once("config.php");

$Vards = $_POST['Vards'];
$Uzvards = $_POST['Uzvards'];
$Valsts = $_POST['Valsts'];
$Datums = $_POST['Datums'];


$sql = "INSERT INTO autors (vards, uzvards)
VALUES ('John', 'Doe')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

?>