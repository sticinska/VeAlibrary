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
    $Vards = mysqli_real_escape_string($_POST['Vards']);
    $Uzvards = mysqli_real_escape_string($_POST['Uzvards']);
    $Valsts = mysqli_real_escape_string($_POST['Valsts']);

    $sql = "INSERT INTO autors ('Vards', 'Uzvards, 'IzcelsmesValsts')
            VALUES ('$Vards','$Uzvards','$Valsts')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}
?>