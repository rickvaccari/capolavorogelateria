<?php
// Controlla se il modulo è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se i campi del modulo sono stati compilati
   
    if (!empty($_POST["name"]) && !empty($_POST["type"])&& !empty($_POST["base"]) && !empty($_POST["gusti"])) {
        // Dati inviati dal modulo
        $nome = $_POST["name"];
        $tipo = $_POST["type"];
        $base = $_POST["base"];
        $gusti = $_POST["gusti"];
        
        // Puoi eseguire ulteriori operazioni con i dati inviati qui
        // Ad esempio, salvare i dati su un database, inviare una mail, ecc.
        
        // Visualizza i dati inviati
        echo "<h3>Dati Inviati:</h3>";
        echo "Nome: " . $nome . "<br>";
        echo "Tipo: " . $tipo . "<br>";
        echo "Base: " . $base . "<br>";
        echo "Giusti:<br>";
        foreach ($gusti as $gusto) {
            echo "- " . $gusto . "<br>";
        }
    } else {
        // Se i campi non sono stati compilati, visualizza un messaggio di errore
        echo "<p>Si prega di compilare tutti i campi del modulo.</p>";
    }
}
?>