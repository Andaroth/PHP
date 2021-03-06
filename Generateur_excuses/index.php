<!DOCTYPE html><?php 
if (isset($_POST["child"]) && isset($_POST["instit"]) && isset($_POST["reason"])) { // Si le formulaire A été envoyé
    // Récupérer les valeurs
    $child = addslashes(htmlspecialchars($_POST["child"])); // Addslashes et Htmlspecialchars pour éviter les injections
    $instit = addslashes(htmlspecialchars($_POST["instit"])); 
    $motif = addslashes(htmlspecialchars($_POST["reason"])); 
} else { // Sinon...
    $child = ""; $instit = ""; $motif = ""; // ... ne pas attribuer de valeurs aux paramètres
} ?>
<html>
    <head>
        <title>Générateur de mots d'excuses en PHP</title>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower%7CPacifico" rel="stylesheet"> 
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <h1>Générateur de sorrynotsorry</h1>
        <form action="index.php" method="post">
            <label for="child">Le nom de votre enfant : </label>
            <input id="child" name="child" type="text" autocomplete="off" />
            <br/>
            <label for="instit">Le nom de l'instituteur/trice : </label>
            <input id="instit" name="instit" type="text" autocomplete="off" />
            <br/>
            <div id="motif">
                <p>Le motif de votre absence :</p>
                <input name="reason" type="radio" value="sick" id="sick" checked/>
                <label for="sick">Maladie</label><br/>
                <input name="reason" type="radio" value="deadcat" id="deadcat" />
                <label for="deadcat">Décès du petit chat</label><br/>
                <input name="reason" type="radio" value="extra" id="extra" />
                <label for="extra">Activité extra-scolaire</label><br/>
                <input name="reason" type="radio" value="poney" id="poney" />
                <label for="poney">J'ai aquaponey</label>
            </div>
            <br/><input type="submit" />
        </form>
        <?php // Je minimifie mon PHP, ne le faites pas bande de poulpes :) 
            if ($child != "" && $instit != "" && $motif != "") { // Si les paramètres ont été définies
                $day = date("D"); // On récupère le date(D) pour avoir le jour courant
                switch($day) { // On va créer le mot en entier et en français
                    case "Mon": $day = "lundi"; break;
                    case "Tue": $day = "mardi"; break;
                    case "Wed": $day = "mercredi"; break;
                    case "Thu": $day = "jeudi"; break;
                    case "Fri": $day = "vendredi"; break;
                    case "Sat": $day = "samedi"; break;
                    case "Sun": $day = "dimanche"; break; 
                    default: $day = "jour du triche"; break; }
                $date = $day." ".date("d/m/Y"); // On va ajouter la date à la suite du jour
                switch($motif) { // En fonction du motif qui a été coché, on va changer le texte de sortie
                    case "sick": $motif = "Il/Elle avait le nez qui coule sévère et son cerveau qui sort par les oreilles."; break;
                    case "deadcat": $motif = "Petit bébé chat nous a quitté, offrez-nous du Nutella."; break;
                    case "extra": $motif = "Il/Elle devait photographier des avions pour prouver l'existence des chemtrails."; break;
                    case "poney": $motif = "Il/Elle devait chevaucher son destrier naval pour mettre la baballe dans le filet."; break;
                    default: $motif = "Nous avons cheaté le formulaire, nous sommes des sous-humains"; break;
                } // À la fin des switch, je vais pouvoir enfin echo le mot d'excuse en html en rappelant mes variables définies précédemment
                echo "<div id=\"output\">";
                echo "<h2>Votre motif d'excuse</h2>";
                echo "Bonjour Monsieur/Madame <strong>".$instit."</strong>, <br/>Notre turbulent bambin nommé <strong>".$child."</strong> sera absent ce ".$date." de votre classe qui pue les pieds ! <br/>";
                echo "Le motif est très simple : <strong>".$motif."</strong><br/>";
                echo "Merci de votre compréhension, <br/>Les parents de ".$child;
                echo "</div>"; 
            } // Fin du if (params != "")
        ?>
    </body>
</html>
