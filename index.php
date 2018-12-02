<?php
require_once("templates/header.php");
?>



    <div> 
    <h1 id="heading">Jaunākās grāmatas biblotēkā</h1>
    

<?php

$sql="SELECT Nosaukums FROM gramata;";
echo "<!-- $sql -->";
$sql_res = mysqli_query($d,$sql) or die("<h1>".mysqli_error()."</h1>");
tabula($sql_res);
echo "hello";
include_once("templates/footer.php");
?>
<div><h1>hello</h1></div>