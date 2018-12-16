<?php
    
function tabula($sql_res) {
    $first = true;
    echo "<center><table class=\"schedule\">";
    while ($row = mysqli_fetch_assoc($sql_res)) {
        if ($first) {
            echo "<tr>";
            foreach ($row as $k=>$v) {
                echo "<th>$k</th>";
            }
            echo "<th> <form action='dzestAutoru.php' autocomplete='no' method='post'><input type='submit' value='delete'></th>";
            echo "</tr>".PHP_EOL;
            $first = false;
        }
        echo "<tr>";
            foreach ($row as $v) {
                echo "<td>$v</td>";
            }
            echo "</tr>".PHP_EOL;
    }
    echo "</table></center>";
    
    $row_cnt = mysqli_num_rows($sql_res);
    printf("<br><left>Result set has <b>%d</b> rows. </left>\n", $row_cnt);
    /* close result set */
    mysqli_free_result($sql_res);
    }

    
$conn = mysqli_connect('10.0.15.134','dbteh','DBteh-2018','library') or die('Nevaru pievienoties datubāzei');
$chs = mysqli_set_charset($conn, "utf8");

?>