<?php
$classe20 = [

    'Alunno 1' => [
        [
            'nome' => 'Marco',
            'cognome' => 'Tabaro',
            'voto' => [4, 5, 6, 7, 8]
        ],
    ],
    'Alunno 2' => [
        [
            'nome' => 'Michele',
            'cognome' => 'Papagno',
            'voto' => [7, 8, 9, 8, 10, 5]
        ]
    ],
    'Alunno 3' => [
        [
            'nome' => 'Luca',
            'cognome' => 'Cavretti',
            'voto' => [6, 5, 8, 10]
        ],
    ],
];

foreach($classe20 as $index => $alunno){
    foreach($alunno as $mioalunno){
        $miovoto = $mioalunno['voto'];
        $length = (count($miovoto));
        $media = array_sum($miovoto) / $length;
        echo ($mioalunno['nome']. '&nbsp;' . $mioalunno['cognome'] . '&nbsp;' . round($media, 0) .'<br>');
    }
}
?>