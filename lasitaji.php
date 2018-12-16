<?php

require_once("templates/header.php");

$sql="SELECT PersonasKods as ID, Lietotajvards FROM lasitajs;";
$stmt = mysqli_prepare($conn, $sql);
$stmt->execute();
$LIETOTAJI = $stmt->get_result();
echo '<h2>Lasitaji </h2>';

while ($row = mysqli_fetch_assoc($LIETOTAJI)) {
    echo '<a href="lasitajs.php?id='.$row["ID"].'"><h4>"'.$row["Lietotajvards"].'"</h4></a>';
}
?>