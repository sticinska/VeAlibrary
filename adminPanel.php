<?php
//require_once("config.php");
require_once("templates/header.php");
?>

<div style="color:red">
        <h3>Pievieno Gramatu</h3><br>
        
        <h3>Pievieno Autoru</h3><br>
        <form action="pievieno.php" method="POST">
        <input type="text" name="Vards" placeholder="Vards">
        <input type="text" name="Uzvards" placeholder="Uzvards">
        <input type="text" name="Valsts" placeholder="Izcelsmes Valsts">
        <input type="date" name="Datums" >
        <input type="hidden" name="formName" value="autors">
        <input type="submit" value="Submit">
    
    </form>
        <h3>Pievieno Gramatas Eksemplaru</h3><br>
        <h3>Pievieno Kategoriju</h3><br>
        <h3>Pievieno Valodu</h3><br>
    

</div>


<?php
include_once("templates/footer.php");
?>