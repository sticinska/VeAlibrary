<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=library", "dbteh", "DBteh-2018");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}


$sql = "INSERT INTO autors (Vards, Uzvards, IzcelsmesValsts) 
                    VALUES ('".."',".$_POST['Uzvards']."',".$_POST['Valsts'].")";
        
        
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

?>