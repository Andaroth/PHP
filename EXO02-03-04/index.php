<!DOCTYPE html>
<?php
if (isset($_GET["age"]) && isset($_GET["gender"])) { // Si formulaire
    $age = addslashes($_GET["age"]);
    $gender = $_GET["gender"];
    if (!(is_numeric($age))) {$output = "Ce n'est pas un âge ça !";} // Si $age NaN
    else if($age>=0) { // Si les exceptions sont OK
        switch($gender) { // Switch pour définir l'appelation
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
            default: $name = "you"; break; // Agenres et hack formulaire
        } // Fin du switch gender 
        if ($age<=115) {$output = "<h1>Hello ".$name."!</h1>";} // not old
        else {$output = "<h1>Wow! Still alive, ".$name."?</h1>";} // old
    }
    else {$output = "<h1>On n'a pas un âge négatif !</h1>";} // Si $age négatif
} else {$output = "<h1>Un bot, pour vous parler selon votre âge et genre !</h1>";$age="";} // Message de base
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>EXO02-03-04</title>
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