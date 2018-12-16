<?php
require_once("templates/header.php");
?>
    <div> 
    <h1 id="heading">Jaunākās grāmatas bibliotēkā</h1>
    <ul class="list-unstyled" style="width=auto">

<?php
  $skaits = 10;
   $sql="call getPedejasGramatas(?)";

   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, "s", $skaits);
   $stmt->execute();
   $Gramatas = array();
   $res = $stmt->get_result();
   while ($row = mysqli_fetch_assoc($res)) {
    $gr = array($row["GID"], $row["Nosaukums"]);    
    array_push($Gramatas,$gr);
   }

   foreach($Gramatas as &$value) {
    $gramata = $value[1];
    $gramatasID = $value[0];
     

     $sql1="SELECT * FROM autors;";
     /*
     $stmt1 = mysqli_prepare($conn, $sql1);
     if(!$stmt1->execute())  $stmt1->error;*/

     //while($autorsRow = mysqli_fetch_assoc($res)){
       // echo '<a href="autors.php?id=' .$autorsRow["AID"]. '"><h5 class="mt-0 mb-1">'.$autorsRow["Autors"].' </a>';
     //}
     
     echo '<a href="gramata.php?id='.$gramatasID.'">"'.$gramata.'"</h5></a>';
    }

?>
    
<?php 
include_once("templates/footer.php");
?>
