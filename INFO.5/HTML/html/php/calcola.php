<?php

$R = $_POST['primonumero'];
$S = $_POST['secondonumero'];

$op = $_POST['operazione'];

switch ($op) {
	case 'somma':
		$res = $R + $S;
		echo "La somma di $R e $S è uguale a $res";
		break;
	case 'differenza':
		$res = $R - $S;
		echo "La differenza di $R e $S è uguale a $res";
		break;
	case 'prodotto':
		$res = $R * $S;
		echo "Il prodotto di $R e $S è uguale a $res";
		break;
	case 'divisione':
		if ($S == 0) {
			echo "Errore: divisione per zero.";
		} else {
			$res = $R / $S;
			echo "La divisione di $R per $S è uguale a $res";
		}
		break;
	default:
		echo "Operazione non valida.";
}

?>