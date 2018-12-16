<?php

require_once("templates/header.php");
if ( isset( $_GET[ "id" ] ) )
   $bookID = $_GET["id"];

   $sql="CALL gramataFullInfo(7)";

   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, "s", $bookID);
   $stmt->execute();
   $sql_res = $stmt->get_result();
   
   echo  '<h1>'.($sql_res->num_rows).'</h1>';

   $sql = $pdos->prepare("SELECT CONCAT(autors.Vards, ' ' , autors.Uzvards) as Autors, AutorsID as AID 
                          FROM gramatasAutori 
                          LEFT JOIN autors ON autors.ID = gramatasAutori.AutorsID 
                          WHERE GramataID='$bookID';");
   $sql->execute();
   while($row = $sql->fetch()){
         echo '<div><p>'.$row["Autors"].'</p></div>';
   }

  
?>
