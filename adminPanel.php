<?php
require_once("templates/header.php");


$sql = "SELECT Nosaukums FROM valsts;";
$result = mysql_query($conn,$sql);

while ($row = mysql_fetch_array($result)) {
    echo $row;
}

?>

<div style="color:red">
        <h3>Pievieno Gramatu</h3><br>
        
        <h3>Pievieno Autoru</h3><br>
        <form action="pievieno.php" method="POST">
        <input type="text" name="Vards" placeholder="Vards">
        <input type="text" name="Uzvards" placeholder="Uzvards">
        <select name='Valsts'>


        </select>

<?php

?>
        <input type="date" name="Datums" >
        <input type="hidden" name="formName" value="autors">
        <input type="submit" value="Submit">
    </form>
    <div>
        <h3>Pievieno Gramatas Eksemplaru</h3><br>
        <form action="addpost.php" autocomplete="no" method="post">
            <input type="text"  required placeholer="title" name="title"><br>
            <input id="textarea" required type="textarea" placeholer="contents" name="contents"><br>
            <input type="submit" value="Add post">
        </form>
</div>
        <h3>Pievieno Kategoriju</h3><br>
        <h3>Pievieno Valodu</h3><br>
    

</div>


<?php
include_once("templates/footer.php");
?>