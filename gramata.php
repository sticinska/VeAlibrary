<?php

require_once("templates/header.php");
if ( isset( $_GET[ "id" ] ) )
   $bookID = $_GET["id"];

   $sql="SELECT Nosaukums, CONCAT (autors.Vards, ' ' , autors.Uzvards) as Autors , autors.ID as ID FROM gramata FULL JOIN
   gramatasAutori ON ID = gramatasAutori.GramataID LEFT JOIN autors ON autors.ID = gramatasAutori.AutorsID;";
   $sql_res = mysql_query($conn,$sql) or die("<h1>".mysqli_error()."</h1>");
   while ($row = mysqli_fetch_assoc($sql_res)) {
     echo '<a href="autors.php?id=' .$row["ID"]. '">' .$row["Autors"]. '</a><br>';
   }

   $sql="SELECT Nosaukums AS Gramata, COUNT (*) AS 'Eksemplaru skaits' ,
   IF (eksemplars.IrPieejama = 1, 'Pieejama' , 'Izdotas lasisanai' ) AS Statuss
   FROM gramata
   LEFT JOIN eksemplars
   ON eksemplars.Gramata = ID
   WHERE gramata.ID= 7
   GROUP BY eksemplars.IrPieejama;"

  
?>