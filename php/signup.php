<?php

    require 'json.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $email = $_POST['email'];
        $password = $_POST['password'] ?? '';
        $confirm_password = $_POST['confirm-password'] ?? '';

        if($password !== $confirm_password)
        {
            echo "<p>As senhas não coincidem.</p>";
            return;
        }

        foreach($json_users as $user)
        {
            if($user['email'] === $email)
            {
                echo "<p>Usuário já cadastrado.</p>";
                return;
            }
        }

        $new_user = ['email' => $email, 'password' => $password];
        $json_users[] = $new_user;
        $new_json = json_encode($json_users, JSON_PRETTY_PRINT);
        file_put_contents('json/users.json', $new_json);

        echo "<p>Cadastrado com êxito.</p>";
    }
    
?>