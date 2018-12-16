<?php
require_once("templates/header.php");

if ( isset( $_GET[ "id" ] )){
    $lasID = $_GET["id"];

    $sql="SELECT gramata.Nosaukums AS Gramata, AizdosanasDatums AS Izdota, 
    IF(IrNodota,"Nodota","Izdota lasisanai") AS Statuss 
    FROM izdevums 
    LEFT JOIN eksemplars 
    ON GramatasEksemplars = eksemplars.BiblSvitrkods  
    LEFT JOIN gramata 
    ON eksemplars.Gramata = gramata.ID 
    WHERE lasitajs='$lasID' ORDER BY Statuss asc";

    $stmt = mysqli_prepare($conn, $sql);
    $stmt->execute();
    $IZDEVUMI = $stmt->get_result();

    while ($row = mysqli_fetch_assoc($IZDEVUMI)) {
        echo '<p>"'.$row["Gramata"].'" | '.$row["Izdota"]. ' | '.$row["Statuss"].'</p>';
    }

}
   




?>