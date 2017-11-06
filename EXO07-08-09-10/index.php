<!DOCTYPE html>
<?php
if (isset($_GET["age"]) && isset($_GET["gender"])) { // Si formulaire
    $age = addslashes($_GET["age"]);
    $gender = $_GET["gender"];
    if (!(is_numeric($age))) {$output = "Ce n'est pas un âge ça !";} // Si $age NaN
    else if($age>=0) { // Si les exceptions sont OK
        $gender = ($gender=="f")?true:false; // true si =="f", sinon false
        if ($age >=21 && $age <= 40 && $gender) {$output = "<h1>Bonjour et bienvenue au club des jeunes femmes comméreuses.</h1>";} // not old
        else {$output = "<h1>Vous n'êtes pas invité au club privé !</h1>";} // old
    }
    else {$output = "<h1>On n'a pas un âge négatif !</h1>";} // Si $age négatif
} else {$output = "<h1>Adhésion au club privé des jeunes femmes comméreuses.</h1>";$age="";} // Message de base
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>EXO07-08-09-10</title>
</head>
<body>
    <?php echo $output; ?>
    <form action="index.php">
        <label for="age">Quel est votre âge ? </label>
        <input type="text" name="age" placeholder="<?php echo $age; ?>" />
        <br/>
        <label for="gender">Quel est votre genre ? </label>
        <br/>
        <input type="radio" id="g_male" name="gender" value="m" />
        <label for="g_male">Homme</label>
        <br/>
        <input type="radio" id="g_female" name="gender" value="f" />
        <label for="g_female">Femme</label>
        <br/>
        <input type="radio" id="g_x" name="gender" value="x" />
        <label for="g_x">X</label>
        <br/>
        <input type="submit">
    </form>
</body>
</html>