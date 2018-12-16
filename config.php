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
                echo "</tr>".PHP_EOL;
                $first = false;
            }
            echo "<tr><a href=''>";
                foreach ($row as $v) {
                    echo "<td>$v</td>";
                }
                echo "</a></tr>".PHP_EOL;
        }
    echo "</table></center>";
    
    mysqli_free_result($sql_res);
    }



?>