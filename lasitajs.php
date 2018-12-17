<?php
require_once("templates/header.php");

if ( isset( $_GET[ "id" ] )){
    $lasID = $_GET["id"];
    echo "<h1>";
    echo $lasID;
    echo "</h1>";
    
    $sql="SELECT gramata.Nosaukums AS Gramata, AizdosanasDatums AS Izdota, 
    IF(IrNodota,'Nodota','Izdota lasisanai') AS Statuss 
    FROM izdevums 
    LEFT JOIN eksemplars 
    ON GramatasEksemplars = eksemplars.BiblSvitrkods  
    LEFT JOIN gramata 
    ON eksemplars.Gramata = gramata.GramataaID 
    WHERE lasitajs=? ORDER BY Statuss ASC";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $lasID);
    $stmt->execute();
    $sql_res = $stmt->get_result();
    echo "<h1>get result</h1>";
    while ($row = mysqli_fetch_assoc($sql_res)) {
        echo '<div><p>"'.$row["Gramata"].'" | '.$row["Izdota"]. ' | '.$row["Statuss"].'</p></div>';
    }

}
   




?>