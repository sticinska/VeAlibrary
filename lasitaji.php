<?php

require_once("templates/header.php");

$sql="SELECT PersonasKods as ID, Lietotajvards FROM lasitajs;";
$stmt = mysqli_prepare($conn, $sql);
$stmt->execute();
$LIETOTAJI = $stmt->get_result();
echo '<h2>Lasitaji </h2>';

while ($row = mysqli_fetch_assoc($Gr)) {
    echo '<a href="lasitajs.php?id='.$row["ID"].'"><h5>"'.$row["Lietotajvards"].'"</h5></a>';
}

?>