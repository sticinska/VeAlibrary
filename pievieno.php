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
    echo 'hello';
    $Vards = $_POST['Vards'];
    $Uzvards = $_POST['Uzvards'];
    $Valsts = $_POST['Valsts'];

    $sql = "INSERT INTO autors (Vards, Uzvards, IzcelsmesValsts)
            VALUES ('test','test','1')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}
?>