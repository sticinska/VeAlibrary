<?php
require_once("templates/header.php");

if ( isset( $_GET[ "id" ] )){
    $lasID = $_GET["id"];

    $sql="SELECT Lietotajvards from lasitajs where PersonasKods=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $lasID);
    $stmt->execute();
    $Autori = $stmt->get_result();
    $row = mysqli_fetch_assoc($Autori);
    echo '<h2>'.$row["Lietotajvards"].'</h2>';



    
    $sql="SELECT izdID, gramata.Nosaukums AS Gramata, AizdosanasDatums AS Izdota, 
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
        echo '<br>';
        echo '<div style="display: inline"><p>"'.$row["Gramata"].'" | '.$row["Izdota"]. ' | '.$row["Statuss"].'</p></div>';
        if($row["Statuss"]<>"Nodota"){
            echo '<form action="updateIzdevums.php" method="POST" ><input type="checkbox" name="checkbox'.$row["izdID"].'"><input type="submit" value="Submit"></form>';
        }
        
        
        
    }

    echo ' <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';

}
   




?>