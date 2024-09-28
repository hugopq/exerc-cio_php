<?php
    include('./initialize.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
    <?php
        echo getMenuHTML();

        include(PAGES[$current_page].".php");
    ?>
</body>
</html>