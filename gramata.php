<?php

require_once("templates/header.php");
if ( isset( $_GET[ "id" ] ) )
   $bookID = $_GET["id"];

   $sql="CALL gramataFullInfo('$bookID')";
   
   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, "s", $bookID);
   $stmt->execute();
   $sql_res = $stmt->get_result();
   $row = mysqli_fetch_array($sql_res);
   echo '<div><h3>"'.$row["Gramata"].'"</h3></div>';
   echo '<div><h5>Apjoms: '.$row["Apjoms"].'</h5></div>';
   echo '<div><h5>ISBN: '.$row["ISBN"].'</h5></div>';
   echo '<div><h5>Izdevuma gads: '.$row["IzdevumaGads"].'</h5></div>';
   $rowcount = ($sql_res->num_rows);
   $statuss = $row["Statuss"];
   $eksSkaits = $row["EksSkaits"];
   if($rowcount==2){
      $row = mysqli_fetch_array($sql_res);
      if($statuss <=> "Pieejama"){
            echo '<div><h5>'.$statuss.': '.$eksSkaits.'</h5></div>';
            echo '<div><h5>'.$row["Statuss"].': '.$row["EksSkaits"].'</h5></div>';
      }
   }else{
      if($eksSkaits == 0){
            echo '<div>Nav pieejami šīs grāmatas eksemplāri.</div>';
      }else{
            if($statuss <=> "Pieejama"){
                  echo '<div><h5>'.$statuss.': '.$eksSkaits.'</h5></div>';
                  echo '<div><h5>Izdota lasīšanai: 0</h5></div>';
            }else{
                  echo '<div><h5>'.$statuss.': '.$eksSkaits.'</h5></div>';
                  echo '<div><h5>Pieejama: 0</h5></div>';
            }
      }
      
   }

   $sql="CALL gramatasAutori('$bookID')";
   
   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, "s", $bookID);
   $stmt->execute();
   $sql_res = $stmt->get_result();

   while($row =  $row = mysqli_fetch_assoc($sql_res)){
      echo '<div><p>'.$row["Autors"].'</p></div>';
   }

  
?>
