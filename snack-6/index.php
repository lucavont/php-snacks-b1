<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mydb</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="teachers">
    <?php 
        foreach($db['teachers'] as $teacher){
            echo $teacher['name'] . "&nbsp;" . $teacher['lastname'] . '<br>';
        }
    ?>
    </div>
    <div class="pm">
    <?php 
        foreach($db['pm'] as $pm){
            echo $pm['name'] . "&nbsp;" . $pm['lastname'] . '<br>';
        }
    ?>
    </div>
    </div>
    
</body>
</html>