<?php
require_once("config.php");
require_once("templates/header.php");
?>


<div>

    

<h1 id="heading">Seit ir visas kategorijas un apakskategorijas</h1>
<?php

$sql="SELECT DISTINCT Kategorija FROM kategorija;";
echo "<!-- $sql -->";
$sql_res = mysqli_query($d,$sql) or die("<h1>".mysqli_error()."</h1>");
tabula($sql_res);

?>
<hr>

<?php
include_once("templates/footer.php");
?>