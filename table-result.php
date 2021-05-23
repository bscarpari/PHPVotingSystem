<?php
$arquivo = fopen('./txt/resultado.txt', 'r');
$registro = fgets($arquivo);
$countA = 0; $countB = 0; $countE = 0; $countG = 0; $countT = 0; $countTotal = 0;

do {
    list($voto) = explode("\n", $registro);

    if ($voto == '1') {
        $countA++;
    } else if ($voto == '2') {
        $countE++;
    } else if ($voto == '3') {
        $countG++;
    } else if ($voto == '4') {
        $countT++;
    } else if ($voto == '5') {
        $countB++;
    }
} while (($registro = fgets($arquivo)) !== false);

$countTotal = $countA + $countE + $countG + $countT + $countB;
$array = array('Ada' => $countA, 'Edsger' => $countE, 'Grace' => $countG, 'Tim' => $countT, 'Brancos' => $countB);
arsort($array);
$keys = array_keys($array);

$posA = array_search('Ada', $keys) + 1;
$posE = array_search('Edsger', $keys) + 1;
$posG = array_search('Grace', $keys) + 1;
$posT = array_search('Tim', $keys) + 1;
$posB = array_search('Brancos', $keys) + 1;

if ($countA == 0 && $countE == 0 && $countG == 0 && $countT == 0 && $countB == 0 && $countTotal == 0) {
    echo
    "<table class='table-responsive'>
        <h2>Ainda não temos votos suficientes. Volte mais tarde!</h2><br>
        <thead class='thead-dark'>
            <tr>
                <th></th>
                <th scope='col'>Ada lovelace</th>
                <th scope='col'>Edsger Dijkstra</th>
                <th scope='col'>Grace Murray Hopper</th>
                <th scope='col'>Tim Berners-Lee</th>
                <th scope='col'>Branco</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope='row'>Total de Votos</th>
                <td>" . '0' . "</td>
                <td>" . '0' . "</td>
                <td>" . '0' . "</td>
                <td>" . '0' . "</td>
                <td>" . '0' . "</td>
            </tr>
            <tr>
                <th scope='row'>%</th>
                <td>" . '0' . "%</td>
                <td>" . '0' . "%</td>
                <td>" . '0' . "%</td>
                <td>" . '0' . "%</td>
                <td>" . '0' . "%</td>
            </tr>
            <tr>
                <th scope='row'>Colocação</th>
                <td>" . $posA . "</td>
                <td>" . $posE . "</td>
                <td>" . $posG . "</td>
                <td>" . $posT . "</td>
                <td>" . $posB . "</td>
            </tr>
        </tbody>
    </table>";
} else {
    echo
    "<table class='table'>
            <thead class='thead-dark'>
                <tr>
                    <th></th>
                    <th scope='col'>Ada lovelace</th>
                    <th scope='col'>Edsger Dijkstra</th>
                    <th scope='col'>Grace Murray Hopper</th>
                    <th scope='col'>Tim Berners-Lee</th>
                    <th scope='col'>Branco</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <th scope='row'>Total de Votos</th>
                <td>" . $countA . "</td>
                <td>" . $countE . "</td>
                <td>" . $countG . "</td>
                <td>" . $countT . "</td>
                <td>" . $countB . "</td>
            </tr>
             <tr>
                <th scope='row'>%</th>
                <td>" . number_format((($countA * 100) / $countTotal), 2, ',', ' ') . "%</td>
                <td>" . number_format((($countE * 100) / $countTotal), 2, ',', ' ') . "%</td>
                <td>" . number_format((($countG * 100) / $countTotal), 2, ',', ' ') . "%</td>
                <td>" . number_format((($countT * 100) / $countTotal), 2, ',', ' ') . "%</td>
                <td>" . number_format((($countB * 100) / $countTotal), 2, ',', ' ') . "%</td>
            </tr>
            <tr>
                <th scope='row'>Colocação</th>
                <td>" . $posA . "</td>
                <td>" . $posE . "</td>
                <td>" . $posG . "</td>
                <td>" . $posT . "</td>
                <td>" . $posB . "</td>
            </tr>
        </tbody>
    </table>";
}
fclose($arquivo);
