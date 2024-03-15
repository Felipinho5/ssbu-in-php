<?php

    $json_users = json_decode(file_get_contents('json/users.json'), true);
    define('JSON_CHARACTERS', json_decode(file_get_contents('json/characters.json'), true));

    function find_character_index($name)
    {
        $i = 0;

        foreach(JSON_CHARACTERS as $character)
        {
            if($character['name'] === $name)
                return $i;

            $i++;
        }
    }

?>