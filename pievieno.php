<?php

require_once("config.php");

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


mysqli_close($conn);








function pievienoAutoru(){
    $Vards = $_POST['Vards'];
    $Uzvards = $_POST['Uzvards'];
    $Valsts = $_POST['Valsts'];
    $Datums = $_POST['Datums'];
    
    
    $sql = "INSERT INTO autors (Vards, Uzvards, IzcelsmesValsts, DzimsanasDatums)
    VALUES ('John', 'Doe')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}
?>