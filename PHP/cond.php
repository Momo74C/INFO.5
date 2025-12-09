<?php
$conn = new mysqli("localhost", "root", "", "progetto_scuola");

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$co = $_POST['condizione'];

switch ($co) {
    case 'studenti con voto sufficente':
        $sql = "SELECT * FROM studenti WHERE voto >= 6";
        break;
    case 'studenti con voto pari a 10':
        $sql = "SELECT * FROM studenti WHERE voto = 10";
        break;
    case 'Cognome simili':
        $sql = "SELECT * FROM studenti WHERE cognome LIKE 'elshourbgy'";
        break;
    default:
        echo "Condizione non valida.";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       echo "<div class='result'>Nome: " . $row["nome"]. " - Cognome: " . $row["cognome"]. " - Voto: " . $row["voto"]. "</div>";

    }
} else {
    echo "Nessun risultato trovato.";
}

$conn->close();
?>
