<?php
require_once("templates/header.php");

/*
$sql = "SELECT Nosaukums FROM valsts;";
$result = mysql_query($conn,$sql);

while ($row = mysql_fetch_array($result)) {
    echo $row;
}*/

?>

    
        <h3>Pievieno Gramatu</h3><br>
        <form action="pievieno.php" method="POST">

        <label for="nosaukums">Nosaukums</label>
            <input type="text" id="vards" name="Nosaukums" placeholder="Nosaukums">
        <label for="autors">Grāmatas Autors</label>
            <select id="autors" name='Autors' multiple>
                <option value="viens">autors viens</option>
                <option value="divi">autors divi</option>
                <option value="tris">autors tris</option>
            </select>
        <label for="ISBN">ISBN kods</label>
            <input type="text" id="ISBN" name="ISBN" placeholder="ISBN kods">
        <label for="valoda">Valoda</label>
            <select id="valoda" name='Valoda'>
                <option value="Latvian">Latvian</option>
                <option value="Russian">Russian</option>
                <option value="English">English</option>
            </select>
        <label for="originalvaloda">Oriģinālvaloda</label>
            <select id="originalvaloda" name='Originalvaloda'>
                <option value="Latvian">Latvian</option>
                <option value="Russian">Russian</option>
                <option value="English">English</option>
            </select>
        <label for="apjoms">Lappušu skaits</label>
            <input type="text" id="apjoms" name="apjoms" placeholder="Lappušu skaits">
        <label for="izdevnieciba">Izdevnieciba</label>
            <input type="text" id="izdevnieciba" name="Izdevnieciba" placeholder="Izdevnieciba">
        <label for="izdevumaGads">Izdevuma gads</label>
            <input type="number" id="izdevumaGads" name="IzdevumaGads" placeholder="2018">


            <input type="hidden" name="formName" value="gramata">
            <input type="submit" value="Submit">
        </form>
        

<div>
        <h3>Pievieno Autoru</h3><br>
        <form action="pievieno.php" method="POST">
            <label for="vards">Vārds</label>
            <input type="text" id="vards" name="Vards" placeholder="Vards">
            <label for="uzvards">Uzvārds</label>
            <input type="text" id="uzvards" name="Uzvards" placeholder="Uzvards">
            <label for="valsts">Izcelsmes valsts</label>
            <select id="valsts" name='Valsts'>
                <option value="Latvia">Latvia</option>
                <option value="Russia">Russia</option>
                <option value="United Kingdom">United Kingdom</option>
            </select>
            <label for="datums">Dzimšanas datums</label>
            <input id="datums"  type="date" name="Datums" >
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