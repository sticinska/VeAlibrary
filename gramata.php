<?php

require_once("templates/header.php");
if ( isset( $_GET[ "id" ] ) )
   $bookID = $_GET["id"];
   echo $bookID;
   $sql="SELECT Nosaukums, eksemplars.IrPieejama, Count(*) as Skaits FROM gramata 
         LEFT JOIN eksemplars 
         ON eksemplars.Gramata = GramataaID 
         WHERE GramataaID=? 
         GROUP BY IrPieejama;";

   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, "s", $bookID);
   $stmt->execute();
   $sql_res = $stmt->get_result();
   $row = mysqli_fetch_array($sql_res);
   echo '<div><h3>"'.$row["Nosaukums"].'"</h3></div>';

   

  
?>
