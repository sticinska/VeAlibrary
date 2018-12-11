<?php
require_once("templates/header.php");
?>
    <div> 
    <h1 id="heading">Jaunākās grāmatas biblotēkā</h1>
    <ul class="list-unstyled" style="width=auto">

<?php


$sql="SELECT Nosaukums, CONCAT(autors.Vards, ' ' , autors.Uzvards) as Autors, GramataaID as GID, autors.ID as AID FROM gramata FULL JOIN gramatasAutori ON GramataaID = gramatasAutori.GramataID LEFT JOIN autors ON autors.ID = gramatasAutori.AutorsID;";
   $sql_res = mysqli_query($conn,$sql) or die("<h1>no</h1>");
   echo "<center><table class=\"schedule\">";
   $first = true;

   while ($row = mysqli_fetch_assoc($sql_res)) {
     $autorsID = $row["AID"];
     $gramatasID = $row["GID"];
     $autors = $row["Autors"];
     $gramata = $row["Nosaukums"];
     echo '<div class="media attribution">';
     echo '<li class="media">';
     echo '<img class="mr-3" src="imp/img/bookF/tmp.jpg" alt="Generic placeholder image">';
     echo '<div class="media-body">';
     echo '<a href="autors.php?id=' .$row["AID"]. '"><h5 class="mt-0 mb-1">'.$autors.' </a>';
     echo '<a href="gramata.php?id='.$row["GID"].'">"'.$gramata.'"</h5></a>';
     echo 'default graamatas apraksts</div></li></div>';
    }

?>
    
<?php 
include_once("templates/footer.php");
?>