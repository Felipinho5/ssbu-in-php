<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if(isset($_GET['character'])) echo $_GET['character'] ?>
    </title>
    <link rel="icon" href="img/ssbu-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/character-info.css">
    <script type="text/javascript" src="js/character-info.js" defer></script>
</head>
<body>
    <?php include_once('php/character.php') ?>
</body>
</html>