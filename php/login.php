<?php

    require 'json.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $email = $_POST['email'];
        $password = $_POST['password'] ?? '';
        $found = false;

        foreach($json_users as $user)
            if($user['email'] === $email)
            {
                $found = true;

                if($user['password'] === $password)
                {
                    header('Location: character-selection.php');
                    exit;
                }

                else
                    echo "<p>Senha incorreta.</p>";
            }

        if($found === false)
            echo "<p>Usuário não cadastrado.</p>";
    }

?>