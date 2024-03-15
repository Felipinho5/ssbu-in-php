<?php

    require 'json.php';

    define('CHARACTER_INFO', file_get_contents('html/character-info.html'));

    $i = find_character_index($_GET['character']);

    echo sprintf(CHARACTER_INFO,
        JSON_CHARACTERS[$i]['render'],
        JSON_CHARACTERS[$i]['name'],
        JSON_CHARACTERS[$i]['series'],
        JSON_CHARACTERS[$i]['icon'],
        JSON_CHARACTERS[$i]['description']
    );

?>