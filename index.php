<?php
require_once("templates/header.php");
?>
    <div> 
    <h1 id="heading">Jaunākās grāmatas bibliotēkā</h1>
    <ul class="list-unstyled" style="width=auto">

<?php
 
  $sql="SELECT Nosaukums, GramataaID as GID  FROM gramata ORDER BY GramataaID desc LIMIT 10 ; ";
   $stmt = mysqli_prepare($conn, $sql);
   $stmt->execute();
   $Gr = $stmt->get_result();
   

   while ($row = mysqli_fetch_assoc($Gr)) {
        echo '<a href="gramata.php?id='.$row["GID"].'"><h5>"'.$row["Nosaukums"].'"</h5></a>';
   
    }
     
    
     //while($autorsRow = mysqli_fetch_assoc($res)){
       // echo '<a href="autors.php?id=' .$autorsRow["AID"]. '"><h5 class="mt-0 mb-1">'.$autorsRow["Autors"].' </a>';
     //}
     
     echo ' <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';

    

?>
    
<?php 
include_once("templates/footer.php");
?>
