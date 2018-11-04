<?php
require_once("config.php");
require_once("templates/header.php");
?>


<div>

    

<h1 id="heading">Seit ir visas kategorijas un apakskategorijas</h1>
<?php

$query="SELECT * FROM kategorija WHERE Virskategorija = Null;";
$results = mysql_query($query);

$resultset = array();
while ($row = mysql_fetch_array($results)) {
  $resultset[] = $row;
}



foreach ($resultset as $result){
    $categoryID = $result['ID'];
    $categoryName = $result['Kategorija'];
    
    echo "<a href='#'>$categoryName</a>";
    
    $query="SELECT * FROM kategorija WHERE Virskategorija = $categoryID;";
    $resultscat = mysql_query();
    while($row = mysql_fetch_array($resultscat)){
        $childCategoryName = $row['Kategorija'];
        echo "<a href='#'>$childCategoryName</a>";
    }

}
?>
<hr>

<?php
include_once("templates/footer.php");
?>