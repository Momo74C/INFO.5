<?php
$conn = new mysqli("localhost", "root", "", "progetto_scuola");

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$co = $_POST['condizione'];

switch ($co) {
    case 'studenti con voto sufficente':
        $sql = "SELECT s.nome, s.cognome, v.voto
                FROM studenti AS s
                JOIN valutazioni AS v ON s.id_studente = v.id_studente
                WHERE v.voto >= 6";
        break;

    case 'studenti con voto pari a 10':
        $sql = "SELECT s.nome, s.cognome, v.voto
                FROM studenti AS s
                JOIN valutazioni AS v ON s.id_studente = v.id_studente
                WHERE v.voto = 10";
        break;
    case 'Cognome simili':
        $sql = "SELECT * FROM studenti WHERE cognome LIKE '%elshourbgy%'";
        break;
    default:
        die("Condizione non valida.");
}

$result = $conn->query($sql);

if ($result === false) {
    die("Errore nella query: " . $conn->error);
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["nome"]. " - Cognome: " . $row["cognome"]. " - Voto: " . $row["voto"]. "<br>";
    }
} else {
    echo "Nessun risultato trovato.";
}


$conn->close();
?>
