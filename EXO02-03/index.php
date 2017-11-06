<!DOCTYPE html>
<?php
if (isset($_GET["age"]) && isset($_GET["gender"])) { // Si formulaire
    $age = addslashes($_GET["age"]);
    $gender = $_GET["gender"];
    if (!(is_numeric($age))) {$output = "Ce n'est pas un âge ça !";} // Si $age NaN
    else if($age>=0) { // Si les exceptions sont OK
        switch($gender) {
            case ("m"): // Pour les mecs
                if ($age<12) {$name = "boy";}
                else if ($age<18) {$name = "teenage boy";}
                else if ($age<115) {$name = "sir";}
                else {$name = "old man";}
            break;
            case ("f"): // Pour les meufs
                if ($age<12) {$name = "girl";}
                else if ($age<18) {$name = "teenage girl";}
                else if ($age<115) {$name = "lady";}
                else {$name = "old lady";}
            break;
            default: $name = "you"; break; // Agenres
        } // Fin du switch gender 
        if ($age<=115) {$output = "<h2>Hello ".$name."!</h2>";}
        else {$output = "<h2>Wow! Still alive, ".$name."?</h2>";}
    }
    else {$output = "<h2>On n'a pas un âge négatif !</h2>";} // Si $age négatif
} else {$output = "<h2>Un bot, pour vous parler selon votre âge et genre !</h2>";} // Message de base
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>EXO02</title>
</head>
<body>
    <?php echo $output; ?>
    <form action="index.php">
        <label for="age">Quel est votre âge ? </label>
        <input type="text" name="age" />
        <br/>
        <label for="gender">Quel est votre genre ? </label>
        <br/>
        <input type="radio" id="g_male" name="gender" value="m" />
        <label for="g_male">Homme</label>
        <br/>
        <input type="radio" id="g_female" name="gender" value="f" />
        <label for="g_male">Femme</label>
        <br/>
        <input type="radio" id="g_x" name="gender" value="x" />
        <label for="g_x">X</label>
        <br/>
        <input type="submit">
    </form>
</body>
</html>