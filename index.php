<?php
require_once("templates/header.php");
?>



    <div> 
    <h1 id="heading">Jaunākās grāmatas biblotēkā</h1>
    

<?php


$sql="SELECT Nosaukums, CONCAT (autors.Vards, ' ' , autors.Uzvards) as Autors , autors.ID as AID, gramata.ID as GID FROM gramata FULL JOIN
   gramatasAutori ON ID = gramatasAutori.GramataID LEFT JOIN autors ON autors.ID = gramatasAutori.AutorsID;";
   $sql_res = mysqli_query($conn,$sql) or die("<h1>no</h1>");
   while ($row = mysqli_fetch_assoc($sql_res)) {
     echo 'please';
     echo '<a href="autors.php?id=' .$row["AID"]. '">' .$row["Autors"]. '</a href="gramata.php?id='.$row["GID"].'><a>'.$row["Nosaukums"].'</a><br>';
   }

include_once("templates/footer.php");
?>