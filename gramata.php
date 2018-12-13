<?php

require_once("templates/header.php");
if ( isset( $_GET[ "id" ] ) )
   $bookID = $_GET["id"];

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
/*
   $sql="call getGramatasAutori(?);"
   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, "s", $bookID);
   $stmt->execute();
   $sql_res = $stmt->get_result();
   while($row = mysqli_fetch_array($sql_res)){
         echo '<div><p>'.$row["Autors"].'</p></div>';
   }*/

   $sql="SELECT DISTINCT ID, Kategorija FROM kategorija;";
   $stmt = mysqli_prepare($conn, $sql);
   $stmt->execute();
   $Kategorijas = $stmt->get_result();
   

   


   

  
?>
