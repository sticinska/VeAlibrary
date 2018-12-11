<?php
require_once("templates/header.php");
?>
    <div> 
    <h1 id="heading">Jaunākās grāmatas biblotēkā</h1>
    <ul class="list-unstyled" style="width=auto">

<?php
  $skaits = 10;
   $sql="call getPedejasGramatas(?)";

   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, "s", $skaits);
   $stmt->execute();
   $sql_res = $stmt->get_result();
   $row = mysqli_fetch_array($sql_res);

   while ($row = mysqli_fetch_assoc($sql_res)) {
     $gramatasID = $row["GID"];
     $gramata = $row["Nosaukums"];
     echo '<div class="media attribution">';
     echo '<li class="media">';
     echo '<img class="mr-3" src="imp/img/bookF/tmp.jpg" alt="Generic placeholder image">';
     echo '<div class="media-body">';
     //echo '<a href="autors.php?id=' .$row["AID"]. '"><h5 class="mt-0 mb-1">'.$autors.' </a>';
     echo '<a href="gramata.php?id='.$row["GID"].'">"'.$gramata.'"</h5></a>';
     echo 'default graamatas apraksts</div></li></div>';
    }

?>
    
<?php 
include_once("templates/footer.php");
?>