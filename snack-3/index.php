<?php

    $posts = [
        '09-08-2019' => [
            [
            'title' => 'Post 1',
            'author' => 'Luca',
            'text' => 'Mi illumino di immenso..'
            ],
        ],
        '12-01-2020' => [
            [
            'title' => 'Post 2',
            'author' => 'Luca',
            'text' => 'Lorem ipsum lorem ipsum lorem ipsum..'
            ],
        ],
        '22-09-2020' => [
            [
            'title' => 'Post 3',
            'author' => 'Luca',
            'text' => 'Lorem Lorem Lorem Lorem Lorem Lorem..'
            ],
        ],
    ];


    foreach ($posts as $data => $post){
        foreach($post as $mypost){
            echo('Data: ' . $data . '<br>' . '<ul><li>' .' Title: ' . $mypost['title'] . '</li>' . '<li>' . ' Author: ' .$mypost['author'] . '</li>' . '<li>' .' Text: ' . $mypost['text']. '</li>' . '</ul>' .'<br>');
        }
    }
?>

