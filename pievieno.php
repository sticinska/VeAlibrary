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

function pievienoAutoru(){
    
    
   
            $sql = "INSERT INTO autors (Vards, Uzvards, IzcelsmesValsts) 
                    VALUES ('".$_POST["Vards"]."',".$_POST['Uzvards']."',".$_POST['Valsts'].")";
        
            $stmt = $pdos->query($sql);
            header("Location:pievieno.php"); 


        $stmt->execute();
        echo "Records inserted successfully.";
    
     
    // Close connection
    unset($pdo);
}
?>