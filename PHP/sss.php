<table>
<?php

for ($riga = 1; $riga <= 6; $riga++) 
    { 
    echo "<tr>";
    for ($colonna = 1; $colonna <= 6; $colonna++) 
        {  
        $NumeroCasuale = rand(1, 6);
        echo "<td>$NumeroCasuale</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
