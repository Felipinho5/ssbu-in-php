<?php

    require 'json.php';

    define('CHARACTER_BOX', file_get_contents('html/character-box.html'));

    foreach(JSON_CHARACTERS as $character)
    {
        $name = $character['name'];
        $image = $character['image'];
        
        echo sprintf(CHARACTER_BOX, $name, $image, $name);
    }

?>