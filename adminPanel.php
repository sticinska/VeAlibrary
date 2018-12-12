<?php
require_once("templates/header.php");

$sql="SELECT Nosaukums FROM valsts;";

   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, "s", $skaits);
   $stmt->execute();
   $Valstis = $stmt->get_result();

   while ($row = mysqli_fetch_assoc($sql_res)) {
       echo $row["Nosaukums"];
   }

?>

    
        <h3>Pievieno Gramatu</h3><br>
        <form action="pievienoGramatu.php" method="POST">
<div>
        <label for="nosaukums">Nosaukums</label><br>
            <input type="text" id="vards" name="Nosaukums" placeholder="Nosaukums" required>
            </div>

        <div><label for="autors">Grāmatas Autors</label><br>
            <select id="autors" name='Autors' multiple>
                <option value="viens">autors viens</option>
                <option value="divi">autors divi</option>
                <option value="tris">autors tris</option>
            </select></div>
            <div><label for="ISBN">ISBN kods</label><br>
            <input type="text" id="ISBN" name="ISBN" placeholder="ISBN kods"></div>
            <div><label for="valoda">Valoda</label><br>
            <datalist id="valoda" name='Valoda' required>
               
</datalist></div>
            <div><label for="originalvaloda">Oriģinālvaloda</label><br>
            <select id="originalvaloda" name='Originalvaloda' required>
                <option value="Latvian">Latvian</option>
                <option value="Russian">Russian</option>
                <option value="English">English</option>
            </select></div>
            <div><label for="apjoms">Lappušu skaits</label><br>
            <input type="text" id="apjoms" name="Apjoms" placeholder="Lappušu skaits"></div>
            <div><label for="izdevnieciba">Izdevnieciba</label><br>
            <input type="text" id="izdevnieciba" name="Izdevnieciba" placeholder="Izdevnieciba"></div>
            <div><label for="izdevumaGads">Izdevuma gads</label><br>
            <input type="number" id="izdevumaGads" name="IzdevumaGads" min="1000" max="2018" value="2018"></div>


            <input type="hidden" name="formName" value="gramata">
            <div><input type="submit" value="Submit"></div>
        </form>
        

<div>
        <h3>Pievieno Autoru</h3><br>
        <form action="pievienoAutoru.php" method="POST">
        <div><label for="vards">Vārds</label><br>
            <input type="text" id="vards" name="Vards" placeholder="Vards" required></div>
            <div><label for="uzvards">Uzvārds</label><br>
            <input type="text" id="uzvards" name="Uzvards" placeholder="Uzvards"></div>
            <div><label for="valsts">Izcelsmes valsts</label><br>
            <datalist id="valoda" name='Valoda' required>
               <?php 
               while ($row = mysqli_fetch_assoc($Valstis)) {
                    echo '<option value="'.$row["Nosaukums"].'">';
                }
               ?>
            </datalist></div>
            
            <input type="hidden" name="formName" value="autors">
            <input type="submit" value="Submit">
        </form>
</div>
    <div>
        <h3>Pievieno Gramatas Eksemplaru</h3><br>
        <form action="addpost.php" autocomplete="no" method="post">
            <input type="text"  required placeholer="title" name="title"><br>
            <input id="textarea" required type="textarea" placeholer="contents" name="contents"><br>
            <input type="submit" value="Add post">
        </form>
</div>
<div>
        <h3>Pievieno Kategoriju</h3><br>

        </div>
        <div>

        <h3>Pievieno Valodu</h3><br>
    

</div>


<?php
include_once("templates/footer.php");
?>