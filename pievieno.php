<?php


switch ($_POST['formName']) {
    case "autors":
        pievienoAutoru();
        break;
    case "bar":
        echo "i is bar";
        break;
    case "cake":
        echo "i is cake";
        break;
    default:
        echo "haha";
        break;
}

function pievienoAutoru(){
    $stmt = $conn->prepare("INSERT INTO autors (Vards, Uzvards, IzcelsmesValsts) VALUES (?, ?, ?)");
        $stmt->bind_param('ssi', $vards, $uzv, $valsts);
        
        $vards = $_POST["Vards"];
        $uzv = $_POST["Uzvards"];
        $valsts = $_POST['Valsts'];
        
        /* execute prepared statement */
        $stmt->execute();
        
        printf("%d Row inserted.\n", $stmt->affected_rows);
        
        /* close statement and connection */
        $stmt->close();
}
?>