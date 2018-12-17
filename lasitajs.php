<?php
require_once("templates/header.php");

if ( isset( $_GET[ "id" ] )){
    $lasID = $_GET["id"];

    $sql="SELECT Lietotajvards from lasitajs where PersonasKods=?";
    mysqli_stmt_bind_param($stmt, "i", $lasID);
    $stmt = mysqli_prepare($conn, $sql);
    $stmt->execute();
    $Autori = $stmt->get_result();
    $row = mysqli_fetch_assoc($Autori);
    echo '<h2>';
    echo $row["Lietotajvards"];
    echo '</h2>';


    
    $sql="SELECT gramata.Nosaukums AS Gramata, AizdosanasDatums AS Izdota, 
    IF(IrNodota,'Nodota','Izdota lasisanai') AS Statuss 
    FROM izdevums 
    LEFT JOIN eksemplars 
    ON GramatasEksemplars = eksemplars.BiblSvitrkods  
    LEFT JOIN gramata 
    ON eksemplars.Gramata = gramata.GramataaID 
    WHERE lasitajs=? ORDER BY Izdota DESC";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $lasID);
    $stmt->execute();
    $sql_res = $stmt->get_result();
    while ($row = mysqli_fetch_assoc($sql_res)) {
        echo '<div><p>"'.$row["Gramata"].'" | '.$row["Izdota"]. ' | '.$row["Statuss"].'</p></div>';
    }

}
   




?>