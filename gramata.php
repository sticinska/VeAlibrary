<?php

require_once("templates/header.php");
if ( isset( $_GET[ "id" ] ) )
   $bookID = $_GET["id"];
   echo $bookID;
   $sql="SELECT Nosaukums, CONCAT(autors.Vards, ' ' , autors.Uzvards) as Autors , autors.ID as ID FROM gramata 
   FULL JOIN gramatasAutori ON GramataaID = gramatasAutori.GramataID LEFT JOIN autors ON autors.ID = gramatasAutori.AutorsID WHERE GramataaID = ".$bookID.";";
   $sql_res = mysql_query($conn,$sql) or die("<h1>".mysqli_error()."</h1>");
   while ($row = mysqli_fetch_assoc($sql_res)) {
     echo '<div>' .$row["Autors"]. '</div>';
   }

  
?>