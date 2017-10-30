<?php

if (isset($_POST["premier"]) && isset($_POST["deuxieme"])) {
    $premier = $_POST["premier"];
    $deuxieme = $_POST["deuxieme"];
} else {
    $premier = "null";
    $deuxieme = "null";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Titre</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form action="index.php" method="post">
            <input name="premier" type="text">
            <input name="deuxieme" type="text">
            <input type="submit">
        </form>
        <p>
           <?php echo $premier." et ".$deuxieme; ?>
        </p>
    </body>
</html>