<?php

require_once("templates/header.php");
if ( isset( $_GET[ "id" ] ) )
   $bookID = $_GET["id"];
   echo $bookID;

   $sql="SELECT Nosaukums, CONCAT(autors.Vards, ' ' , autors.Uzvards) as Autors , autors.ID as ID FROM gramata 
   FULL JOIN gramatasAutori ON GramataaID = gramatasAutori.GramataID LEFT JOIN autors ON autors.ID = gramatasAutori.AutorsID WHERE GramataaID=?";
   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, "s", $bookID);
   $stmt->execute();
   $sql_res = $stmt->get_result();
   while ($row = mysqli_fetch_assoc($sql_res)) {
     echo '<div><h3>' .$row["Autors"]. '</h3><br><h3>"'.$row["Nosaukums"].'"</h3></div>';
   }

  
?>