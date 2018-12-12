<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=library", "dbteh", "DBteh-2018");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

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
    
    try{
        // Create prepared statement
        $sql = "INSERT INTO autors (Vards, Uzvards, IzcelsmesValsts) VALUES (:vards, :uzv, :valsts)";
        $stmt = $pdo->prepare($sql);
        
        // Bind parameters to statement
        $stmt->bindParam(':vards', $_POST['Vards']);
        $stmt->bindParam(':uzv',$_POST['Uzvards']);
        $stmt->bindParam(':valsts',$_POST['Valsts']);
        
        // Execute the prepared statement
        $stmt->execute();
        echo "Records inserted successfully.";
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
     
    // Close connection
    unset($pdo);
}
?>