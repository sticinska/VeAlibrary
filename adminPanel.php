<?php
require_once("templates/header.php");

$sql="SELECT * FROM valsts;";
   $stmt = mysqli_prepare($conn, $sql);
   $stmt->execute();
   $Valstis = $stmt->get_result();

   $sql="SELECT * FROM valoda;";
   $stmt = mysqli_prepare($conn, $sql);
   $stmt->execute();
   $Valodas = array();
   $res = $stmt->get_result();
   while ($row = mysqli_fetch_assoc($res)) {
    $val = array($row["id"], $row["Valoda"]);    
    array_push($Valodas,$val);
   }

   $sql="SELECT CONCAT(Vards,' ',  Uzvards) as Autors FROM autors;";
   $stmt = mysqli_prepare($conn, $sql);
   $stmt->execute();
   $Autori = $stmt->get_result();

   $sql="SELECT * FROM izdevnieciba;";
   $stmt = mysqli_prepare($conn, $sql);
   $stmt->execute();
   $Izdevniecibas = $stmt->get_result();

   $sql="SELECT GramataaID, Nosaukums FROM gramata;";
   $stmt = mysqli_prepare($conn, $sql);
   $stmt->execute();
   $Gramatas = $stmt->get_result();

   $sql="SELECT DISTINCT ID, Kategorija FROM kategorija;";
   $stmt = mysqli_prepare($conn, $sql);
   $stmt->execute();
   $Kategorijas = $stmt->get_result();

   $sql="SELECT * from autors;";
   $stmt = mysqli_prepare($conn, $sql);
   $stmt->execute();
   $AUTORITABULAI = $stmt->get_result();



?>

    
        <h3>Pievieno Gramatu</h3><br>
        <form action="pievienoGramatu.php" method="POST">
<div>
        <label for="nosaukums">Nosaukums</label><br>
            <input type="text" id="vards" name="Nosaukums" placeholder="Nosaukums" required>
            </div>

        <div><label for="autors">Grāmatas Autors</label><br>
            <select id="autors" name='Autors'>
            <option selected value> -- autors -- </option>
            <?php 
               while ($row = mysqli_fetch_assoc($Autori)) {
                    echo '<option value="'.$row["Autors"].'">'.$row["Autors"].'</option>';
                }
               ?>
            </select></div>
            <div><label for="ISBN">ISBN kods</label><br>
            <input type="text" id="ISBN" name="ISBN" placeholder="ISBN kods"></div>
            <div><label for="valoda">Valoda</label><br>
            <select id="valoda" name='Valoda' required>
            <option selected value> -- valoda -- </option>
            <?php 
               foreach($Valodas as &$value){
                echo '<option value="'.$value[0].'">'.$value[1].'</option>';
               }
               ?>
</select></div>
            <div><label for="originalvaloda">Oriģinālvaloda</label><br>
            <select id="originalvaloda" name='Originalvaloda' required>
            <option selected value> -- oriģinālvaloda -- </option>
            <?php 
               foreach($Valodas as &$value){
                echo '<option value="'.$value[0].'">'.$value[1].'</option>';
               }
               ?>
            </select></div>
            <div><label for="apjoms">Lappušu skaits</label><br>
            <input type="text" id="apjoms" min="1" name="Apjoms" placeholder="Lappušu skaits"></div>
            <div><label for="izdevnieciba">Izdevnieciba</label><br>
            <select id="izdevnieciba" name='Izdevnieciba'>
            <option selected value> -- izdevniecība -- </option>
            <?php 
               while ($row = mysqli_fetch_assoc($Izdevniecibas)) {
                    echo '<option value="'.$row["ID"].'">'.$row["Nosaukums"].'</option>';
                }
               ?>
            </select></div>
            <div><label for="izdevumaGads">Izdevuma gads</label><br>
            <input type="number" id="izdevumaGads" name="IzdevumaGads" min="1000" max="2018" value="2018"></div>


            <input type="hidden" name="formName" value="gramata">
            <div><input type="submit" value="Submit"></div>
        </form>
        
        <hr><br><br>
<div>
        <h3>Pievieno Autoru</h3><br>
        <form action="pievienoAutoru.php" method="POST">
        <div><label for="vards">Vārds</label><br>
            <input type="text" id="vards" name="Vards" placeholder="Vards" required></div>
            <div><label for="uzvards">Uzvārds</label><br>
            <input type="text" id="uzvards" name="Uzvards" placeholder="Uzvards"></div>
            <div><label for="valsts">Izcelsmes valsts</label><br>
            <select id="valoda" name='Valoda' required>
            <option selected value> -- valsts -- </option>
               <?php 
               while ($row = mysqli_fetch_assoc($Valstis)) {
                    echo '<option value="'.$row["ID"].'">'.$row["Nosaukums"].'</option>';
                }
               ?>
            </select></div>
            
            <input type="hidden" name="formName" value="autors">
            <input type="submit" value="Submit">
        </form>
</div><hr><br><br>
    <div>
        <h3>Pievieno Gramatas Eksemplaru</h3><br>
        <form action="pievienoEksemplaru.php" autocomplete="no" method="post">
        <div><label for="autors">Grāmata</label><br>
        
            <select id="gramata" required name="gramata">
            <option selected value> -- grāmata -- </option>
            <?php 
               while ($row = mysqli_fetch_assoc($Gramatas)) {
                    $val = array($row["GramataaID"], $row["Nosaukums"]);    
                    array_push($GRAMATASTABULAI,$val);
                    echo '<option value="'.$row["GramataaID"].'">'.$row["Nosaukums"].'</option>';
                }
               ?>
            </select></div>
            <label for="svitras">Bibliotēkas svītrkods</label><br>
            <input type="text" id="svitras" placeholer="Bibliotēkas svītrkods" name="bibsvitras" required><br><br>
            <input type="submit" value="Submit">
        </form>
</div><hr><br><br>
<div>
        <h3>Pievieno Kategoriju</h3><br>
        <form action="pievienoKategoriju.php" autocomplete="no" method="post">
        <div><label for="virs">Virskategorija</label><br>
            <select id="virs" name='Virskategorija'>
            <option selected value> -- Virskategorija -- </option>
            <?php 
               while ($row = mysqli_fetch_assoc($Kategorijas)) {
                    echo '<option value="'.$row["ID"].'">'.$row["Kategorija"].'</option>';
                }
               ?>
            </select></div>
            <label for="nosaukums">Kategorijas nosaukums</label><br>
            <input type="text" id="nosaukums" placeholer="Kategorijas nosaukums" name="Nosaukums" required><br><br>
            <input type="submit" value="Pievieno Kategoriju">
        </form>
        </div><hr><br><br>
        <div>

        <h3>Pievieno Valodu</h3><br>
        <form action="pievienoValodu.php" autocomplete="no" method="post">
        <div>
            <label for="nosaukums">Valoda</label><br>
            <input type="text" id="nosaukums" placeholer="Valoda" name="Nosaukums" required></div><br>
            <input type="submit" value="Pievieno Valodu">
        </form><hr><br>

        <h3>Pievieno Izdevniecibu</h3><br>
        <form action="pievienoIzdevniecibu.php" autocomplete="no" method="post">
        <div>
            <label for="nosaukums">Izdevnieciba</label><br>
            <input type="text" id="nosaukums" placeholer="Izdevnieciba" name="Nosaukums" required></div><br>
            <input type="submit" value="Pievieno Izdevniecibu">
        </form>
        <br><br><br>

    

</div>


<?php

echo '<h2>Autori</h2>';
tabula($AUTORITABULAI,"Autoru");


$sql="SELECT GramataaID as ID, Nosaukums FROM gramata;";
$stmt = mysqli_prepare($conn, $sql);
$stmt->execute();
$GRAMATASTABULAI = $stmt->get_result();
echo '<h2>Gramatas</h2>';
tabula($GRAMATASTABULAI,"Gramatu");

$sql="SELECT PersonasKods as ID, Lietotajvards FROM lasitajs;";
$stmt = mysqli_prepare($conn, $sql);
$stmt->execute();
$LIETOTAJI = $stmt->get_result();
echo '<h2>Lietotaji</h2>';
tabula($LIETOTAJI,"Lasitaju");
include_once("templates/footer.php");

?>