<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" href="img/ssbu-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>
<body>
    <section>
        <img class="logo" src="img/ssbu-logo.png">
        <form id="login-signup" data-status="active" action="" method="post">
        
        <h1>Cadastro</h1>
        <div>
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Senha">
            <input type="password" name="confirm-password" placeholder="Confirmar senha">
            <input type="submit" method="post" value="Cadastrar">
        </div>

        <?php include_once('php/signup.php') ?>

        <p>Já possui uma conta? <br><a href="index.php">Faça login</a></p>

        </form>
    </section>
</body>
</html>